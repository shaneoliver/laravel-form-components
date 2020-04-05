<div class="{{ $attributes->get('class') ?? 'col-12 mb-3' }}">
    <div class="form-label-group">
        <select
            name="{{ $name }}"
            id="{{ $name }}"
            class="custom-select {{ $validationClass($errors, $name) }}"
            placeholder="{{ $label ?? '' }}"
            value="{{ old($name, $value ?? '') }}"
            {{ $attributes }}
        >{{ $slot }}</select>

        <label for="{{ $name }}">
            {{ $label }}
        </label>

        @error($name)
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        @if($errors->any() && old($name) && ($type ?? '') != 'password')
            <div class="valid-feedback">{{ $validText ?? 'Looks good' }}</div>
        @endif
    </div>
</div>