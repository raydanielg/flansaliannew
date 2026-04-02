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
                <p>Welcome to the official portal for Fransalian School Bombambili. Access your academic resources and stay connected with your school community.</p>
            </div>
            
            <div class="quote">
                "Hekima na Uhuru" - Wisdom is Freedom
            </div>
        </div>

        <!-- Form Container (40%) -->
        <div class="auth-form-container animate__animated animate__fadeInRight animate__delay-1s">
            <a href="{{ url('/') }}" class="btn-back">— GO BACK</a>
            
            <div class="auth-form-header">
                <img src="{{ asset('cropped-cropped-school_emblem-1-removebg-preview.png') }}" alt="School Logo" class="school-logo animate__animated animate__bounceIn animate__delay-2s">
                <h2>Login</h2>
            </div>

            <form method="POST" action="{{ route('login') }}">
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

                <div class="mb-4">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                           name="password" required autocomplete="current-password"
                           placeholder="Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-4 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label text-muted" for="remember" style="font-size: 0.85rem;">
                            Remember Me
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn-auth">
                    LOGIN
                </button>

                <div class="text-center mt-3">
                    <a class="text-muted text-decoration-none" href="{{ route('password.request') }}" style="font-size: 0.85rem;">
                        Forgot Password?
                    </a>
                </div>

                <div class="auth-links mt-4">
                    Don't have an account? <a href="{{ route('register') }}">Register here</a>
                </div>

                <div class="footer-text mt-5">
                    © {{ date('Y') }} Fransalian School Bombambili.<br>All Rights Reserved.
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
