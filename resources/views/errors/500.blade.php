@extends('layouts.app')

@section('content')
<div class="min-vh-100 d-flex align-items-center justify-content-center position-relative overflow-hidden" style="background: linear-gradient(135deg, #1a0a0a 0%, #330000 50%, #1a0a0a 100%);">
    <!-- Background shapes -->
    <div class="position-absolute top-0 start-0 w-100 h-100 overflow-hidden" style="z-index: 0;">
        <div class="position-absolute rounded-circle opacity-10" style="width: 400px; height: 400px; background: #ff4444; top: -100px; right: -100px; animation: float 8s ease-in-out infinite;"></div>
        <div class="position-absolute rounded-circle opacity-10" style="width: 300px; height: 300px; background: #cc0000; bottom: -80px; left: -80px; animation: float 10s ease-in-out infinite 2s;"></div>
    </div>

    <div class="text-center position-relative" style="z-index: 1;">
        <div class="mb-4">
            <h1 class="display-1 fw-bold text-white mb-0" style="font-size: 8rem; text-shadow: 0 0 40px rgba(255,68,68,0.4); line-height: 1;">500</h1>
            <div class="d-flex align-items-center justify-content-center gap-3 my-3">
                <div style="width: 60px; height: 3px; background: linear-gradient(90deg, transparent, #ff4444);"></div>
                <i class="bi bi-x-octagon-fill text-danger fs-4"></i>
                <div style="width: 60px; height: 3px; background: linear-gradient(90deg, #ff4444, transparent);"></div>
            </div>
        </div>

        <h2 class="text-white fw-bold mb-3" style="font-size: 2rem;">Internal Server Error</h2>
        <p class="text-white-50 mb-5 mx-auto" style="max-width: 450px; font-size: 1.05rem;">
            Something went wrong on our end. Please try again later or contact support if the problem persists.
        </p>

        <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="{{ url('/') }}" class="btn btn-danger btn-lg px-5 rounded-pill fw-bold shadow-lg" style="background: linear-gradient(135deg, #ff4444, #cc0000); border: none;">
                <i class="bi bi-house-door-fill me-2"></i>Go Home
            </a>
            <a href="javascript:location.reload()" class="btn btn-outline-light btn-lg px-5 rounded-pill fw-bold">
                <i class="bi bi-arrow-clockwise me-2"></i>Reload Page
            </a>
        </div>
    </div>
</div>

<style>
@keyframes float {
    0%, 100% { transform: translateY(0) scale(1); }
    50% { transform: translateY(-30px) scale(1.05); }
}
</style>
@endsection
