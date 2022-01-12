@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('views.auth.verify.verify') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('views.auth.verify.verification_link_sent') }}
                        </div>
                    @endif

                    {{ __('views.auth.verify.check_your_email') }}
                    {{ __('views.auth.verify.did_not_receive') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('views.auth.verify.verify_form.resend') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
