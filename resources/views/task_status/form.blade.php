<div class="form-group mb-3">
    <label for="name">{{ __('views.task_status.form.name') }}</label>
    <input class="form-control @error('name') is-invalid @enderror" name="name" type="text" id="name" maxlength="255" value="{{ old('name', $taskStatus->name ?? '') }}">

    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
