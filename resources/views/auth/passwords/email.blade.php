@extends('layouts.app')

@section('content')
<div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center py-5">
    <div class="auth-card animate__animated animate__fadeIn">
        <!-- Sidebar -->
        <div class="auth-sidebar animate__animated animate__fadeInLeft animate__delay-1s">
            <div class="divider"></div>
            <h1>Fransalian School Bombambili</h1>
            <p>Primary Day School - Learning and Growing Together.</p>
            <p>Recover your account access by requesting a password reset link.</p>
            
            <div class="quote">
                "Hekima na Uhuru" - Wisdom is Freedom
            </div>
        </div>

        <!-- Form Container -->
        <div class="auth-form-container animate__animated animate__fadeInRight animate__delay-1s">
            <a href="{{ route('login') }}" class="btn-back">← LOGIN</a>
            
            <div class="auth-form-header">
                <img src="{{ asset('cropped-cropped-school_emblem-1-removebg-preview.png') }}" alt="School Logo" class="school-logo animate__animated animate__zoomIn animate__delay-2s">
                <h2>Reset Password</h2>
            </div>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                           name="email" value="{{ old('email') }}" required autocomplete="email" autofocus 
                           placeholder="Email Address">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button type="submit" class="btn-auth">
                    SEND RESET LINK
                </button>

                <div class="auth-links">
                    Remember your password? <a href="{{ route('login') }}">Login here</a>
                </div>

                <div class="footer-text">
                    © {{ date('Y') }} Fransalian School Bombambili. All Rights Reserved.
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
