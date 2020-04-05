<?php

namespace Shaneoliver\LaravelFormComponents\Components;

trait InputTrait
{
    public function validationClass($errors)
    {
        if($errors->first($this->name)) {
            return 'is-invalid';
        } 
        
        if(old($this->name) && ($this->type ?? '') != 'password') {
            return 'is-valid';
        }
        
        return '';
    }
}
