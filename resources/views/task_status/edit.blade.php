@extends('layouts.app')

@section('content')
    <h1 class="mb-5">{{ __('views.task_status.edit.edit_status') }}</h1>

    {{ Form::model($taskStatus, ['url' => route('task_statuses.update', $taskStatus), 'method' => 'PATCH', 'class' => 'w-50']) }}
        @include('task_status.form')
        {{ Form::submit(__('views.task_status.edit.update'), ['class' => 'btn btn-primary mt-3']) }}
    {{ Form::close() }}
@endsection
