<?php

namespace Shaneoliver\LaravelFormComponents;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Shaneoliver\LaravelFormComponents\Components\Checkbox;
use Shaneoliver\LaravelFormComponents\Components\Form;
use Shaneoliver\LaravelFormComponents\Components\Input;
use Shaneoliver\LaravelFormComponents\Components\Radio;
use Shaneoliver\LaravelFormComponents\Components\Select;
use Shaneoliver\LaravelFormComponents\Components\Textarea;

class LaravelFormComponentsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-form-components');

        Blade::components([
            Form::class => 'so-form',
            Input::class => 'so-form-input',
            Textarea::class => 'so-form-textarea',
            Select::class => 'so-form-select',
            Radio::class => 'so-form-radio',
            Checkbox::class => 'so-form-checkbox',
        ]);
    }

    /**
     * Register the application services.
     */
    public function register()
    {

    }
}
