@extends('layouts.app')

@section('content')
    @include('layouts.header')

    <!-- Page Header -->
    <section class="page-header py-5 text-white" style="background: linear-gradient(rgba(0, 51, 102, 0.8), rgba(0, 51, 102, 0.8)), url('https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'); background-size: cover; background-position: center; border-bottom: 5px solid #ffd700;">
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
                                <i class="bi bi-eye-fill fs-1" style="color: var(--primary-blue) !important;"></i>
                            </div>
                            <h4 class="fw-bold text-dark mb-2 text-uppercase small tracking-widest">VISION</h4>
                            <div class="divider bg-warning mx-auto mb-4" style="width: 40px; height: 3px;"></div>
                            <p class="text-muted small italic">"Wisdom is Freedom"</p>
                        </div>

                        <!-- Main Content Area -->
                        <div class="col-lg-9 p-5">
                            <div class="content-header mb-4 pb-3 border-bottom text-center text-lg-start">
                                <h2 class="fw-bold text-dark mb-0" style="color: var(--primary-blue) !important;">The Fransalian Vision</h2>
                            </div>
                            
                            <div class="page-body-content text-center text-lg-start">
                                <p class="lead fs-3 text-dark italic mb-5" style="line-height: 1.6;">
                                    "{{ $page->content }}"
                                </p>
                                
                                <div class="row mt-5 g-4 text-start">
                                    <div class="col-md-6 animate__animated animate__fadeInUp">
                                        <div class="d-flex align-items-start">
                                            <i class="bi bi-flag-fill text-success fs-4 me-3"></i>
                                            <div>
                                                <h5 class="fw-bold text-dark">National Identity</h5>
                                                <p class="text-muted">Fostering patriotism, respect for national symbols, and appreciation for our rich cultural heritage.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 animate__animated animate__fadeInUp animate__delay-1s">
                                        <div class="d-flex align-items-start">
                                            <i class="bi bi-globe-americas text-success fs-4 me-3"></i>
                                            <div>
                                                <h5 class="fw-bold text-dark">Global Contribution</h5>
                                                <p class="text-muted">Preparing students to be responsible global citizens who contribute positively to a better world.</p>
                                            </div>
                                        </div>
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
    </style>
@endsection
