@extends('layouts.app')

@section('content')
    @include('layouts.header')

    <!-- Page Header -->
    <section class="page-header py-5 text-white" style="background: linear-gradient(rgba(0, 51, 102, 0.8), rgba(0, 51, 102, 0.8)), url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'); background-size: cover; background-position: center; border-bottom: 5px solid #ffd700;">
        <div class="container text-center animate__animated animate__fadeIn">
            <h1 class="display-4 fw-bold mb-0 text-uppercase tracking-wider">{{ $page->title }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 mt-3">
                    <li class="breadcrumb-item"><a href="{{ route('welcome') }}" class="text-white text-decoration-none">HOME</a></li>
                    <li class="breadcrumb-item active text-warning fw-bold" aria-current="page">{{ strtoupper($page->slug) }}</li>
                </ol>
            </nav>
        </div>
    </section>

    <div class="container py-5 animate__animated animate__fadeIn">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card border-0 shadow-lg overflow-hidden" style="border-radius: 30px; background: #fff;">
                    <div class="row g-0">
                        <!-- Content Sidebar Info -->
                        <div class="col-lg-3 bg-light p-4 d-flex flex-column align-items-center text-center border-end">
                            <div class="icon-box bg-white text-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-4 shadow-sm" style="width: 100px; height: 100px; border: 2px solid var(--primary-blue);">
                                <i class="bi bi-shield-lock-fill display-3" style="color: var(--primary-blue) !important;"></i>
                            </div>
                            <h4 class="fw-bold text-dark mb-2 text-uppercase small tracking-widest">PORTAL</h4>
                            <div class="divider bg-warning mx-auto mb-4" style="width: 40px; height: 3px;"></div>
                            <p class="text-muted small italic px-2">Secure access for parents and guardians.</p>
                        </div>

                        <!-- Main Content Area -->
                        <div class="col-lg-9 p-5">
                            <div class="content-header mb-4 pb-3 border-bottom">
                                <h2 class="fw-bold text-dark mb-0" style="color: var(--primary-blue) !important;">Secure Parents' Access</h2>
                            </div>
                            
                            <div class="page-body-content mb-5">
                                <p class="lead text-muted" style="line-height: 1.8;">{{ $page->content }}</p>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="card border-0 shadow-sm p-5 text-center bg-light" style="border-radius: 25px;">
                                        @guest
                                            <div class="alert alert-warning border-0 mb-4 py-3 shadow-sm" style="border-radius: 15px; background-color: #fff3cd;">
                                                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                                Tafadhali ingia kwenye akaunti yako ili kupata huduma za portal.
                                            </div>
                                            <div class="d-grid gap-3">
                                                <a href="{{ route('login') }}" class="btn btn-primary btn-lg rounded-pill py-3 fw-bold shadow transition-hover" style="background-color: var(--primary-blue) !important;">
                                                    <i class="bi bi-box-arrow-in-right me-2"></i> INGIA SASA (LOGIN)
                                                </a>
                                                <p class="text-muted small">Je, huna akaunti? <a href="{{ route('register') }}" class="text-primary fw-bold text-decoration-none">Jisajili hapa</a></p>
                                            </div>
                                        @else
                                            <div class="alert alert-success border-0 mb-4 py-3 shadow-sm" style="border-radius: 15px; background-color: #d1e7dd;">
                                                <i class="bi bi-check-circle-fill me-2"></i>
                                                Karibu, <strong>{{ Auth::user()->name }}</strong>
                                            </div>
                                            <a href="{{ url('/home') }}" class="btn btn-primary btn-lg w-100 rounded-pill py-3 fw-bold shadow transition-hover" style="background-color: var(--primary-blue) !important;">
                                                <i class="bi bi-speedometer2 me-2"></i> FUNGUA DASHBOARD
                                            </a>
                                        @endguest
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .tracking-wider { letter-spacing: 0.1rem; }
        .transition-hover { transition: all 0.3s ease; }
        .transition-hover:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important; }
    </style>
@endsection
