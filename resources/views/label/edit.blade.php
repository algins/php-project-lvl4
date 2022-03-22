@extends('layouts.app')

@section('content')
    <h1 class="mb-5">{{ __('views.label.edit.edit_label') }}</h1>

    {{ Form::model($label, ['url' => route('labels.update', $label), 'method' => 'PATCH', 'class' => 'w-50']) }}
        @include('label.form')
        {{ Form::submit(__('views.label.edit.update'), ['class' => 'btn btn-primary mt-3']) }}
    {{ Form::close() }}
@endsection
