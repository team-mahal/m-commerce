<?php

namespace App\Providers;

use App\Models\AttributeSet;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\View\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function(View $view) {
            $categories = Category::with('children')->whereParentId(0)->orWhere('parent_id',null)->get();
            $footercategories = Category::orWhere('forfooter',1)->take(9)->get();
            $footercategoriesright = Category::orWhere('forfooter',1)->skip(9)->take(9)->get();
            $view->with('categories', $categories);
            $view->with('footercategories', $footercategories);
            $view->with('footercategoriesright', $footercategoriesright);
        });

        Validator::extend('recaptcha', 'App\\Validators\\ReCaptcha@validate');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
