
<div class="{{ $cols ?? 'col-12 mb-3' }}">
    <div class="custom-file">
        <input
            type="file"
            name="{{ $name }}"
            id="{{ $name }}"
            class="custom-file-input {{ Shaneoliver\LaravelFormComponents\LaravelFormComponentsFacade::validationClass($errors, $name, $type ?? '') }}"
            placeholder="{{ $label ?? '' }}"
            value="{{ old($name, $value ?? '') }}"
            {{ $attributes }}
        >

        <label class="custom-file-label" for="{{ $name }}">
            Choose file..
        </label>

        @error($name)
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        @if($errors->any() && old($name))
            <div class="valid-feedback">{{ $validText ?? 'Looks good' }}</div>
        @endif
    </div>
</div>