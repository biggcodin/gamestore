<?php

namespace App\Providers;
use Illuminate\Support\Facades\Validator;
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

    public function boot()
{
    Validator::extend('password', function ($attribute, $value, $parameters, $validator) {
        // منطق سفارشی اعتبارسنجی رمز عبور
        return strlen($value) >= 8 && preg_match('/[A-Z]/', $value) && preg_match('/[0-9]/', $value);
    });
}
}




