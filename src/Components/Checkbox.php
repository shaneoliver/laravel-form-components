<?php

namespace Shaneoliver\LaravelFormComponents\Components;

use Illuminate\View\Component;

class Checkbox extends Component
{    
    use InputTrait;
    
    public $name;

    public $label;

    public $options;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label, $options = [])
    {
        $this->name = $name;
        $this->label = $label;
        $this->options = $options;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('laravel-form-components::components.checkbox');
    }
}
