@extends('layouts.app')

@section('content')
    <h1 class="mb-5">{{ __('views.task.edit.edit_task') }}</h1>

    <form method="POST" action="{{ route('tasks.update', $task) }}" accept-charset="UTF-8" class="w-50">
        @csrf
        @method('PATCH')
        @include('task.form')
        <input class="btn btn-primary mt-3" type="submit" value="{{ __('views.task.edit.update') }}">
    </form>
@endsection
