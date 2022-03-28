<?php

namespace App\Providers;

use Form;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('bsSelect', 'components.form.select', ['name', 'options', 'value', 'placeholder', 'label']);
        Form::component('bsSelectMultiple', 'components.form.select-multiple', ['name', 'options', 'value', 'label']);
        Form::component('bsText', 'components.form.text', ['name', 'value', 'label']);
        Form::component('bsTextarea', 'components.form.textarea', ['name', 'value', 'label']);
        Paginator::useBootstrap();
    }
}
