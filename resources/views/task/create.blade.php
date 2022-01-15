@extends('layouts.app')

@section('content')
    <h1 class="mb-5">{{ __('views.task.create.create_task') }}</h1>

    <form method="POST" action="{{ route('tasks.store') }}" accept-charset="UTF-8" class="w-50">
        @csrf
        @include('task.form')
        <input class="btn btn-primary mt-3" type="submit" value="{{ __('views.task.create.store') }}">
    </form>
@endsection
