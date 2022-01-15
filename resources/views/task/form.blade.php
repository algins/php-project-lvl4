<div class="form-group mb-3">
    <label for="name">{{ __('views.task.form.name') }}</label>
    <input class="form-control @error('name') is-invalid @enderror" name="name" type="text" id="name" maxlength="255" value="{{ old('name', $task->name ?? '') }}">

    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group mb-3">
    <label for="name">{{ __('views.task.form.description') }}</label>
    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description">{{ old('name', $task->name ?? '') }}</textarea>

    @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group mb-3">
    <label for="status_id">{{ __('views.task.form.status') }}</label>
    <select class="form-control @error('status_id') is-invalid @enderror" name="status_id" id="status_id">
        <option></option>

        @foreach ($taskStatuses as $taskStatus)
            <option value="{{ $taskStatus->id }}" @if($taskStatus->id == old('status_id', $task->status_id ?? '')) selected @endif>{{ $taskStatus->name }}</option>
        @endforeach
    </select>

    @error('status_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group mb-3">
    <label for="status_id">{{ __('views.task.form.assignee') }}</label>
    <select class="form-control @error('assigned_to_id') is-invalid @enderror" name="assigned_to_id" id="assigned_to_id">
        <option></option>

        @foreach ($users as $user)
            <option value="{{ $user->id }}" @if($user->id == old('assigned_to_id', $task->assigned_to_id ?? '')) selected @endif>{{ $user->name }}</option>
        @endforeach
    </select>

    @error('assigned_to_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
