@extends('layouts.app')

@section('content')
<div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center py-5">
    <div class="auth-card animate__animated animate__fadeIn">
        <!-- Sidebar -->
        <div class="auth-sidebar animate__animated animate__fadeInLeft animate__delay-1s">
            <div class="divider"></div>
            <h1>Fransalian School Bombambili</h1>
            <p>Primary Day School - Learning and Growing Together.</p>
            <p>Set a new password for your account to regain access to school resources.</p>
            
            <div class="quote">
                "Hekima na Uhuru" - Wisdom is Freedom
            </div>
        </div>

        <!-- Form Container -->
        <div class="auth-form-container animate__animated animate__fadeInRight animate__delay-1s">
            <div class="auth-form-header">
                <img src="{{ asset('logo.png') }}" alt="School Logo" class="school-logo animate__animated animate__zoomIn animate__delay-2s">
                <h2>Reset Password</h2>
            </div>

            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                           name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus
                           placeholder="Email Address">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                           name="password" required autocomplete="new-password"
                           placeholder="New Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <input id="password-confirm" type="password" class="form-control" 
                           name="password_confirmation" required autocomplete="new-password"
                           placeholder="Confirm New Password">
                </div>

                <button type="submit" class="btn-auth">
                    RESET PASSWORD
                </button>

                <div class="footer-text">
                    © {{ date('Y') }} Fransalian School Bombambili. All Rights Reserved.
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
