@extends('layouts.app')

@section('body')
<body class="antialiased border-top-wide border-primary d-flex flex-column">
    <div class="flex-fill d-flex flex-column justify-content-center py-4">
        <div class="container-tight py-6">
            <div class="text-center mb-4">
                <!-- You can set your logo on here -->
                <a href="."><img src="https://preview.tabler.io/static/logo.svg" height="36" alt=""></a>
            </div>
            <div class="card card-md">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">{{ __('Verify Your Email Address') }}</h2>

                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    <p class="text-muted">{{ __('Before proceeding, please check your email for a verification link.') }}</p>
                    <p class="text-muted">{{ __('If you did not receive the email') }},</p>

                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
