<?php

namespace Shaneoliver\LaravelFormComponents\Components;

use Illuminate\View\Component;

class Input extends Component
{
    use InputTrait;
    
    public $name;

    public $label;

    public $type;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label, $type = 'text')
    {
        $this->name = $name;
        $this->label = $label;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('laravel-form-components::components.input');
    }
}
