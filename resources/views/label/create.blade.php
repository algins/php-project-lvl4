@extends('layouts.app')

@section('content')
    <h1 class="mb-5">{{ __('views.label.create.create_label') }}</h1>

    {{ Form::model($label, ['url' => route('labels.store'), 'class' => 'w-50']) }}
        @include('label.form')
        {{ Form::submit(__('views.label.create.store'), ['class' => 'btn btn-primary mt-3']) }}
    {{ Form::close() }}
@endsection
