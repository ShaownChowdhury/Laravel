<?php

namespace App\Providers;

use App\Models\Cart;
use App\Models\Category;
use function Laravel\Prompts\select;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

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
            'categories' => Category::with('subcategories')->select('id','category_id','category','slug')->whereNull('category_id')->get(),
            'cartCount' => Cart::where('customer_id',auth('customer')->id())->count()
        ]);

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
