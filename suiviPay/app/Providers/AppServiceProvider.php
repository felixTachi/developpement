<?php

namespace App\Providers;
use App\Extensions\BladeExtensions;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    //    Blade::if('admin', function () {
    //      return auth()->check() && auth()->user()->admin;
    //  }); 
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
