<?php

namespace Backpack\CRUD\PanelTraits;

trait Search
{
    /*
    |--------------------------------------------------------------------------
    |                                   SEARCH
    |--------------------------------------------------------------------------
    */

    public $ajax_table = true;

    /**
     * Add conditions to the CRUD query for a particular search term.
     *
     * @param  [string] $searchTerm Whatever string the user types in the search bar.
     */
    public function applySearchTerm($searchTerm)
    {
        return $this->query->where(function ($query) use ($searchTerm) {
            foreach ($this->getColumns() as $column) {
                if (! isset($column['type'])) {
                    abort(400, 'Missing column type when trying to apply search term.');
                }

                $this->applySearchLogicForColumn($query, $column, $searchTerm);
            }
        });
    }

    /**
     * Apply the search logic for each CRUD column.
     */
    public function applySearchLogicForColumn($query, $column, $searchTerm)
    {
        // if there's a particular search logic defined, apply that one
        if (isset($column['searchLogic'])) {
            $searchLogic = $column['searchLogic'];

            if (is_callable($searchLogic)) {
                return $searchLogic($query, $column, $searchTerm);
            }

            if ($searchLogic == false) {
                return;
            }
        }

        // sensible fallback search logic, if none was explicitly given
        if ($column['tableColumn']) {
            switch ($column['type']) {
                case 'email':
                case 'date':
                case 'datetime':
                case 'text':
                    $query->orWhere($column['name'], 'like', '%'.$searchTerm.'%');
                    break;

                case 'select':
                case 'select_multiple':
                    $query->orWhereHas($column['entity'], function ($q) use ($column, $searchTerm) {
                        $q->where($column['attribute'], 'like', '%'.$searchTerm.'%');
                    });
                    break;

                default:
                    return;
                    break;
            }
        }
    }

    /**
     * Tell the list view to use AJAX for loading multiple rows.
     *
     * @deprecated 3.3.0 All tables are AjaxTables starting with 3.3.0.
     */
    public function enableAjaxTable()
    {
        $this->ajax_table = true;
    }

    /**
     * Check if ajax is enabled for the table view.
     *
     * @deprecated 3.3.0 Since all tables use ajax, this will soon be removed.
     * @return bool
     */
    public function ajaxTable()
    {
        return $this->ajax_table;
    }

    /**
     * Get the HTML of the cells in a table row, for a certain DB entry.
     * @param  Entity $entry A db entry of the current entity;
     * @return array         Array of HTML cell contents.
     */
    public function getRowViews($entry)
    {
        $row_items = [];
        foreach ($this->columns as $key => $column) {
            $row_items[] = $this->getCellView($column, $entry);
        }

        // add the buttons as the last column
        if ($this->buttons->where('stack', 'line')->count()) {
            $row_items[] = \View::make('crud::inc.button_stack', ['stack' => 'line'])
                                ->with('crud', $this)
                                ->with('entry', $entry)
                                ->render();
        }

        // add the details_row buttons as the first column
        if ($this->details_row) {
            array_unshift($row_items, \View::make('crud::columns.details_row_button')
                                           ->with('crud', $this)
                                           ->with('entry', $entry)
                                           ->render());
        }

        return $row_items;
    }

    /**
     * Get the HTML of a cell, using the column types.
     * @param  array $column
     * @param  Entity $entry A db entry of the current entity;
     * @return HTML
     */
    public function getCellView($column, $entry)
    {
        // if column type not set, show as text
        if (! isset($column['type'])) {
            return \View::make('crud::columns.text')
                            ->with('crud', $this)
                            ->with('column', $column)
                            ->with('entry', $entry)
                            ->render();
        } else {
            // if the column has been overwritten show that one
            if (view()->exists('vendor.backpack.crud.columns.'.$column['type'])) {
                return \View::make('vendor.backpack.crud.columns.'.$column['type'])
                                ->with('crud', $this)
                                ->with('column', $column)
                                ->with('entry', $entry)
                                ->render();
            } else {
                // show the column from the package
                if (view()->exists('crud::columns.'.$column['type'])) {
                    return \View::make('crud::columns.'.$column['type'])
                                    ->with('crud', $this)
                                    ->with('column', $column)
                                    ->with('entry', $entry)
                                    ->render();
                } else {
                    return \View::make('crud::columns.text')
                                    ->with('crud', $this)
                                    ->with('column', $column)
                                    ->with('entry', $entry)
                                    ->render();
                }
            }
        }
    }

    /**
     * Created the array to be fed to the data table.
     *
     * @param $entries Eloquent results.
     * @return array
     */
    public function getEntriesAsJsonForDatatables($entries, $totalRows, $filteredRows)
    {
        $rows = [];

        foreach ($entries as $row) {
            $rows[] = $this->getRowViews($row);
        }

        return [
            'draw'            => (isset($this->request['draw']) ? (int) $this->request['draw'] : 0),
            'recordsTotal'    => $totalRows,
            'recordsFiltered' => $filteredRows,
            'data'            => $rows,
        ];
    }
}
