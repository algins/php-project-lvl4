@extends('layouts.app')

@section('content')
    <h1 class="mb-5">{{ __('views.task_status.create.create_status') }}</h1>

    <form method="POST" action="{{ route('task_statuses.store') }}" accept-charset="UTF-8" class="w-50">
        @csrf
        @include('task_status.form')
        <input class="btn btn-primary mt-3" type="submit" value="{{ __('views.task_status.create.store') }}">
    </form>
@endsection
