<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;
use App\Validator\CustomValidation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        Validator::extend('unique_teaching_class', 'App\Validator\CustomValidation@uniqueTeachingClass');
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
