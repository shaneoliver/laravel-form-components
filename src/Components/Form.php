<?php

namespace Shaneoliver\LaravelFormComponents\Components;

use Illuminate\View\Component;

class Form extends Component
{
    public $action;

    public $method;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($action, $method = 'POST')
    {
        $this->action = $action;
        $this->method = strtoupper($method);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('laravel-form-components::components.form');
    }
}
