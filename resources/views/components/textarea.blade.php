<div class="{{ $attributes->get('class') ?? 'col-12 mb-3' }}">
    <div class="form-label-group">
        <textarea
            type="{{ $type ?? 'text' }}"
            name="{{ $name }}"
            id="{{ $name }}"
            class="form-control {{ Shaneoliver\LaravelFormComponents\LaravelFormComponentsFacade::validationClass($errors, $name) }}"
            placeholder="{{ $label ?? '' }}"
            {{ $attributes }}
        >{{ old($name, $value ?? '') }}</textarea>

        <label for="{{ $name }}">
            {{ $label }}
        </label>

        @error($name)
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        @if($errors->any() && old($name))
            <div class="valid-feedback">{{ $validText ?? 'Looks good' }}</div>
        @endif
    </div>
</div>