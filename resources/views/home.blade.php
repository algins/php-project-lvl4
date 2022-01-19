@extends('layouts.app')

@section('content')
    <div class="p-5 mb-4 bg-light border rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">{{ __('views.home.greeting') }}</h1>
            <p class="col-md-8 fs-4">{{ __('views.home.description') }}</p>
            <a href="https://hexlet.io" target="_blank" class="btn btn-primary btn-lg" type="button">{{ __('views.home.learn_more') }}</a>
        </div>
    </div>
@endsection
