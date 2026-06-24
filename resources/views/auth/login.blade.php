@extends('layouts.app')

@section('content')
<div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center py-5 position-relative" style="background-image: url('{{ asset('cropped-unnamed-8.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(135deg, rgba(0,26,51,0.92) 0%, rgba(0,51,102,0.88) 50%, rgba(0,26,51,0.92) 100%);"></div>
    <div class="auth-card animate__animated animate__zoomIn position-relative" style="box-shadow: 0 25px 80px rgba(0,0,0,0.4); border: 1px solid rgba(255,255,255,0.08);">
        <!-- Sidebar (60%) -->
        <div class="auth-sidebar">
            <div>
                <img src="{{ asset('cropped-cropped-school_emblem-1-removebg-preview.png') }}" alt="School Logo" class="school-logo mb-4" style="height: 75px; filter: drop-shadow(0 4px 8px rgba(0,0,0,0.3));">
                <div class="divider"></div>
                <h1>Fransalian School Bombambili</h1>
                <p>Primary Day School - Learning and Growing Together.</p>
                <p>Welcome to the official portal for Fransalian School Bombambili. Access your academic resources and stay connected with your school community.</p>
            </div>
            
            <div class="quote">
                <i class="bi bi-quote me-2"></i>"Hekima na Uhuru" - Wisdom is Freedom
            </div>
        </div>

        <!-- Form Container (40%) -->
        <div class="auth-form-container">
            <a href="{{ url('/') }}" class="btn-back">— GO BACK</a>
            
            <div class="auth-form-header">
                <div class="login-icon-circle mb-3">
                    <i class="bi bi-shield-lock fs-2 text-primary"></i>
                </div>
                <h2>Welcome Back</h2>
                <p class="text-muted small mb-0">Sign in to your account</p>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-bold small text-muted mb-1">Email Address</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0 ps-3"><i class="bi bi-envelope text-primary"></i></span>
                        <input id="email" type="email" class="form-control border-start-0 @error('email') is-invalid @enderror" 
                               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus 
                               placeholder="Enter your email">
                    </div>
                    @error('email')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold small text-muted mb-1">Password</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0 ps-3"><i class="bi bi-lock text-primary"></i></span>
                        <input id="password" type="password" class="form-control border-start-0 @error('password') is-invalid @enderror" 
                               name="password" required autocomplete="current-password"
                               placeholder="Enter your password">
                    </div>
                    @error('password')
                        <span class="invalid-feedback d-block" role="alert">
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
                    <a class="text-decoration-none small fw-bold" href="{{ route('password.request') }}" style="color: var(--primary-blue); font-size: 0.8rem;">
                        Forgot Password?
                    </a>
                </div>

                <button type="submit" class="btn-auth">
                    <i class="bi bi-box-arrow-in-right me-2"></i>SIGN IN
                </button>

                <div class="auth-links mt-4">
                    Don't have an account? <a href="{{ route('register') }}">Register here</a>
                </div>

                <div class="footer-text mt-4">
                    © {{ date('Y') }} Fransalian School Bombambili. All Rights Reserved.
                </div>
            </form>
        </div>
    </div>
</div>

<style>
.login-icon-circle {
    width: 65px; height: 65px; border-radius: 50%;
    background: linear-gradient(135deg, #e7f1ff 0%, #c2d9ff 100%);
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto; box-shadow: 0 4px 15px rgba(0,51,102,0.15);
}
.auth-sidebar .school-logo {
    filter: drop-shadow(0 4px 8px rgba(0,0,0,0.3));
}
</style>
@endsection
