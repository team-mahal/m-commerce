<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
class Category extends Model
{
    use CrudTrait;

    /*
	|--------------------------------------------------------------------------
	| GLOBAL VARIABLES
	|--------------------------------------------------------------------------
	*/

    protected $table = 'categories';
    //protected $primaryKey = 'id';
    // protected $guarded = ['id'];
    protected $fillable = [
    	'parent_id',
    	'name',
    	'slug',
    	'lft',
    	'rgt',
    	'depth'
	];
    // protected $hidden = [];
    // protected $dates = [];

    /*
	|--------------------------------------------------------------------------
	| FUNCTIONS
	|--------------------------------------------------------------------------
	*/

    /*
	|--------------------------------------------------------------------------
	| RELATIONS
	|--------------------------------------------------------------------------
	*/

	public function parent()
    {
        return $this->belongsTo('App\Models\Category', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Models\Category', 'parent_id');
    }

    public function cartRules()
    {
        return $this->belongsToMany('App\Models\CartRule');
    }

    public function childs()
    {
        return $this->hasMany('App\Models\Category', 'parent_id');
    }

    public function products()
    {
        return $this->belongsToMany('App\Models\Product');
    }

    /*
	|--------------------------------------------------------------------------
	| SCOPES
	|--------------------------------------------------------------------------
	*/

    /*
	|--------------------------------------------------------------------------
	| ACCESORS
	|--------------------------------------------------------------------------
	*/

    /*
	|--------------------------------------------------------------------------
	| MUTATORS
	|--------------------------------------------------------------------------
	*/
}
