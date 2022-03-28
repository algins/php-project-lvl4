{{ Form::bsText('name', $task->name, __('views.task.form.name')) }}
{{ Form::bsTextarea('description', $task->description, __('views.task.form.description')) }}
{{ Form::bsSelect('status_id', $taskStatuses->pluck('name', 'id'), null, '', __('views.task.form.status')) }}
{{ Form::bsSelect('assigned_to_id', $users->pluck('name', 'id'), null, '', __('views.task.form.assignee')) }}
{{ Form::bsSelectMultiple('labels', $labels->pluck('name', 'id'), null, __('views.task.form.labels')) }}
