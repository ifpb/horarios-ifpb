<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;
use App\Validator\CustomValidation;
use App\Log;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Mostrando a última alteração
        $lastLog = Log::orderBy('id', 'desc')->with('user')->first();
        View::share('lastLog', $lastLog);

        Validator::extend('unique_teaching_class', 'App\Validator\CustomValidation@uniqueTeachingClass');
        Validator::extend('unique_time_hour_class', 'App\Validator\CustomValidation@uniqueTimeHourClass');
        Validator::extend('professor_cant_be_busy', 'App\Validator\CustomValidation@professorCantBeBusy');
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
