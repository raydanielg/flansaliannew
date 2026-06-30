@extends('layouts.app')

@section('content')
<div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center py-5 position-relative" style="background-image: url('{{ asset('cropped-unnamed-8.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(135deg, rgba(0,26,51,0.92) 0%, rgba(0,51,102,0.88) 50%, rgba(0,26,51,0.92) 100%);"></div>
    <div class="auth-card animate__animated animate__zoomIn position-relative" style="box-shadow: 0 25px 80px rgba(0,0,0,0.4); border: 1px solid rgba(255,255,255,0.08);">
        <!-- Sidebar (60%) -->
        <div class="auth-sidebar">
            <div>
                <img src="{{ asset('logo.png') }}" alt="School Logo" class="school-logo mb-4" style="height: 75px; filter: drop-shadow(0 4px 8px rgba(0,0,0,0.3));">
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
                    <div class="login-input-group">
                        <i class="bi bi-envelope-fill login-input-icon"></i>
                        <input id="email" type="email" class="login-input @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                               placeholder="Email Address">
                    </div>
                    @error('email')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="login-input-group">
                        <i class="bi bi-lock-fill login-input-icon"></i>
                        <input id="password" type="password" class="login-input @error('password') is-invalid @enderror"
                               name="password" required autocomplete="current-password"
                               placeholder="Password">
                        <button type="button" class="login-toggle-pass" onclick="togglePassword()">
                            <i class="bi bi-eye-slash" id="eyeIcon"></i>
                        </button>
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
.login-input-group {
    position: relative;
    display: flex;
    align-items: center;
}
.login-input {
    width: 100%;
    padding: 14px 14px 14px 48px;
    border: 2px solid #e0e6ed;
    border-radius: 12px;
    font-size: 0.95rem;
    font-weight: 600;
    color: #333;
    background: #fff;
    transition: all 0.25s ease;
    outline: none;
}
.login-input:focus {
    border-color: var(--primary-blue);
    box-shadow: 0 0 0 5px rgba(0, 51, 102, 0.12);
    background: #fff;
}
.login-input::placeholder {
    color: #aab;
    font-weight: 500;
}
.login-input-icon {
    position: absolute;
    left: 16px;
    font-size: 1.15rem;
    color: var(--primary-blue);
    z-index: 2;
    transition: all 0.25s ease;
}
.login-input:focus + .login-input-icon,
.login-input-group:focus-within .login-input-icon {
    color: var(--secondary-blue);
    transform: scale(1.15);
}
.login-toggle-pass {
    position: absolute;
    right: 12px;
    background: none;
    border: none;
    color: #999;
    cursor: pointer;
    font-size: 1.1rem;
    padding: 4px;
    transition: color 0.2s;
}
.login-toggle-pass:hover {
    color: var(--primary-blue);
}
.btn-auth {
    background: linear-gradient(135deg, var(--primary-blue) 0%, var(--secondary-blue) 100%);
    color: white;
    border: none;
    padding: 14px;
    border-radius: 12px;
    font-weight: 700;
    font-size: 0.95rem;
    width: 100%;
    margin-top: 8px;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
    box-shadow: 0 8px 25px rgba(0, 51, 102, 0.25);
    position: relative;
    overflow: hidden;
}
.btn-auth:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 35px rgba(0, 51, 102, 0.35);
}
.btn-auth:active {
    transform: translateY(0);
}
</style>

<script>
function togglePassword() {
    const pass = document.getElementById('password');
    const icon = document.getElementById('eyeIcon');
    if (pass.type === 'password') {
        pass.type = 'text';
        icon.className = 'bi bi-eye';
    } else {
        pass.type = 'password';
        icon.className = 'bi bi-eye-slash';
    }
}
</script>
@endsection
