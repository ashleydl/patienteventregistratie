<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Fix for Laravel 5.4 where unique keys were larger than 767 bytes
        Schema::defaultStringLength(191);
        // Custom validation rule for Google Two-Factor Authentication
        Validator::extend('google2fa', 'App\Http\GoogleValidator@validate');
        // Load extra Form macro for Form::datetime
        require app_path().'/misc/datetime_macro.php';
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