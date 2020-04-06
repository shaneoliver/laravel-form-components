<form class="laravel-form-components" method="{{ $method ?? 'POST' }}" action="{{ $action ?? '' }}" {{ $attributes }}>
    @csrf
    <div class="form-row">
        {{ $slot }}
    </div>
    <div class="form-row">
        <button class="btn btn-primary btn-lg">{{ $button ?? 'Submit' }}</button>
    </div>
</form>