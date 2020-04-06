# Beautiful Laravel Form Components

[![Latest Version on Packagist](https://img.shields.io/packagist/v/shaneoliver/laravel-form-components.svg?style=flat-square)](https://packagist.org/packages/shaneoliver/laravel-form-components)
[![Build Status](https://img.shields.io/travis/shaneoliver/laravel-form-components/master.svg?style=flat-square)](https://travis-ci.org/shaneoliver/laravel-form-components)
[![Quality Score](https://img.shields.io/scrutinizer/g/shaneoliver/laravel-form-components.svg?style=flat-square)](https://scrutinizer-ci.com/g/shaneoliver/laravel-form-components)
[![Total Downloads](https://img.shields.io/packagist/dt/shaneoliver/laravel-form-components.svg?style=flat-square)](https://packagist.org/packages/shaneoliver/laravel-form-components)

Easily create beautiful modern forms with floating labels and validation using simple Laravel form component definitions.

![alt text](https://github.com/shaneoliver/laravel-form-components/assets/img/form-validated.png "Validated form")

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
php artisan vendor:publish --tag="form-components"
```

```scss
@import 'vendor/so/form';
```

## Usage

Create a form component using `<x-so-form></x-so-form>`. This component provides basic Bootstrap form styling around the default slot and includes the submit button. Alternatively, you can create your own form element and place the input components inside.

Use Laravels request validation to validation the request and pass back the error bag. A valid input will show the `.is-valid` Bootstrap class while an invalid input will show `.is-invalid`. An input that is invalid in the error bag but doesn't return an old value like a password will not show any validation. 

## Components 

### Form

``` php
<x-so-form :action="route('endpoint')">
    // Default slot
</x-so-form>
```
Props
- `action` the endpoint to submit your form to. For a string use `action` for a php command `:action` as in the example above
- `method` the method of the form. This defaults to POST
- `button` the label of the submit button. Default 'Submit'

### Input

``` php
<x-so-form-input name="text" label="Text" type="text" class="col-6 mb-3"/>
```
Props
- `label` acts as the placeholder for the inputs floating label
- `type` the type on input this is. Defaults to 'text'
- `class` the wrapper element classes. Should be used for adding columns and margin where required. Default `col-12 mb-3`

Any additional HTML input attributes will automatically be applied to the input eg `autofocus`, `required`, `min`, `max`

All input components use this set of basic props and rules regarding html attributes

### Textarea

```php
<x-so-form-textarea name="textarea" label="Textarea" class="col-12 mb-3" />
```

The textarea has the same props as the input above. It will also add any html attributes to the textarea eg `cols`, `rows`

### Select

```php
<x-so-form-select name="select" label="Select an option" type="select" cols="col-6 mb-3" :options="collect([['value' => '', 'label' => 'Select Something'],['value' => 1, 'label' => 'One'], ['value' => 2, 'label' => 'Two']])" />
```

Use the `options` prop to pass a collection containing a `value` and `label` key used to fill the options. If an options prop isn't given you can use the default slot to add your own options.

The select option has a default slot where you can add your own option elements, alternatively you can use the `options` prop which expects a collection of   

```php
<x-so-form-select name="select" label="Select an option" type="select" cols="col-6 mb-3">
    <option @if(old('select') == "") {{ 'selected' }} @endif value="" disabled>Select</option>
    <option @if(old('select') == "1") {{ 'selected' }} @endif value="1">One</option>
    <option @if(old('select') == "2") {{ 'selected' }} @endif value="2">Two</option>
    <option @if(old('select') == "3") {{ 'selected' }} @endif value="3">Three</option>
</x-so-form-select>
```

### Radio

```php
<x-so-form-radio name="radio" label="Radio" class="col-6 mb-3" :options="collect([['value' => 1, 'label' => 'One'], ['value' => 2, 'label' => 'Two']])"/>
```

Use the `options` prop to pass a collection containing a `value` and `label` key used to create the list of radio inputs. 

### Checkbox

```php
<x-so-form-checkbox name="checkbox" label="Checkbox" class="col-6 mb-3" />
```

### File

```php
<x-so-form-file name="file" label="File" />
```
If you are using a file input in your form, be sure to add the `enctype="multipart/form-data"` attribute to your form component or element. Use the html attributes on the file input component for mutliple file handling and mimetype validation.

For more information on how the custom file input works, please visit the [Bootstrap documentation](https://getbootstrap.com/docs/4.4/components/forms/#file-browser) 

### Full Example

A full example of all elements below

```php
<x-so-form :action="route('test_store')">
    <x-so-form-input name="text" label="Text" type="text" class="col-6 mb-3" autofocus/>
    <x-so-form-input name="email" label="Email" type="email" class="col-6 mb-3"/>
    <x-so-form-input name="number" label="Number" type="number" class="col-6 mb-3"/>
    <x-so-form-input name="password" label="Password" type="password" class="col-6 mb-3"/>
    <x-so-form-textarea name="textarea" label="Textarea" />
    <x-so-form-select name="select" label="Select an option" type="select" cols="col-6 mb-3" :options="collect([['value' => '', 'label' => 'Select Something'],['value' => 1, 'label' => 'One'], ['value' => 2, 'label' => 'Two']])" />
    <x-so-form-radio name="radio" label="Radio" class="col-6 mb-3" :options="collect([['value' => 1, 'label' => 'One'], ['value' => 2, 'label' => 'Two']])"/>
    <x-so-form-checkbox name="checkbox" label="Checkbox" class="col-6 mb-3" />
    <x-so-form-file name="file" label="File" />
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