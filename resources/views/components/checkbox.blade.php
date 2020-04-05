<div class="{{ $attributes->get('class') ?? 'col-12 mb-3' }}">
    <div class="custom-control custom-checkbox">
        <input 
            type="checkbox"
            id="{{ $name }}" 
            name="{{ $name }}" 
            class="custom-control-input  {{ $validationClass($errors, $name) }}" 
            {{ old($name) ? 'checked' : '' }}
        >
        <label class="custom-control-label" for="{{ $name }}">{{ $label }}</label>
        
        @error($name)
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        @if($errors->any() && old($name) && ($type ?? '') != 'password')
            <div class="valid-feedback">{{ $validText ?? 'Looks good' }}</div>
        @endif
    </div>
</div>