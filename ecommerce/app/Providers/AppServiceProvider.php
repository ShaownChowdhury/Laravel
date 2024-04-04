<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

use function Laravel\Prompts\select;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
       view()->composer('layouts.frontendLayout', function ($view) {
        $view->with([
            'categories' => Category::with('subcategories')->select('id','category_id','category','slug')->whereNull('category_id')->get() ]);
       });

       Paginator::useBootstrapFive();
    }

    // private function getCategories(){
    //     view()->composer(['layouts.frontendLayout','frontend.homepage'], function ($view) {
    //         $view->with([
    //             'categories' => Category::whereNull('category_id')->get() ]);
    //        });
    //     };
}
