@extends('layouts.app')

@section('content')
    <h1 class="mb-5">{{ __('views.task.show.show_task', ['task' => $task->name]) }} @auth <a href="{{ route('tasks.edit', $task) }}">⚙</a> @endauth</h1>

    <p>{{ __('views.task.show.name') }}: {{ $task->name }}</p>
    <p>{{ __('views.task.show.status') }}: {{ $task->status->name }}</p>
    <p>{{ __('views.task.show.description') }}: {{ $task->description }}</p>
    <p>{{ __('views.task.show.labels') }}:</p>

    <ul>
        @foreach ($task->labels as $label)
            <li>{{ $label->name }}</li>
        @endforeach
    </ul>
@endsection
