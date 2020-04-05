<?php

namespace Shaneoliver\LaravelFormComponents;

class LaravelFormComponents
{
    public function validationClass($errors, $name, $type = '')
    {
        if($errors->first($name)) {
            return 'is-invalid';
        } 
        
        if(old($name) && ($type ?? '') != 'password') {
            return 'is-valid';
        }
        
        return '';
    }
}