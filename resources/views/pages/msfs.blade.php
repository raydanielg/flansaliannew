@extends('layouts.app')

@section('content')
    @include('layouts.header')

    <!-- Page Header -->
    <section class="page-header py-5 text-white" style="background: linear-gradient(rgba(0, 51, 102, 0.8), rgba(0, 51, 102, 0.8)), url('https://images.unsplash.com/photo-1523050335392-9ae867749296?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'); background-size: cover; background-position: center; border-bottom: 5px solid #ffd700;">
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
                                <i class="bi bi-people-fill display-3" style="color: var(--primary-blue) !important;"></i>
                            </div>
                            <h4 class="fw-bold text-dark mb-2 text-uppercase small tracking-widest">MSFS</h4>
                            <div class="divider bg-warning mx-auto mb-4" style="width: 40px; height: 3px;"></div>
                            <p class="text-muted small italic">"Nurturing the heart, educating the mind."</p>
                        </div>

                        <!-- Main Content Area -->
                        <div class="col-lg-9 p-5">
                            <div class="content-header mb-4 pb-3 border-bottom">
                                <h3 class="fw-bold text-dark mb-0" style="color: var(--primary-blue) !important;">Ownership & Management</h3>
                            </div>
                            
                            <div class="page-body-content">
                                <p class="lead text-muted mb-5">{{ $page->content }}</p>
                                
                                <div class="info-item mb-4 animate__animated animate__fadeInUp">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="icon-small bg-primary-light rounded-circle me-3">
                                            <i class="bi bi-patch-check-fill text-primary"></i>
                                        </div>
                                        <h5 class="fw-bold mb-0 text-dark">Our Heritage</h5>
                                    </div>
                                    <p class="text-muted ps-5">Founded in 1838 in Annecy, France by Father Peter Marie Mermier, the society was established to rejuvenate the faith through missions and education.</p>
                                </div>

                                <div class="info-item mb-4 animate__animated animate__fadeInUp animate__delay-1s">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="icon-small bg-primary-light rounded-circle me-3">
                                            <i class="bi bi-gem text-primary"></i>
                                        </div>
                                        <h5 class="fw-bold mb-0 text-dark">Our Philosophy</h5>
                                    </div>
                                    <p class="text-muted ps-5">Following the spirit of St. Francis de Sales, we emphasize "Gentleness, Optimism, and Humility" in our educational approach.</p>
                                </div>

                                <div class="info-item animate__animated animate__fadeInUp animate__delay-2s">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="icon-small bg-primary-light rounded-circle me-3">
                                            <i class="bi bi-heart-pulse-fill text-primary"></i>
                                        </div>
                                        <h5 class="fw-bold mb-0 text-dark">Our Global Impact</h5>
                                    </div>
                                    <p class="text-muted ps-5">Fransalians operate in over 30 countries, running prestigious schools, colleges, and social centers dedicated to human development.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .bg-primary-light { background-color: rgba(0, 51, 102, 0.08); }
        .icon-small { width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; }
        .tracking-wider { letter-spacing: 0.1rem; }
    </style>
@endsection
