@extends('layouts.app')

@section('content')
    <h1 class="mb-5">{{ __('views.label.create.create_label') }}</h1>

    <form method="POST" action="{{ route('labels.store') }}" accept-charset="UTF-8" class="w-50">
        @csrf
        @include('label.form')
        <input class="btn btn-primary mt-3" type="submit" value="{{ __('views.label.create.store') }}">
    </form>
@endsection
