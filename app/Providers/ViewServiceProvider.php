<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('admin',function(){
            return auth()->check() && auth()->user()->isAdmin();
        });

        Blade::if('user',function(){
            return auth()->check() && !auth()->user()->isAdmin();
        });

        Blade::if('adminActive',function(){
            return 'active';
        });
    }
}
