<?php

namespace Backpack\Settings\app\Http\Controllers;

use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION
use Backpack\Settings\app\Http\Requests\SettingRequest as StoreRequest;
use Backpack\Settings\app\Http\Requests\SettingRequest as UpdateRequest;

class SettingCrudController extends CrudController
{
    public function __construct()
    {
        parent::__construct();

        $this->crud->denyAccess(['create','delete']);


        $this->crud->setModel("Backpack\Settings\app\Models\Setting");
        $this->crud->setEntityNameStrings(trans('backpack::settings.setting_singular'), trans('backpack::settings.setting_plural'));
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/setting');

        $this->crud->setFromDb();

        $this->crud->addField([
            'name'       => 'name',
            'label'      => 'Name',
            'type'       => 'text',
            'attributes' => [
               'disabled'=>'disabled',
             ], // change the HTML attributes of your input
        ]);

        $this->crud->addField([
            'name'       => 'value',
            'label'      => 'Value',
            'type'       => 'ckeditor'
        ]);
    }

    /**
     * Display all rows in the database for this entity.
     * This overwrites the default CrudController behaviour:
     * - instead of showing all entries, only show the "active" ones.
     *
     * @return Response
     */
    public function index()
    {
        return parent::index();
    }

    public function store(StoreRequest $request)
    {
        return parent::storeCrud();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */

    public function update(UpdateRequest $request)
    {
        return parent::updateCrud();
    }
}
