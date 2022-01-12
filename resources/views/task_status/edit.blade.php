@extends('layouts.app')

@section('content')
    <h1 class="mb-5">{{ __('views.task_status.edit.edit_status') }}</h1>

    <form method="POST" action="{{ route('task_statuses.update', $taskStatus) }}" accept-charset="UTF-8" class="w-50">
        @csrf
        @method('PATCH')
        @include('task_status.form')
        <input class="btn btn-primary mt-3" type="submit" value="{{ __('views.task_status.edit.update') }}">
    </form>
@endsection
