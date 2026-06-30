@extends('layouts.app')

@section('meta_title', 'Our Vision | Fransalian School')
@section('meta_description', 'The vision of Fransalian School: to be a leading primary school that empowers children to become responsible, compassionate, and knowledgeable citizens.')
@section('og_title', 'Our Vision | Fransalian School')
@section('og_description', 'The vision of Fransalian School: empowering children to become responsible and compassionate citizens.')

@section('content')
    @include('layouts.header')

    <section class="position-relative overflow-hidden" style="padding: 90px 0 60px;">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(135deg, #001a33 0%, #003366 40%, #004080 100%);"></div>
        <div class="position-absolute top-0 end-0 opacity-10" style="width: 400px; height: 400px; background: radial-gradient(circle, #007bff 0%, transparent 70%); transform: translate(30%, -30%);"></div>
        <div class="position-absolute bottom-0 start-0 opacity-10" style="width: 300px; height: 300px; background: radial-gradient(circle, #ffd700 0%, transparent 70%); transform: translate(-30%, 30%);"></div>
        <div class="container position-relative" style="z-index: 2;">
            <div class="text-center">
                <div class="d-inline-flex align-items-center gap-2 mb-3 px-4 py-2 rounded-pill" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.15);">
                    <i class="bi bi-house-door-fill text-white small"></i>
                    <a href="{{ route('welcome') }}" class="text-white text-decoration-none small">Home</a>
                    <i class="bi bi-chevron-right text-white-50 small"></i>
                    <span class="text-warning small fw-bold">{{ ucfirst($page->slug) }}</span>
                </div>
                <h1 class="display-3 fw-bold text-white mb-3" style="text-shadow: 0 4px 20px rgba(0,0,0,0.3);">{{ $page->title }}</h1>
                <div class="mx-auto" style="width: 80px; height: 4px; background: linear-gradient(90deg, #ffd700, #ffed4a); border-radius: 2px;"></div>
            </div>
        </div>
    </section>
    <div style="height: 5px; background: linear-gradient(90deg, #ffd700, #ffed4a, #ffd700);"></div>

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
