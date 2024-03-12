<?php

namespace App\Providers;

use Darryldecode\Cart\Cart;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        View::composer(['layouts.index', 'products.show'], function ($view) {
            
            $view->with([
                'cartCount' => \Darryldecode\Cart\Facades\CartFacade::getTotalQuantity(), 
                'cartTotal' => \Darryldecode\Cart\Facades\CartFacade::getTotal(),
            ]);
        });
    }
}
