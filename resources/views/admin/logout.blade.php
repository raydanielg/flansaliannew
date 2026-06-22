@extends('admin.layouts.admin')

@section('page-title', 'Logout')

@section('content')
<div class="d-flex align-items-center justify-content-center" style="min-height: 60vh;">
    <div class="text-center animate__animated animate__zoomIn">
        <div class="mb-4">
            <i class="bi bi-box-arrow-right text-primary" style="font-size: 5rem;"></i>
        </div>
        <h2 class="fw-bold text-primary mb-2">Logged Out Successfully</h2>
        <p class="text-muted mb-4">You have been securely logged out of the admin panel.</p>
        <div class="d-flex gap-3 justify-content-center">
            <a href="{{ route('login') }}" class="btn btn-primary px-4 py-2 rounded-pill fw-bold">
                <i class="bi bi-shield-lock me-2"></i> Login Again
            </a>
            <a href="{{ url('/') }}" class="btn btn-outline-primary px-4 py-2 rounded-pill fw-bold">
                <i class="bi bi-house-door me-2"></i> Home Page
            </a>
        </div>
    </div>
</div>
@endsection
