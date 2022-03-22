@extends('layouts.app')

@section('content')
    <h1 class="mb-5">{{ __('views.task.edit.edit_task') }}</h1>

    {{ Form::model($task, ['url' => route('tasks.update', $task), 'method' => 'PATCH', 'class' => 'w-50']) }}
        @include('task.form')
        {{ Form::submit(__('views.task.edit.update'), ['class' => 'btn btn-primary mt-3']) }}
    {{ Form::close() }}
@endsection
