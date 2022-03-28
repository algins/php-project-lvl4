<div class="form-group mb-3">
    @isset ($label)
        {{ Form::label($name, $label) }}
    @endisset

    {{ Form::select($name, $options, $value, ['placeholder' => $placeholder, 'class' => $errors->has($name) ? 'form-control is-invalid' : 'form-control']) }}

    @error($name)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
