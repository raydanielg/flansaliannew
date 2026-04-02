@extends('layouts.app')

@section('content')
    @include('layouts.header')

    <!-- Page Header -->
    <section class="page-header py-5 text-white" style="background: linear-gradient(rgba(0, 51, 102, 0.8), rgba(0, 51, 102, 0.8)), url('https://images.unsplash.com/photo-1520923642038-b4a59cb2a29a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'); background-size: cover; background-position: center; border-bottom: 5px solid #ffd700;">
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
                                <i class="bi bi-geo-alt-fill fs-1" style="color: var(--primary-blue) !important;"></i>
                            </div>
                            <h4 class="fw-bold text-dark mb-2 text-uppercase small tracking-widest">CONTACT</h4>
                            <div class="divider bg-warning mx-auto mb-4" style="width: 40px; height: 3px;"></div>
                            <p class="text-muted small italic px-2">We are here to help you.</p>
                        </div>

                        <!-- Main Content Area -->
                        <div class="col-lg-9 p-5">
                            <div class="content-header mb-4 pb-3 border-bottom">
                                <h2 class="fw-bold text-dark mb-0" style="color: var(--primary-blue) !important;">Get In Touch</h2>
                            </div>
                            
                            <div class="page-body-content mb-5">
                                <p class="lead text-muted" style="line-height: 1.8;">{{ $page->content }}</p>
                            </div>

                            <div class="row g-5">
                                <div class="col-lg-5">
                                    <div class="contact-info-boxes">
                                        <div class="d-flex align-items-start mb-4 p-3 rounded-4 shadow-sm bg-light border-start border-4 border-primary" style="border-top-left-radius: 0 !important; border-bottom-left-radius: 0 !important;">
                                            <div class="text-primary me-3">
                                                <i class="bi bi-geo-alt-fill fs-3"></i>
                                            </div>
                                            <div>
                                                <h6 class="fw-bold mb-1 text-dark">Location</h6>
                                                <p class="mb-0 text-muted small">Bombambili, Gongo la Mboto, Dar es Salaam</p>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-start mb-4 p-3 rounded-4 shadow-sm bg-light border-start border-4 border-primary" style="border-top-left-radius: 0 !important; border-bottom-left-radius: 0 !important;">
                                            <div class="text-primary me-3">
                                                <i class="bi bi-envelope-at fs-3"></i>
                                            </div>
                                            <div>
                                                <h6 class="fw-bold mb-1 text-dark">Email</h6>
                                                <p class="mb-0 text-muted small">fransalianb2@gmail.com</p>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-start p-3 rounded-4 shadow-sm bg-light border-start border-4 border-primary" style="border-top-left-radius: 0 !important; border-bottom-left-radius: 0 !important;">
                                            <div class="text-primary me-3">
                                                <i class="bi bi-telephone-fill fs-3"></i>
                                            </div>
                                            <div>
                                                <h6 class="fw-bold mb-1 text-dark">Phone</h6>
                                                <p class="mb-0 text-muted small">0784377306 / 0758204865</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-7">
                                    <form action="{{ route('feedback.store') }}" method="POST" class="bg-light p-4 rounded-4 shadow-sm">
                                        @csrf
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label class="form-label small fw-bold tracking-wider">FULL NAME</label>
                                                <input type="text" name="name" class="form-control rounded-3 py-2 px-3" placeholder="Enter your name" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label small fw-bold tracking-wider">EMAIL</label>
                                                <input type="email" name="email" class="form-control rounded-3 py-2 px-3" placeholder="Enter your email" required>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label small fw-bold tracking-wider">SUBJECT</label>
                                                <input type="text" name="subject" class="form-control rounded-3 py-2 px-3" placeholder="How can we help?">
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label small fw-bold tracking-wider">MESSAGE</label>
                                                <textarea name="message" class="form-control rounded-3" rows="4" placeholder="Write your message..." required></textarea>
                                            </div>
                                            <div class="col-12 mt-4">
                                                <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill fw-bold shadow transition-hover" style="background-color: var(--primary-blue) !important;">
                                                    <i class="bi bi-send-fill me-2 small"></i> SEND MESSAGE
                                                </button>
                                            </div>
                                        </div>
                                    </form>
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
