<form class="laravel-form-components" method="{{ $method ?? 'POST' }}" action="{{ $action ?? '' }}" {{ $attributes }}>
    @csrf
    <div class="form-row">
        {{ $slot }}
    </div>
    <div class="form-row">
        <div class="col-12">
            @if ($buttons ?? '')
                {{ $buttons }}
            @else
                <button class="btn btn-primary btn-lg">{{ $button ?? 'Submit' }}</button>
            @endif
        </div>
    </div>
</form>
