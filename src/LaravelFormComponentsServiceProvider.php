<?php

namespace Shaneoliver\LaravelFormComponents;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class LaravelFormComponentsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-form-components');

        Blade::components([
            'laravel-form-components::components.form' => 'so-form',
            'laravel-form-components::components.input' => 'so-form-input',
            'laravel-form-components::components.textarea' => 'so-form-textarea',
            'laravel-form-components::components.select' => 'so-form-select',
            'laravel-form-components::components.radio' => 'so-form-radio',
            'laravel-form-components::components.checkbox' => 'so-form-checkbox',
            'laravel-form-components::components.file' => 'so-form-file',
        ]);

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/sass/form.scss' => resource_path('sass/vendor/so/form.scss'),
            ], 'form-components');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Register the main class to use with the facade
        $this->app->singleton('laravel-form-components', function () {
            return new LaravelFormComponents;
        });
    }
}
