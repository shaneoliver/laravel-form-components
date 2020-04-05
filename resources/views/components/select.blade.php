<div class="{{ $attributes->get('class') ?? 'col-12 mb-3' }}">
    <div class="form-label-group">
        <select
            name="{{ $name }}"
            id="{{ $name }}"
            class="custom-select {{ Shaneoliver\LaravelFormComponents\LaravelFormComponentsFacade::validationClass($errors, $name) }}"
            placeholder="{{ $label ?? '' }}"
            value="{{ old($name, $value ?? '') }}"
            {{ $attributes }}
        >
        @if($options ?? false)
            @foreach ($options as $option)
                <option 
                    @if(old($name) == $option['value']) {{ 'selected' }} @endif 
                    value="{{ $option['value'] }}"
                >
                    {{ $option['label'] }}
                </option>
            @endforeach
        @else 
            {{ $slot }}
        @endif
        </select>

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