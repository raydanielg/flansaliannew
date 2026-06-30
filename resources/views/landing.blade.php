@extends('layouts.app')

@section('content')
    @include('layouts.header')

    <!-- Hero Section -->
    <section class="position-relative overflow-hidden text-white d-flex align-items-center" style="min-height: 90vh; background: linear-gradient(rgba(0, 26, 51, 0.7), rgba(0, 26, 51, 0.7)), url('{{ asset('cropped-unnamed-8.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="container" style="padding-top: 100px; padding-bottom: 100px;">
            <div class="row justify-content-center">
                <div class="col-lg-9 text-center animate__animated animate__fadeInUp">
                    <h1 class="display-2 fw-bold mb-4" style="line-height: 1.1; text-shadow: 0 4px 30px rgba(0,0,0,0.4);">Shaping Young Minds for a <span class="text-warning">Brighter Tomorrow</span></h1>
                    <p class="lead mb-5 opacity-90 mx-auto" style="max-width: 700px; text-shadow: 0 2px 10px rgba(0,0,0,0.3);"><em>Rooted in values. Driven by excellence. Committed to holistic growth.</em></p>
                    <a href="{{ route('apply') }}" class="btn btn-warning btn-lg px-5 py-3 rounded-pill fw-bold shadow-lg transition-hover" style="background: linear-gradient(135deg, #ffd700, #ffed4a); color: #001a33; border: none;">
                        <i class="bi bi-arrow-right-circle me-2"></i> Explore Now
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Wave Shape -->
        <div class="position-absolute bottom-0 start-0 w-100" style="z-index: 1;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f4f7f6" fill-opacity="1" d="M0,224L48,213.3C96,203,192,181,288,181.3C384,181,480,203,576,224C672,245,768,267,864,250.7C960,235,1056,181,1152,165.3C1248,149,1344,171,1392,181.3L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </div>
    </section>

    <!-- Marquee Announcement Bar -->
    <section class="py-2" style="background: linear-gradient(90deg, #003366, #004080);">
        <div class="marquee-container overflow-hidden position-relative">
            <div class="marquee-track d-flex align-items-center text-white">
                <span class="marquee-item px-4">
                    <i class="bi bi-megaphone-fill text-warning me-2"></i>
                    Admissions Open 2026-27 — Apply today and join the Fransalian family!
                </span>
                <span class="marquee-divider text-warning">|</span>
                <span class="marquee-item px-4">
                    <i class="bi bi-calendar-event-fill text-warning me-2"></i>
                    New academic year begins soon — Enroll your child for a brighter future.
                </span>
                <span class="marquee-divider text-warning">|</span>
                <span class="marquee-item px-4">
                    <i class="bi bi-telephone-fill text-warning me-2"></i>
                    For enquiries call +255 749 770 703 or +255 688 367 100
                </span>
                <span class="marquee-divider text-warning">|</span>
                <span class="marquee-item px-4">
                    <i class="bi bi-envelope-fill text-warning me-2"></i>
                    Email us at info@fransalian.ac.tz
                </span>
                <span class="marquee-divider text-warning">|</span>
                <span class="marquee-item px-4">
                    <i class="bi bi-megaphone-fill text-warning me-2"></i>
                    Admissions Open 2026-27 — Apply today and join the Fransalian family!
                </span>
                <span class="marquee-divider text-warning">|</span>
                <span class="marquee-item px-4">
                    <i class="bi bi-calendar-event-fill text-warning me-2"></i>
                    New academic year begins soon — Enroll your child for a brighter future.
                </span>
                <span class="marquee-divider text-warning">|</span>
                <span class="marquee-item px-4">
                    <i class="bi bi-telephone-fill text-warning me-2"></i>
                    For enquiries call +255 749 770 703 or +255 688 367 100
                </span>
                <span class="marquee-divider text-warning">|</span>
                <span class="marquee-item px-4">
                    <i class="bi bi-envelope-fill text-warning me-2"></i>
                    Email us at info@fransalian.ac.tz
                </span>
            </div>
        </div>
    </section>

    <style>
        .marquee-container {
            white-space: nowrap;
        }
        .marquee-track {
            display: inline-flex;
            animation: marquee 25s linear infinite;
        }
        .marquee-track:hover {
            animation-play-state: paused;
        }
        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .marquee-item {
            font-size: 0.95rem;
            font-weight: 500;
        }
        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
    </style>

    <!-- Welcome / About Section -->
    <section class="py-5 bg-white overflow-hidden">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 animate__animated animate__fadeInLeft">
                    <div class="position-relative">
                        <!-- Floating Logo -->
                        <div class="position-absolute top-0 start-0 translate-middle z-2 d-none d-md-block" style="animation: spin 20s linear infinite;">
                            <div class="bg-white rounded-circle shadow-lg p-2" style="width: 100px; height: 100px; border: 3px solid #ffd700;">
                                <img src="{{ asset('logo.png') }}" alt="Fransalian Logo" class="w-100 h-100" style="object-fit: contain;">
                            </div>
                        </div>

                        <!-- Decorative Background -->
                        <div class="position-absolute top-50 start-50 translate-middle" style="width: 95%; height: 95%; background: linear-gradient(135deg, #ffd700 0%, #ffed4a 50%, #fff8e1 100%); border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; opacity: 0.25; z-index: 0;"></div>

                        <!-- Image Grid -->
                        <div class="position-relative z-1">
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="rounded-4 overflow-hidden shadow-lg" style="height: 280px;">
                                        <img src="{{ asset('images/jengofarasaian.png') }}" alt="Fransalian School Building" class="w-100 h-100" style="object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="rounded-4 overflow-hidden shadow-lg" style="height: 200px;">
                                        <img src="{{ asset('images/picwatoto2.png') }}" alt="Fransalian Student Life" class="w-100 h-100" style="object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="rounded-4 overflow-hidden shadow-lg" style="height: 200px;">
                                        <img src="{{ asset('images/picwatoto3.png') }}" alt="Fransalian Learning" class="w-100 h-100" style="object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 animate__animated animate__fadeInRight">
                    <h6 class="text-primary fw-bold text-uppercase tracking-widest mb-3">Welcome to</h6>
                    <h2 class="display-5 fw-bold mb-4 text-dark" style="color: var(--primary-blue) !important;">Fransalian <span class="text-primary">School</span></h2>
                    <p class="lead text-muted mb-4">Fransalian School is a community where hearts are nurtured and minds are educated in the gentle spirit of St. Francis de Sales. We are committed to providing a holistic learning environment that shapes confident, compassionate, and capable young learners.</p>
                    <p class="text-muted mb-4">Located in Bombambili, Dar es Salaam, our school blends academic excellence with spiritual growth, preparing every child to become a responsible citizen and a lifelong learner.</p>
                    
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <div class="d-flex p-3 rounded-4 bg-primary-light h-100">
                                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width: 50px; height: 50px;">
                                    <i class="bi bi-book-half fs-4"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1 text-dark">Medium of Instruction</h6>
                                    <p class="text-muted small mb-0">English Medium with Swahili</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex p-3 rounded-4 bg-warning-light h-100">
                                <div class="bg-warning text-dark rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width: 50px; height: 50px;">
                                    <i class="bi bi-mortarboard fs-4"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1 text-dark">Course of Study</h6>
                                    <p class="text-muted small mb-0">Pre & Primary Education</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <a href="{{ route('msfs') }}" class="btn btn-primary btn-lg px-5 rounded-pill fw-bold shadow transition-hover">
                        <i class="bi bi-arrow-right-circle me-2"></i>Learn Our Story
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-5 bg-light overflow-hidden">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h6 class="text-primary fw-bold text-uppercase tracking-widest mb-3">Our Environment</h6>
                <h2 class="display-5 fw-bold mb-0 text-dark">School <span class="text-primary">Gallery</span></h2>
                <p class="text-muted mt-3 mx-auto" style="max-width: 600px;">Explore moments from our school life, events, and achievements.</p>
            </div>
            @php
                $galleryImages = collect();
                try {
                    $galleryImages = \App\Models\Gallery::where('is_active', true)->orderBy('order')->take(8)->get();
                } catch (\Exception $e) {
                    $galleryImages = collect();
                }
            @endphp
            <div class="row g-4">
                @forelse($galleryImages as $index => $gImg)
                <div class="col-md-4 col-sm-6 animate__animated animate__zoomIn {{ $index > 0 ? 'animate__delay-' . min($index, 3) . 's' : '' }}">
                    <div class="gallery-item rounded-5 overflow-hidden shadow-sm position-relative" style="cursor: pointer;" onclick="openLightbox('{{ asset('storage/' . $gImg->image) }}', '{{ $gImg->title }}')">
                        <img src="{{ asset('storage/' . $gImg->image) }}" alt="{{ $gImg->title }}" class="img-fluid transition-hover" style="height: 300px; width: 100%; object-fit: cover;" onerror="this.parentElement.style.display='none'">
                        <div class="gallery-overlay position-absolute top-0 start-0 end-0 bottom-0 d-flex flex-column justify-content-end p-4 text-white" style="background: linear-gradient(transparent 40%, rgba(0,26,51,0.85)); opacity: 0; transition: opacity 0.3s ease;">
                            <h6 class="fw-bold mb-1">{{ $gImg->title }}</h6>
                            <small class="opacity-75"><i class="bi bi-tag me-1"></i>{{ $gImg->category }}</small>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center text-muted py-5">
                    <i class="bi bi-images fs-1 d-block mb-3 opacity-25"></i>
                    <p>No gallery images yet.</p>
                </div>
                @endforelse
            </div>
            @if($galleryImages->count() > 0)
            <div class="text-center mt-5">
                <a href="{{ route('gallery') }}" class="btn btn-primary rounded-pill px-5 fw-bold">
                    <i class="bi bi-images me-2"></i>View Full Gallery
                </a>
            </div>
            @endif
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div class="modal fade" id="galleryLightbox" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-body p-0 text-center position-relative">
                    <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" style="z-index: 10;"></button>
                    <img id="lightboxImage" src="" class="img-fluid rounded-4 shadow-lg" style="max-height: 85vh; object-fit: contain;">
                    <h5 id="lightboxTitle" class="text-white mt-3 fw-bold text-shadow"></h5>
                </div>
            </div>
        </div>
    </div>
    <script>
    function openLightbox(src, title) {
        document.getElementById('lightboxImage').src = src;
        document.getElementById('lightboxTitle').textContent = title;
        const modal = new bootstrap.Modal(document.getElementById('galleryLightbox'));
        modal.show();
    }
    </script>

    <!-- FAQ Section -->
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5">
                    <h6 class="text-primary fw-bold text-uppercase tracking-widest mb-3">Common Questions</h6>
                    <h2 class="display-5 fw-bold mb-4 text-dark">Frequently Asked <span class="text-primary">Questions</span></h2>
                    <p class="text-muted mb-5">Find quick answers to common questions about our school, admissions, and policies.</p>
                    <div class="p-4 rounded-5 bg-primary-light border-start border-5 border-primary" style="border-top-left-radius: 0 !important; border-bottom-left-radius: 0 !important;">
                        <h6 class="fw-bold mb-2 text-dark">Still have questions?</h6>
                        <p class="small text-muted mb-3">We are here to help you understand everything about our community.</p>
                        <a href="{{ route('contact') }}" class="btn btn-primary btn-sm px-4 rounded-pill fw-bold">CONTACT US</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="accordion accordion-flush custom-accordion" id="landingFaq">
                        @php
                            $landingFaqs = \App\Models\HelpDesk::orderBy('order', 'asc')->take(5)->get();
                        @endphp
                        @foreach($landingFaqs as $index => $faq)
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-4 overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button {{ $index != 0 ? 'collapsed' : '' }} fw-bold text-dark py-3 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq-{{ $faq->id }}">
                                    <span class="me-3 text-primary">{{ sprintf('%02d', $index + 1) }}.</span> {{ $faq->question }}
                                </button>
                            </h2>
                            <div id="faq-{{ $faq->id }}" class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}" data-bs-parent="#landingFaq">
                                <div class="accordion-body text-muted px-4 py-3 bg-white">
                                    {{ $faq->answer }}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5 bg-light">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h6 class="text-primary fw-bold text-uppercase tracking-widest mb-3">Why Choose Us</h6>
                <h2 class="display-5 fw-bold text-dark">Our Key <span class="text-primary">Strengths</span></h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-4 animate__animated animate__fadeInUp">
                    <div class="card border-0 shadow-sm h-100 p-4 rounded-4 transition-hover text-center">
                        <div class="icon-box bg-primary-light text-primary rounded-circle mx-auto mb-3" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-book-half fs-2"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Academic Excellence</h5>
                        <p class="text-muted small mb-0">We offer a rigorous curriculum designed to inspire curiosity and critical thinking in every student.</p>
                    </div>
                </div>
                <div class="col-md-4 animate__animated animate__fadeInUp animate__delay-1s">
                    <div class="card border-0 shadow-sm h-100 p-4 rounded-4 transition-hover text-center">
                        <div class="icon-box bg-warning-light text-warning rounded-circle mx-auto mb-3" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-heart-pulse fs-2"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Spiritual Growth</h5>
                        <p class="text-muted small mb-0">Grounded in MSFS values, we nurture the character and spiritual well-being of our school community.</p>
                    </div>
                </div>
                <div class="col-md-4 animate__animated animate__fadeInUp animate__delay-2s">
                    <div class="card border-0 shadow-sm h-100 p-4 rounded-4 transition-hover text-center">
                        <div class="icon-box bg-success-light text-success rounded-circle mx-auto mb-3" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-people fs-2"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Inclusive Community</h5>
                        <p class="text-muted small mb-0">A welcoming environment where every child feels valued, respected, and part of a larger family.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Community Section -->
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h6 class="text-primary fw-bold text-uppercase tracking-widest mb-3">Our Team</h6>
                <h2 class="display-5 fw-bold text-dark">Dedicated <span class="text-primary">Staff</span></h2>
            </div>
            <div class="row g-4">
                @php
                    $staff = collect();
                    try {
                        $staff = \App\Models\Team::where('is_active', true)->orderBy('order')->take(4)->get();
                    } catch (\Exception $e) {
                        $staff = collect();
                    }
                @endphp
                @forelse($staff as $member)
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden text-center p-4 h-100 transition-hover staff-card">
                        <div class="mb-3 position-relative d-inline-block mx-auto">
                            @if($member->photo)
                            <img src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->name }}" class="rounded-circle shadow-sm" style="width: 100px; height: 100px; object-fit: cover; border: 3px solid #f8f9fa;">
                            @else
                            <div class="rounded-circle shadow-sm d-flex align-items-center justify-content-center fw-bold text-white" style="width: 100px; height: 100px; background: var(--primary-blue); font-size: 2.5rem; border: 3px solid #f8f9fa;">
                                {{ strtoupper(substr($member->name, 0, 1)) }}
                            </div>
                            @endif
                        </div>
                        <h5 class="fw-bold mb-1 text-dark">{{ $member->name }}</h5>
                        <p class="text-primary small fw-bold text-uppercase mb-3 tracking-wider">{{ $member->position }}</p>
                        <p class="text-muted small mb-0">{{ Str::limit($member->bio ?? 'Committed to excellence in education.', 80) }}</p>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center text-muted py-5">
                    <i class="bi bi-people fs-1 d-block mb-3 opacity-25"></i>
                    <p>No team members added yet.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <style>
        :root {
            --primary-blue: #003366;
            --primary-yellow: #ffc107;
        }
        .text-primary { color: var(--primary-blue) !important; }
        .btn-primary { background-color: var(--primary-blue); border-color: var(--primary-blue); }
        .btn-primary:hover { background-color: #002244; border-color: #002244; }
        .bg-primary { background-color: var(--primary-blue) !important; }
        
        .staff-card { border-bottom: 4px solid transparent !important; }
        .staff-card:hover { 
            border-bottom: 4px solid var(--primary-blue) !important;
            transform: translateY(-10px);
        }
        .tracking-wider { letter-spacing: 0.1em; }
    </style>

    <!-- Admission CTA Section -->
    <section class="py-5 bg-white overflow-hidden">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="card border-0 shadow-lg overflow-hidden" style="border-radius: 30px; background: linear-gradient(135deg, #003366 0%, #004080 50%, #0056b3 100%);">
                        <div class="row g-0 align-items-center">
                            <div class="col-lg-7 p-5 p-lg-6 text-white">
                                <div class="animate__animated animate__fadeInUp">
                                    <h6 class="text-warning fw-bold text-uppercase tracking-widest mb-3">Admissions 2026-27</h6>
                                    <h2 class="display-5 fw-bold mb-4">Admission Open <span class="text-warning">2026-27</span></h2>
                                    <p class="lead mb-4 opacity-90">We welcome students who aspire to grow with confidence, character, and competence.</p>
                                </div>
                                <div class="animate__animated animate__fadeInUp animate__delay-1s">
                                    <ul class="list-unstyled mb-5">
                                        <li class="d-flex align-items-center mb-3">
                                            <div class="bg-white text-primary rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width: 32px; height: 32px;">
                                                <i class="bi bi-check-lg fw-bold"></i>
                                            </div>
                                            <span class="fs-5">Modern Infrastructure</span>
                                        </li>
                                        <li class="d-flex align-items-center mb-3">
                                            <div class="bg-white text-primary rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width: 32px; height: 32px;">
                                                <i class="bi bi-check-lg fw-bold"></i>
                                            </div>
                                            <span class="fs-5">Experienced Faculty</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <div class="bg-white text-primary rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width: 32px; height: 32px;">
                                                <i class="bi bi-check-lg fw-bold"></i>
                                            </div>
                                            <span class="fs-5">Activity-Based Learning</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="d-flex flex-wrap gap-3 animate__animated animate__fadeInUp animate__delay-2s">
                                    <a href="{{ route('apply') }}" class="btn btn-warning btn-lg px-5 rounded-pill fw-bold shadow transition-hover">
                                        <i class="bi bi-pencil-square me-2"></i>Register Now!
                                    </a>
                                    <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg px-5 rounded-pill fw-bold transition-hover">
                                        <i class="bi bi-envelope me-2"></i>Contact Us
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-5 p-4 p-lg-5">
                                <div class="card border-0 shadow-lg rounded-4 overflow-hidden animate__animated animate__fadeInRight animate__delay-1s">
                                    <div class="card-body p-4 text-center">
                                        <div class="bg-primary-light text-primary rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                            <i class="bi bi-telephone-fill fs-2"></i>
                                        </div>
                                        <h5 class="fw-bold text-dark mb-1">For Admission Enquiry</h5>
                                        <p class="text-muted small mb-3">Speak with our admissions team today</p>
                                        <a href="tel:+255749770703" class="h4 fw-bold text-decoration-none" style="color: #003366;">+255 749 770 703</a>
                                        <div class="mt-3 pt-3 border-top">
                                            <a href="tel:+255688367100" class="text-muted text-decoration-none small d-block">+255 688 367 100</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .bg-primary-light { background-color: rgba(0, 51, 102, 0.08); }
        .bg-warning-light { background-color: rgba(255, 193, 7, 0.08); }
        .bg-success-light { background-color: rgba(25, 135, 84, 0.08); }
        .fw-extrabold { font-weight: 800; }
        .tracking-widest { letter-spacing: 0.2rem; }
        .transition-hover { transition: all 0.3s ease; }
        .transition-hover:hover { transform: translateY(-10px); box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important; }
        .rounded-4 { border-radius: 1.5rem !important; }
        .rounded-5 { border-radius: 2.5rem !important; }
        .z-1 { z-index: 1; }
        .gallery-item img { transition: transform 0.5s ease; }
        .gallery-item:hover img { transform: scale(1.1); }
        .gallery-item .gallery-overlay { opacity: 0; transition: opacity 0.3s ease; }
        .gallery-item:hover .gallery-overlay { opacity: 1; }
        .custom-accordion .accordion-button:not(.collapsed) {
            background-color: var(--primary-blue);
            color: white !important;
        }
        .custom-accordion .accordion-button:not(.collapsed) .text-primary {
            color: white !important;
        }
    </style>
@endsection
