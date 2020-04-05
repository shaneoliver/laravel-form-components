<div class="{{ $attributes->get('class') ?? 'col-12 mb-3' }}">
    @foreach ($options ?? [] as $item)
        <div class="custom-control custom-radio">
            <input 
                type="radio" 
                id="{{ $name }}{{ $loop->index }}" 
                name="{{ $name }}" 
                class="custom-control-input {{ Shaneoliver\LaravelFormComponents\LaravelFormComponentsFacade::validationClass($errors, $name) }}"
                value="{{ $item['value'] }}"
            >
            <label class="custom-control-label" for="{{ $name }}{{ $loop->index }}">
                {{ $item['label'] }}
            </label>

            @if($errors->has($name) && $loop->last)
                <div class="invalid-feedback">{{ $errors->first($name) }}</div>
            @endif

            @if($errors->any() && old($name) && $loop->last)
                <div class="valid-feedback">{{ $validText ?? 'Looks good' }}</div>
            @endif
        </div>
    @endforeach
</div>