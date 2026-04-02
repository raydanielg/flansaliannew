@extends('layouts.app')

@section('content')
    @include('layouts.header')

    <!-- Hero Section -->
    <section class="hero-section position-relative overflow-hidden text-white" style="background: linear-gradient(rgba(0, 34, 68, 0.6), rgba(0, 34, 68, 0.6)), url('{{ asset('cropped-unnamed-8.jpg') }}'); background-size: cover; background-position: center; min-height: 85vh; display: flex; align-items: center;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 animate__animated animate__fadeInLeft">
                    <p class="mb-2 fw-bold text-warning tracking-widest text-uppercase">Welcome to Fransalian School Bombambili</p>
                    <h1 class="display-3 fw-extrabold mb-3" style="line-height: 1.1;">Nurturing Hearts, <br><span class="text-warning">Educating Minds</span></h1>
                    <p class="lead mb-5 opacity-90" style="max-width: 600px;">Providing a holistic and value-based education that empowers students to reach their full potential in a safe and supportive environment.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="{{ route('apply') }}" class="btn btn-warning btn-lg px-5 py-3 rounded-pill fw-bold shadow-lg transition-hover">
                            <i class="bi bi-pencil-square me-2"></i> START APPLICATION NOW
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-shape position-absolute bottom-0 start-0 w-100">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f4f7f6" fill-opacity="1" d="M0,224L48,213.3C96,203,192,181,288,181.3C384,181,480,203,576,224C672,245,768,267,864,250.7C960,235,1056,181,1152,165.3C1248,149,1344,171,1392,181.3L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 animate__animated animate__fadeInLeft">
                    <div class="position-relative">
                        <img src="{{ asset('cropped-unnamed-8.jpg') }}" alt="About Fransalian" class="img-fluid rounded-5 shadow-lg">
                        <div class="position-absolute bottom-0 end-0 bg-warning p-4 rounded-4 shadow-lg mb-n3 me-n3 d-none d-md-block">
                            <h3 class="fw-bold mb-0 text-dark">Since 1838</h3>
                            <p class="small mb-0 text-dark opacity-75 text-uppercase fw-bold">Global Heritage</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 animate__animated animate__fadeInRight">
                    <h6 class="text-primary fw-bold text-uppercase tracking-widest mb-3">About Our School</h6>
                    <h2 class="display-5 fw-bold mb-4 text-dark" style="color: var(--primary-blue) !important;">Providing Excellence in <span class="text-primary">Education</span></h2>
                    <p class="lead text-muted mb-4">Fransalian School Bombambili is more than just a place of learning; it is a community where hearts are nurtured and minds are educated according to the spirit of St. Francis de Sales.</p>
                    <div class="row g-4 mb-5">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="bg-primary-light text-primary rounded-circle p-2 me-3">
                                    <i class="bi bi-check2-circle fs-4"></i>
                                </div>
                                <h6 class="fw-bold mb-0 text-dark">Holistic Growth</h6>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="bg-primary-light text-primary rounded-circle p-2 me-3">
                                    <i class="bi bi-check2-circle fs-4"></i>
                                </div>
                                <h6 class="fw-bold mb-0 text-dark">Value Based</h6>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="bg-primary-light text-primary rounded-circle p-2 me-3">
                                    <i class="bi bi-check2-circle fs-4"></i>
                                </div>
                                <h6 class="fw-bold mb-0 text-dark">Modern Facilities</h6>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="bg-primary-light text-primary rounded-circle p-2 me-3">
                                    <i class="bi bi-check2-circle fs-4"></i>
                                </div>
                                <h6 class="fw-bold mb-0 text-dark">Qualified Staff</h6>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('msfs') }}" class="btn btn-primary btn-lg px-5 rounded-pill fw-bold shadow transition-hover">LEARN OUR STORY</a>
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
            </div>
            <div class="row g-4">
                <div class="col-md-4 col-sm-6 animate__animated animate__zoomIn">
                    <div class="gallery-item rounded-5 overflow-hidden shadow-sm position-relative">
                        <img src="{{ asset('cropped-unnamed-8.jpg') }}" alt="Gallery 1" class="img-fluid transition-hover" style="height: 300px; width: 100%; object-fit: cover;">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 animate__animated animate__zoomIn animate__delay-1s">
                    <div class="gallery-item rounded-5 overflow-hidden shadow-sm position-relative">
                        <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Gallery 2" class="img-fluid transition-hover" style="height: 300px; width: 100%; object-fit: cover;">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 animate__animated animate__zoomIn animate__delay-2s">
                    <div class="gallery-item rounded-5 overflow-hidden shadow-sm position-relative">
                        <img src="https://images.unsplash.com/photo-1523050335392-9ae867749296?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Gallery 3" class="img-fluid transition-hover" style="height: 300px; width: 100%; object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 shadow-sm rounded-5 overflow-hidden text-center p-4 transition-hover">
                        <div class="mb-3">
                            <img src="https://ui-avatars.com/api/?name=School+Principal&background=003366&color=fff&size=128" alt="Principal" class="rounded-circle shadow-sm" style="width: 100px; height: 100px;">
                        </div>
                        <h5 class="fw-bold mb-1">School Principal</h5>
                        <p class="text-primary small fw-bold text-uppercase mb-3">Leadership</p>
                        <p class="text-muted small mb-0">Committed to academic excellence and spiritual growth.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 shadow-sm rounded-5 overflow-hidden text-center p-4 transition-hover">
                        <div class="mb-3">
                            <img src="https://ui-avatars.com/api/?name=Academic+Dean&background=003366&color=fff&size=128" alt="Dean" class="rounded-circle shadow-sm" style="width: 100px; height: 100px;">
                        </div>
                        <h5 class="fw-bold mb-1">Academic Dean</h5>
                        <p class="text-primary small fw-bold text-uppercase mb-3">Academics</p>
                        <p class="text-muted small mb-0">Overseeing our rigorous and innovative curriculum.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 shadow-sm rounded-5 overflow-hidden text-center p-4 transition-hover">
                        <div class="mb-3">
                            <img src="https://ui-avatars.com/api/?name=Head+Teacher&background=003366&color=fff&size=128" alt="Head Teacher" class="rounded-circle shadow-sm" style="width: 100px; height: 100px;">
                        </div>
                        <h5 class="fw-bold mb-1">Head Teacher</h5>
                        <p class="text-primary small fw-bold text-uppercase mb-3">Operations</p>
                        <p class="text-muted small mb-0">Ensuring a safe and supportive environment for all.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 shadow-sm rounded-5 overflow-hidden text-center p-4 transition-hover">
                        <div class="mb-3">
                            <img src="https://ui-avatars.com/api/?name=School+Chaplain&background=003366&color=fff&size=128" alt="Chaplain" class="rounded-circle shadow-sm" style="width: 100px; height: 100px;">
                        </div>
                        <h5 class="fw-bold mb-1">School Chaplain</h5>
                        <p class="text-primary small fw-bold text-uppercase mb-3">Spiritual</p>
                        <p class="text-muted small mb-0">Guiding the spiritual journey of our students.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="cta-box bg-primary text-white p-5 rounded-5 shadow-lg text-center position-relative overflow-hidden" style="background: linear-gradient(135deg, #003366 0%, #0056b3 100%) !important;">
                        <div class="position-relative z-1">
                            <h2 class="display-5 fw-bold mb-4">Ready to Join Our School?</h2>
                            <p class="lead mb-5 opacity-90 mx-auto" style="max-width: 700px;">Applications for the new academic year are now being processed. Start your child's journey at Fransalian School Bombambili today.</p>
                            <a href="{{ route('apply') }}" class="btn btn-warning btn-lg px-5 py-3 rounded-pill fw-bold shadow transition-hover">
                                START APPLICATION NOW
                            </a>
                        </div>
                        <i class="bi bi-mortarboard position-absolute end-0 bottom-0 display-1 opacity-10 mb-n4 me-n4"></i>
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
        .custom-accordion .accordion-button:not(.collapsed) {
            background-color: var(--primary-blue);
            color: white !important;
        }
        .custom-accordion .accordion-button:not(.collapsed) .text-primary {
            color: white !important;
        }
    </style>
@endsection
