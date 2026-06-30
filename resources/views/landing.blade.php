@extends('layouts.app')

@section('content')
    @include('layouts.header')

    <!-- Hero Slider -->
    <section id="heroSlider" class="position-relative overflow-hidden text-white" style="min-height: 90vh; display: flex; align-items: center;">
        <!-- Slide 1 -->
        <div class="hero-slide active" style="background: linear-gradient(rgba(0, 26, 51, 0.75), rgba(0, 26, 51, 0.75)), url('{{ asset('cropped-unnamed-8.jpg') }}'); background-size: cover; background-position: center; position: absolute; inset: 0; opacity: 1; transition: opacity 1s ease-in-out;">
            <div class="container h-100 d-flex align-items-center" style="padding-top: 80px; padding-bottom: 80px;">
                <div class="row w-100">
                    <div class="col-lg-8 mx-auto text-center">
                        <p class="mb-3 fw-bold text-warning tracking-widest text-uppercase slide-label">Welcome to</p>
                        <h1 class="display-2 fw-bold mb-4 slide-title" style="line-height: 1.1; text-shadow: 0 4px 30px rgba(0,0,0,0.4);">Fransalian School <span class="text-warning">Bombambili</span></h1>
                        <p class="lead mb-5 opacity-90 mx-auto slide-desc" style="max-width: 700px; text-shadow: 0 2px 10px rgba(0,0,0,0.3);">Nurturing hearts and educating minds in the spirit of St. Francis de Sales. Join our community of excellence.</p>
                        <a href="{{ route('apply') }}" class="btn btn-warning btn-lg px-5 py-3 rounded-pill fw-bold shadow-lg slide-cta" style="background: linear-gradient(135deg, #ffd700, #ffed4a); color: #001a33; border: none;">
                            <i class="bi bi-pencil-square me-2"></i> START APPLICATION
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide 2 -->
        <div class="hero-slide" style="background: linear-gradient(rgba(0, 26, 51, 0.75), rgba(0, 26, 51, 0.75)), url('{{ asset('cropped-unnamed-8.jpg') }}'); background-size: cover; background-position: center; position: absolute; inset: 0; opacity: 0; transition: opacity 1s ease-in-out;">
            <div class="container h-100 d-flex align-items-center" style="padding-top: 80px; padding-bottom: 80px;">
                <div class="row w-100">
                    <div class="col-lg-8 mx-auto text-center">
                        <p class="mb-3 fw-bold text-warning tracking-widest text-uppercase slide-label">Excellence in Education</p>
                        <h1 class="display-2 fw-bold mb-4 slide-title" style="line-height: 1.1; text-shadow: 0 4px 30px rgba(0,0,0,0.4);">Holistic Growth & <span class="text-warning">Academic Success</span></h1>
                        <p class="lead mb-5 opacity-90 mx-auto slide-desc" style="max-width: 700px; text-shadow: 0 2px 10px rgba(0,0,0,0.3);">We provide a safe, supportive environment where every child discovers their potential and develops lifelong skills.</p>
                        <a href="{{ route('msfs') }}" class="btn btn-warning btn-lg px-5 py-3 rounded-pill fw-bold shadow-lg slide-cta" style="background: linear-gradient(135deg, #ffd700, #ffed4a); color: #001a33; border: none;">
                            <i class="bi bi-book-open me-2"></i> EXPLORE PROGRAMS
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide 3 -->
        <div class="hero-slide" style="background: linear-gradient(rgba(0, 26, 51, 0.75), rgba(0, 26, 51, 0.75)), url('{{ asset('cropped-unnamed-8.jpg') }}'); background-size: cover; background-position: center; position: absolute; inset: 0; opacity: 0; transition: opacity 1s ease-in-out;">
            <div class="container h-100 d-flex align-items-center" style="padding-top: 80px; padding-bottom: 80px;">
                <div class="row w-100">
                    <div class="col-lg-8 mx-auto text-center">
                        <p class="mb-3 fw-bold text-warning tracking-widest text-uppercase slide-label">Join Our Family</p>
                        <h1 class="display-2 fw-bold mb-4 slide-title" style="line-height: 1.1; text-shadow: 0 4px 30px rgba(0,0,0,0.4);">A Place to <span class="text-warning">Belong & Thrive</span></h1>
                        <p class="lead mb-5 opacity-90 mx-auto slide-desc" style="max-width: 700px; text-shadow: 0 2px 10px rgba(0,0,0,0.3);">Experience the warmth of the Fransalian community. Admissions are open for the upcoming academic year.</p>
                        <a href="{{ route('contact') }}" class="btn btn-warning btn-lg px-5 py-3 rounded-pill fw-bold shadow-lg slide-cta" style="background: linear-gradient(135deg, #ffd700, #ffed4a); color: #001a33; border: none;">
                            <i class="bi bi-telephone-fill me-2"></i> CONTACT US
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slider Controls -->
        <button class="hero-prev position-absolute start-0 top-50 translate-middle-y btn btn-outline-light rounded-circle d-none d-md-flex align-items-center justify-content-center ms-4" style="width: 50px; height: 50px; z-index: 10; backdrop-filter: blur(10px); background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2);">
            <i class="bi bi-chevron-left fs-4"></i>
        </button>
        <button class="hero-next position-absolute end-0 top-50 translate-middle-y btn btn-outline-light rounded-circle d-none d-md-flex align-items-center justify-content-center me-4" style="width: 50px; height: 50px; z-index: 10; backdrop-filter: blur(10px); background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2);">
            <i class="bi bi-chevron-right fs-4"></i>
        </button>

        <!-- Progress Dots -->
        <div class="position-absolute bottom-0 start-50 translate-middle-x d-flex gap-2 mb-5" style="z-index: 10;">
            <button class="hero-dot active rounded-circle border-0" style="width: 12px; height: 12px; background: #ffd700; transition: all 0.3s; opacity: 1;"></button>
            <button class="hero-dot rounded-circle border-0" style="width: 12px; height: 12px; background: rgba(255,255,255,0.5); transition: all 0.3s;"></button>
            <button class="hero-dot rounded-circle border-0" style="width: 12px; height: 12px; background: rgba(255,255,255,0.5); transition: all 0.3s;"></button>
        </div>

        <!-- Progress Bar -->
        <div class="position-absolute bottom-0 start-0 w-100" style="z-index: 10;">
            <div class="hero-progress" style="height: 3px; background: #ffd700; width: 0%; transition: width 0.1s linear;"></div>
        </div>

        <!-- Wave Shape -->
        <div class="position-absolute bottom-0 start-0 w-100" style="z-index: 1;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f4f7f6" fill-opacity="1" d="M0,224L48,213.3C96,203,192,181,288,181.3C384,181,480,203,576,224C672,245,768,267,864,250.7C960,235,1056,181,1152,165.3C1248,149,1344,171,1392,181.3L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </div>
    </section>

    <style>
        .hero-slide.active .slide-label { animation: fadeInUp 0.6s ease-out 0.2s both; }
        .hero-slide.active .slide-title { animation: fadeInUp 0.6s ease-out 0.4s both; }
        .hero-slide.active .slide-desc { animation: fadeInUp 0.6s ease-out 0.6s both; }
        .hero-slide.active .slide-cta { animation: fadeInUp 0.6s ease-out 0.8s both; }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .hero-dot.active { width: 40px !important; border-radius: 6px !important; opacity: 1 !important; }
    </style>

    <script>
        (function() {
            const slides = document.querySelectorAll('.hero-slide');
            const dots = document.querySelectorAll('.hero-dot');
            const prevBtn = document.querySelector('.hero-prev');
            const nextBtn = document.querySelector('.hero-next');
            const progressBar = document.querySelector('.hero-progress');
            let current = 0;
            const duration = 6000; // 6 seconds per slide
            let startTime;
            let animId;

            function showSlide(index) {
                slides.forEach((s, i) => {
                    s.classList.toggle('active', i === index);
                    s.style.opacity = i === index ? '1' : '0';
                });
                dots.forEach((d, i) => {
                    d.classList.toggle('active', i === index);
                    d.style.background = i === index ? '#ffd700' : 'rgba(255,255,255,0.5)';
                    d.style.width = i === index ? '40px' : '12px';
                    d.style.borderRadius = i === index ? '6px' : '50%';
                    d.style.opacity = i === index ? '1' : '0.5';
                });
                current = index;
                startTime = performance.now();
            }

            function nextSlide() {
                showSlide((current + 1) % slides.length);
            }
            function prevSlide() {
                showSlide((current - 1 + slides.length) % slides.length);
            }

            function animateProgress(time) {
                if (!startTime) startTime = time;
                const elapsed = time - startTime;
                const pct = Math.min((elapsed / duration) * 100, 100);
                if (progressBar) progressBar.style.width = pct + '%';
                if (elapsed >= duration) {
                    nextSlide();
                }
                animId = requestAnimationFrame(animateProgress);
            }

            if (prevBtn) prevBtn.addEventListener('click', () => { prevSlide(); });
            if (nextBtn) nextBtn.addEventListener('click', () => { nextSlide(); });
            dots.forEach((d, i) => d.addEventListener('click', () => showSlide(i)));

            startTime = performance.now();
            animId = requestAnimationFrame(animateProgress);
        })();
    </script>

    <!-- Welcome / About Section -->
    <section class="py-5 bg-white overflow-hidden">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 animate__animated animate__fadeInLeft">
                    <div class="position-relative d-flex justify-content-center">
                        <div class="position-absolute top-0 start-0 translate-middle-y" style="width: 90%; height: 90%; background: linear-gradient(135deg, #ffd700 0%, #ffed4a 50%, #fff8e1 100%); border-radius: 50%; opacity: 0.3; z-index: 0; transform: translate(-10%, 10%);"></div>
                        <div class="position-relative z-1" style="max-width: 400px;">
                            <img src="{{ asset('images/watoto.png') }}" alt="Fransalian Student" class="img-fluid rounded-4 shadow-lg" style="width: 100%; height: auto; object-fit: cover;">
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
