<form method="{{ $method }}" action="{{ $action }}">
    @csrf
    <div class="form-row">
        {{ $slot }}
    </div>
    <div class="form-row">
        <button class="btn btn-primary btn-lg">Submit</button>
    </div>
</form>