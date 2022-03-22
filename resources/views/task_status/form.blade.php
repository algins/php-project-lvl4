<div class="form-group mb-3">
    {{ Form::label('name', __('views.task_status.form.name')) }}
    {{ Form::text('name', $taskStatus->name, ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'maxlength' => 255]) }}

    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
