<div class="form-group mb-3">
    {{ Form::label('name', __('views.task.form.name')) }}
    {{ Form::text('name', $task->name, ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'maxlength' => 255]) }}

    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group mb-3">
    {{ Form::label('description', __('views.task.form.description')) }}
    {{ Form::textarea('description', $task->description, ['class' => $errors->has('description') ? 'form-control is-invalid' : 'form-control']) }}

    @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group mb-3">
    {{ Form::label('status_id', __('views.task.form.status')) }}
    {{ Form::select('status_id', $taskStatuses->pluck('name', 'id'), null, ['placeholder' => '', 'class' => $errors->has('status_id') ? 'form-control is-invalid' : 'form-control']) }}

    @error('status_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group mb-3">
    {{ Form::label('assigned_to_id', __('views.task.form.assignee')) }}
    {{ Form::select('assigned_to_id', $users->pluck('name', 'id'), null, ['placeholder' => '', 'class' => $errors->has('assigned_to_id') ? 'form-control is-invalid' : 'form-control']) }}

    @error('assigned_to_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group mb-3">
    {{ Form::label('labels[]', __('views.task.form.labels')) }}
    {{ Form::select('labels[]', $labels->pluck('name', 'id'), null, ['multiple' => true, 'class' => $errors->has('labels.*') ? 'form-control is-invalid' : 'form-control']) }}

    @error('labels.*')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
