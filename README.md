# Beautiful Laravel Form Components

[![Latest Version on Packagist](https://img.shields.io/packagist/v/shaneoliver/laravel-form-components.svg?style=flat-square)](https://packagist.org/packages/shaneoliver/laravel-form-components)
[![Build Status](https://img.shields.io/travis/shaneoliver/laravel-form-components/master.svg?style=flat-square)](https://travis-ci.org/shaneoliver/laravel-form-components)
[![Quality Score](https://img.shields.io/scrutinizer/g/shaneoliver/laravel-form-components.svg?style=flat-square)](https://scrutinizer-ci.com/g/shaneoliver/laravel-form-components)
[![Total Downloads](https://img.shields.io/packagist/dt/shaneoliver/laravel-form-components.svg?style=flat-square)](https://packagist.org/packages/shaneoliver/laravel-form-components)

Easily create beautiful modern forms with floating labels and validation using simple Laravel form component definitions.

## Installation

You can install the package via composer:

```bash
composer require shaneoliver/laravel-form-components
```

Because the form styling extends Bootstrap 4, you will need that install as well. Please refer to the Bootstrap docs or install it along with laravel UI.

```bash
composer require laravel/ui
php artisan ui bootstrap
```

There is a small amount of additional Sass you will need to style the form. Publish the Sass and import it into your app.scss file

```bash
php artisan vendor:publish
```

```scss
@import 'vendor/so/form';
```

## Usage

Create a form using the the form wrapper component. This provides basic form layout and utilises Bootstraps .form-row class to add flexbox. This will also give you a submit button at the end of the form. Alternatively, you are free to create your own <form> element.

``` php
<x-so-form :action="route('test_store')">
    <x-so-form-input name="text" label="My text input" type="text" />
</x-so-form>
```

Every element requires a name and label prop provided. Any HTML5 input attribute (autofocus, required, min, max etc...) can be provided to the component as you would normally

A full example of all elements below

```php
<x-so-form :action="route('test_store')">
    <x-so-form-input name="text" label="Text" type="text" class="col-6 mb-3" autofocus/>
    <x-so-form-input name="email" label="Email" type="email" class="col-6 mb-3"/>
    <x-so-form-input name="number" label="Number" type="number" class="col-6 mb-3"/>
    <x-so-form-input name="password" label="Password" type="password" class="col-6 mb-3"/>
    <x-so-form-textarea name="textarea" label="Textarea" class="col-8 mb-3" />
    <x-so-form-select name="select" label="Select an option" type="select" cols="col-6 mb-3">
        <option @if(old('select') == "") {{ 'selected' }} @endif value="">Select</option>
        <option @if(old('select') == "1") {{ 'selected' }} @endif value="1">One</option>
        <option @if(old('select') == "2") {{ 'selected' }} @endif value="2">Two</option>
        <option @if(old('select') == "3") {{ 'selected' }} @endif value="3">Three</option>
    </x-so-form-select>
    <x-so-form-radio name="radio" label="Radio" class="col-6 mb-3" :options="[['value' => 1, 'label' => 'One'], ['value' => 2, 'label' => 'Two']]"/>
    <x-so-form-checkbox name="checkbox" label="Checkbox" class="col-6 mb-3" />
    <x-form.file name="file" label="File" />
</x-so-form>

```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email info@shaneoliver.com.au instead of using the issue tracker.

## Credits

- [Shane Oliver](https://github.com/shaneoliver)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.