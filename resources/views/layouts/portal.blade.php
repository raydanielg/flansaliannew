@extends('layouts.app')

@section('content')
<div class="d-flex" style="min-height: 100vh; background-color: #f4f7f6;">
    <!-- Sidebar -->
    <div class="bg-dark text-white shadow-lg" style="width: 280px; min-height: 100vh; background-color: #001a33 !important;">
        <div class="p-4 border-bottom border-secondary border-opacity-25 text-center">
            <img src="{{ asset('cropped-cropped-school_emblem-1-removebg-preview.png') }}" alt="Logo" class="img-fluid mb-3 bg-white rounded-circle p-2" style="max-height: 80px;">
            <h6 class="fw-bold mb-0 text-uppercase tracking-wider small">Parents' Portal</h6>
        </div>
        
        <div class="nav flex-column p-3 mt-3">
            <a href="{{ route('home') }}" class="nav-link text-white py-3 px-4 rounded-3 mb-2 {{ Request::is('home') ? 'bg-primary' : 'hover-bg-white-10' }}">
                <i class="bi bi-speedometer2 me-3"></i> Home
            </a>
            <a href="{{ route('home.applications') }}" class="nav-link text-white py-3 px-4 rounded-3 mb-2 {{ Request::is('home/applications') ? 'bg-primary' : 'hover-bg-white-10' }}">
                <i class="bi bi-file-earmark-text me-3"></i> Applications
            </a>
            <a href="{{ route('home.results') }}" class="nav-link text-white py-3 px-4 rounded-3 mb-2 {{ Request::is('home/results') ? 'bg-primary' : 'hover-bg-white-10' }}">
                <i class="bi bi-trophy me-3"></i> Results
            </a>
            <a href="{{ route('home.behaviour') }}" class="nav-link text-white py-3 px-4 rounded-3 mb-2 {{ Request::is('home/behaviour') ? 'bg-primary' : 'hover-bg-white-10' }}">
                <i class="bi bi-person-check me-3"></i> Behaviour
            </a>
            <a href="{{ route('home.profile') }}" class="nav-link text-white py-3 px-4 rounded-3 mb-2 {{ Request::is('home/profile') ? 'bg-primary' : 'hover-bg-white-10' }}">
                <i class="bi bi-person-circle me-3"></i> Profile
            </a>
            
            @auth
            <div class="mt-auto pt-5">
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link text-danger py-3 px-4 rounded-3 mt-5 hover-bg-danger-10 border border-danger border-opacity-25">
                    <i class="bi bi-box-arrow-right me-3"></i> Logout
                </a>
            </div>
            @endauth
        </div>
    </div>

    <!-- Main Content Area -->
    <div class="flex-grow-1 overflow-auto">
        <!-- Portal Header -->
        <header class="bg-white shadow-sm py-3 px-5 d-flex justify-content-between align-items-center">
            <h4 class="fw-bold mb-0 text-dark">
                @if(Request::is('home/applications')) Applications
                @elseif(Request::is('home/results')) Results
                @elseif(Request::is('home/behaviour')) Behaviour
                @elseif(Request::is('home/profile')) Profile
                @else Dashboard
                @endif
            </h4>
            <div class="d-flex align-items-center">
                <div class="me-3 text-end d-none d-md-block">
                    <div class="fw-bold small text-dark">{{ Auth::check() ? Auth::user()->name : 'Guest' }}</div>
                    <div class="text-muted small">Parent Account</div>
                </div>
                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                    <i class="bi bi-person fs-4"></i>
                </div>
            </div>
        </header>

        <div class="p-5">
            @yield('portal-content')
        </div>
    </div>
</div>

<style>
    .hover-bg-white-10:hover { background-color: rgba(255,255,255,0.1); }
    .hover-bg-danger-10:hover { background-color: rgba(220,53,69,0.1); }
    .nav-link { transition: all 0.2s; font-weight: 600; font-size: 0.95rem; }
    .tracking-wider { letter-spacing: 0.1em; }
</style>
@endsection
