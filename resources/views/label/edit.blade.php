@extends('layouts.app')

@section('content')
    <h1 class="mb-5">{{ __('views.label.edit.edit_label') }}</h1>

    <form method="POST" action="{{ route('labels.update', $label) }}" accept-charset="UTF-8" class="w-50">
        @csrf
        @method('PATCH')
        @include('label.form')
        <input class="btn btn-primary mt-3" type="submit" value="{{ __('views.label.edit.update') }}">
    </form>
@endsection
