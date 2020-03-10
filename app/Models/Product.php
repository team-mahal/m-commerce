<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Support\Facades\Route;
class Product extends Model
{
    use CrudTrait;

    /*
	|--------------------------------------------------------------------------
	| GLOBAL VARIABLES
	|--------------------------------------------------------------------------
	*/

    protected $table = 'products';
    //protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
    	'group_id',
    	'attribute_set_id',
        'ishotproduct',
        'brand_id',
        'generic_id',
        'type_id',
        'company_id',
        'ishotproduct',
        'name',
    	'slug',
    	'description',
    	'price',
    	'tax_id',
    	'sku',
    	'stock',
    	'active',
    	'created_at',
    	'updated_at'
	];
    // protected $hidden = [];
    // protected $dates = [];

    /*
	|--------------------------------------------------------------------------
	| EVENTS
	|--------------------------------------------------------------------------
	*/
	protected static function boot()
    {
        parent::boot();

        static::deleting(function($model) {
            $model->categories()->detach();
            $model->attributes()->detach();

            // Delete product images
            $disk = 'products';

            foreach ($model->images as $image) {
                // Delete image from disk
                if (\Storage::disk($disk)->has($image->name)) {
                    \Storage::disk($disk)->delete($image->name);
                }

                // Delete image from db
                $image->delete();
            }
        });
    }

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

	public function categories()
	{
		return $this->belongsToMany('App\Models\Category');
	}

	public function attributes()
	{
		return $this->belongsToMany('App\Models\Attribute', 'attribute_product_value', 'product_id', 'attribute_id')->withPivot('value');
	}

	public function tax()
	{
		return $this->hasOne('App\Models\Tax');
	}

	public function images()
	{
		return $this->hasMany('App\Models\ProductImage')->orderBy('order', 'ASC');
	}

    public function group()
    {
        return $this->belongsTo('App\Models\ProductGroup');
    }

    public function cartRules()
    {
        return $this->belongsToMany('App\Models\CartRule');
    }

    public function specificPrice()
    {
        return $this->hasOne('App\Models\SpecificPrice');
    }

    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\Type');
    }

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }

    public function generic()
    {
        return $this->belongsTo('App\Models\Generic');
    }



    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */
    public function scopeLoadCloneRelations($query)
    {
        $query->with('categories', 'attributes', 'images');
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }


    /*
	|--------------------------------------------------------------------------
	| ACCESORS
	|--------------------------------------------------------------------------
	*/

    public function getRouteAttribute()
    {
        return Route::has($this->slug) ? route($this->slug) : route('productdetails',['id'=>$this->id]);
    }

    /*
	|--------------------------------------------------------------------------
	| MUTATORS
	|--------------------------------------------------------------------------
	*/
}
