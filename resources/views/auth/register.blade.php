@extends('layouts.app')

@section('content')
<div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center py-5">
    <div class="auth-card animate__animated animate__zoomIn">
        <!-- Sidebar (60%) -->
        <div class="auth-sidebar animate__animated animate__fadeInLeft animate__delay-1s">
            <div>
                <div class="divider"></div>
                <h1>Fransalian School Bombambili</h1>
                <p>Primary Day School - Learning and Growing Together.</p>
                <p>Join our community of excellence. Create an account to get started with your application or access school resources.</p>
            </div>
            
            <div class="quote">
                "Hekima na Uhuru" - Wisdom is Freedom
            </div>
        </div>

        <!-- Form Container (40%) -->
        <div class="auth-form-container animate__animated animate__fadeInRight animate__delay-1s">
            <a href="{{ url('/') }}" class="btn-back">— GO BACK</a>
            
            <div class="auth-form-header">
                <img src="{{ asset('logo.png') }}" alt="School Logo" class="school-logo animate__animated animate__bounceIn animate__delay-2s">
                <h2>Register</h2>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                           name="name" value="{{ old('name') }}" required autocomplete="name" autofocus 
                           placeholder="Full Name">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                           name="email" value="{{ old('email') }}" required autocomplete="email" 
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
                           placeholder="Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-4">
                    <input id="password-confirm" type="password" class="form-control" 
                           name="password_confirmation" required autocomplete="new-password"
                           placeholder="Confirm Password">
                </div>

                <button type="submit" class="btn-auth">
                    REGISTER
                </button>

                <div class="auth-links mt-4">
                    Already have an account? <a href="{{ route('login') }}">Login here</a>
                </div>

                <div class="footer-text mt-5">
                    © {{ date('Y') }} Fransalian School Bombambili.<br>All Rights Reserved.
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
