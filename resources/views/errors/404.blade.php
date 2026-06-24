@extends('layouts.app')

@section('content')
<div class="min-vh-100 d-flex align-items-center justify-content-center position-relative overflow-hidden" style="background: linear-gradient(135deg, #001a33 0%, #003366 50%, #001a33 100%);">
    <!-- Animated background shapes -->
    <div class="position-absolute top-0 start-0 w-100 h-100 overflow-hidden" style="z-index: 0;">
        <div class="position-absolute rounded-circle opacity-10" style="width: 400px; height: 400px; background: #0056b3; top: -100px; right: -100px; animation: float 8s ease-in-out infinite;"></div>
        <div class="position-absolute rounded-circle opacity-10" style="width: 300px; height: 300px; background: #007bff; bottom: -80px; left: -80px; animation: float 10s ease-in-out infinite 2s;"></div>
        <div class="position-absolute rounded-circle opacity-5" style="width: 200px; height: 200px; background: #3399ff; top: 50%; left: 50%; animation: float 12s ease-in-out infinite 4s;"></div>
    </div>

    <div class="text-center position-relative" style="z-index: 1;">
        <!-- 404 Number -->
        <div class="mb-4">
            <h1 class="display-1 fw-bold text-white mb-0" style="font-size: 8rem; text-shadow: 0 0 40px rgba(0,123,255,0.4); line-height: 1;">404</h1>
            <div class="d-flex align-items-center justify-content-center gap-3 my-3">
                <div style="width: 60px; height: 3px; background: linear-gradient(90deg, transparent, #007bff);"></div>
                <i class="bi bi-exclamation-triangle-fill text-warning fs-4"></i>
                <div style="width: 60px; height: 3px; background: linear-gradient(90deg, #007bff, transparent);"></div>
            </div>
        </div>

        <!-- Message -->
        <h2 class="text-white fw-bold mb-3" style="font-size: 2rem;">Page Not Found</h2>
        <p class="text-white-50 mb-5 mx-auto" style="max-width: 450px; font-size: 1.05rem;">
            The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
        </p>

        <!-- Action Buttons -->
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="{{ url('/') }}" class="btn btn-primary btn-lg px-5 rounded-pill fw-bold shadow-lg" style="background: linear-gradient(135deg, #007bff, #0056b3); border: none;">
                <i class="bi bi-house-door-fill me-2"></i>Go Home
            </a>
            <a href="javascript:history.back()" class="btn btn-outline-light btn-lg px-5 rounded-pill fw-bold">
                <i class="bi bi-arrow-left-circle me-2"></i>Go Back
            </a>
        </div>

        <!-- Search suggestion -->
        <div class="mt-5">
            <p class="text-white-50 small mb-3">Or try these popular pages:</p>
            <div class="d-flex flex-wrap justify-content-center gap-2">
                <a href="{{ route('msfs') }}" class="badge bg-white bg-opacity-10 text-white text-decoration-none py-2 px-3 rounded-pill hover-opacity">About Us</a>
                <a href="{{ route('admission') }}" class="badge bg-white bg-opacity-10 text-white text-decoration-none py-2 px-3 rounded-pill hover-opacity">Admissions</a>
                <a href="{{ route('contact') }}" class="badge bg-white bg-opacity-10 text-white text-decoration-none py-2 px-3 rounded-pill hover-opacity">Contact</a>
                <a href="{{ route('news') }}" class="badge bg-white bg-opacity-10 text-white text-decoration-none py-2 px-3 rounded-pill hover-opacity">News</a>
            </div>
        </div>
    </div>
</div>

<style>
@keyframes float {
    0%, 100% { transform: translateY(0) scale(1); }
    50% { transform: translateY(-30px) scale(1.05); }
}
.hover-opacity:hover {
    background-color: rgba(255,255,255,0.25) !important;
    transition: background-color 0.3s ease;
}
</style>
@endsection
