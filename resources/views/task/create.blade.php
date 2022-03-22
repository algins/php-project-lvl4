@extends('layouts.app')

@section('content')
    <h1 class="mb-5">{{ __('views.task.create.create_task') }}</h1>

    {{ Form::model($task, ['url' => route('tasks.store'), 'class' => 'w-50']) }}
        @include('task.form')
        {{ Form::submit(__('views.task.create.store'), ['class' => 'btn btn-primary mt-3']) }}
    {{ Form::close() }}
@endsection
