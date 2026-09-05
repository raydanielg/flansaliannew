@extends('layouts.app')

@section('meta_title', 'Contact Us | Fransalian School')
@section('meta_description', 'Contact Fransalian School Bombambili, Dar es Salaam. Call 0761 391 936 or email fransalianb2@gmail.com for admissions and enquiries.')
@section('og_title', 'Contact Us | Fransalian School')
@section('og_description', 'Contact Fransalian School Bombambili, Dar es Salaam for admissions and enquiries.')

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

    <section class="py-5" style="background: linear-gradient(135deg, #f4f7f6 0%, #e8f0fe 100%);">
        <div class="container py-4">
            <!-- Contact Cards -->
            <div class="row g-4 mb-5">
                <div class="col-lg-4 animate__animated animate__fadeInUp">
                    <div class="card border-0 shadow-lg h-100 p-4 text-center contact-card" style="border-radius: 20px; background: #fff;">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mx-auto mb-3 shadow" style="width: 70px; height: 70px;">
                            <i class="bi bi-geo-alt-fill fs-2"></i>
                        </div>
                        <h5 class="fw-bold mb-2" style="color: #003366;">Our Location</h5>
                        <p class="text-muted mb-0">Kapungu Street, Bombambili,<br>Dar es Salaam, Tanzania</p>
                    </div>
                </div>
                <div class="col-lg-4 animate__animated animate__fadeInUp animate__delay-1s">
                    <a href="tel:0761391936" class="card border-0 shadow-lg h-100 p-4 text-center text-decoration-none contact-card d-block" style="border-radius: 20px; background: #fff;">
                        <div class="bg-warning text-dark rounded-circle d-inline-flex align-items-center justify-content-center mx-auto mb-3 shadow" style="width: 70px; height: 70px;">
                            <i class="bi bi-telephone-fill fs-2"></i>
                        </div>
                        <h5 class="fw-bold mb-2" style="color: #003366;">Call Us</h5>
                        <p class="text-muted mb-0">0761 391 936<br>0784 377 306<br>0686 695 311</p>
                    </a>
                </div>
                <div class="col-lg-4 animate__animated animate__fadeInUp animate__delay-2s">
                    <a href="mailto:fransalianb2@gmail.com" class="card border-0 shadow-lg h-100 p-4 text-center text-decoration-none contact-card d-block" style="border-radius: 20px; background: #fff;">
                        <div class="bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center mx-auto mb-3 shadow" style="width: 70px; height: 70px;">
                            <i class="bi bi-envelope-fill fs-2"></i>
                        </div>
                        <h5 class="fw-bold mb-2" style="color: #003366;">Email Us</h5>
                        <p class="text-muted mb-0">fransalianb2@gmail.com</p>
                    </a>
                </div>
            </div>

            <div class="row g-5 align-items-start">
                <!-- Image Collage -->
                <div class="col-lg-5 animate__animated animate__fadeInLeft">
                    <div class="position-relative">
                        <div class="rounded-4 overflow-hidden shadow-lg mb-3" style="height: 280px;">
                            <img src="{{ asset('images/jengofarasaian.png') }}" alt="Fransalian School Building" class="w-100 h-100" style="object-fit: cover;">
                        </div>
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="rounded-4 overflow-hidden shadow" style="height: 160px;">
                                    <img src="{{ asset('images/watoto.png') }}" alt="Fransalian Student" class="w-100 h-100" style="object-fit: cover;">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="rounded-4 overflow-hidden shadow" style="height: 160px;">
                                    <img src="{{ asset('images/picwatoto2.png') }}" alt="Fransalian Learning" class="w-100 h-100" style="object-fit: cover;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-7 animate__animated animate__fadeInRight">
                    <div class="card border-0 shadow-lg p-4 p-lg-5" style="border-radius: 30px; background: #fff;">
                        <h3 class="fw-bold mb-4" style="color: #003366;">Send Us a Message</h3>
                        <p class="text-muted mb-4">We would love to hear from you. Fill out the form below and we will get back to you as soon as possible.</p>
                        <form action="{{ route('feedback.store') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold">Full Name</label>
                                    <input type="text" name="name" class="form-control rounded-3 py-2 px-3" placeholder="Enter your name" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold">Email</label>
                                    <input type="email" name="email" class="form-control rounded-3 py-2 px-3" placeholder="Enter your email" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label small fw-bold">Subject</label>
                                    <input type="text" name="subject" class="form-control rounded-3 py-2 px-3" placeholder="How can we help?">
                                </div>
                                <div class="col-12">
                                    <label class="form-label small fw-bold">Message</label>
                                    <textarea name="message" class="form-control rounded-3" rows="4" placeholder="Write your message..." required></textarea>
                                </div>
                                <div class="col-12 mt-3">
                                    <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill fw-bold shadow transition-hover" style="background-color: #003366; border-color: #003366;">
                                        <i class="bi bi-send-fill me-2"></i> Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="position-relative" style="height: 450px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158858.58519652535!2d39.19509155!3d-6.52471235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18401322f0f40a3f%3A0x2c0e9e15b0b6b6b6!2sGongo%20la%20Mboto%2C%20Dar%20es%20Salaam!5e0!3m2!1sen!2stz!4v1700000000000!5m2!1sen!2stz" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <style>
        .contact-card { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .contact-card:hover { transform: translateY(-10px); box-shadow: 0 1.5rem 3rem rgba(0,0,0,0.15) !important; }
        .transition-hover { transition: all 0.3s ease; }
        .transition-hover:hover { transform: translateY(-3px); box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important; }
    </style>
@endsection
