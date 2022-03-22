<div class="form-group mb-3">
    {{ Form::label('name', __('views.label.form.name')) }}
    {{ Form::text('name', $label->name, ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'maxlength' => 255]) }}

    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group mb-3">
    {{ Form::label('description', __('views.label.form.description')) }}
    {{ Form::textarea('description', $label->description, ['class' => $errors->has('description') ? 'form-control is-invalid' : 'form-control']) }}

    @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
