<div class="form-group mb-3">
    <label for="name">{{ __('views.label.form.name') }}</label>
    <input class="form-control @error('name') is-invalid @enderror" name="name" type="text" id="name" maxlength="255" value="{{ old('name', $label->name ?? '') }}">

    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group mb-3">
    <label for="description">{{ __('views.label.form.description') }}</label>
    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description">{{ old('description', $label->description ?? '') }}</textarea>

    @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
