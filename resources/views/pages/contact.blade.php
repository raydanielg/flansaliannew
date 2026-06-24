@extends('layouts.app')

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
