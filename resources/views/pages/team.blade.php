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
                    <span class="text-warning small fw-bold">Our Team</span>
                </div>
                <h1 class="display-3 fw-bold text-white mb-3" style="text-shadow: 0 4px 20px rgba(0,0,0,0.3);">{{ $page->title }}</h1>
                <div class="mx-auto" style="width: 80px; height: 4px; background: linear-gradient(90deg, #ffd700, #ffed4a); border-radius: 2px;"></div>
                <p class="lead text-white-50 mt-4 mx-auto" style="max-width: 700px;">{{ $page->content }}</p>
            </div>
        </div>
    </section>
    <div style="height: 5px; background: linear-gradient(90deg, #ffd700, #ffed4a, #ffd700);"></div>

    <div class="container py-5 animate__animated animate__fadeIn">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card border-0 shadow-lg overflow-hidden" style="border-radius: 30px; background: #fff;">
                    <div class="p-5">
                        <div class="content-header mb-5 pb-3 border-bottom">
                            <h2 class="fw-bold text-dark mb-0" style="color: var(--primary-blue) !important;">Meet Our Team</h2>
                            <p class="text-muted mt-2 mb-0">Dedicated professionals shaping the future of our learners.</p>
                        </div>

                        @if($teamMembers->count() > 0)
                            <div class="row g-4">
                                @foreach($teamMembers as $member)
                                <div class="col-lg-4 col-md-6">
                                    <div class="card border-0 shadow-sm h-100" style="border-radius: 20px; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-8px)'" onmouseout="this.style.transform='translateY(0)'">
                                        <div style="height: 280px; background: #f8f9fa; overflow: hidden; border-radius: 20px 20px 0 0;">
                                            @if($member->photo)
                                            <img src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->name }}" class="w-100 h-100" style="object-fit: cover;">
                                            @else
                                            <div class="w-100 h-100 d-flex align-items-center justify-content-center bg-primary-light">
                                                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width: 120px; height: 120px; font-size: 3.5rem;">
                                                    {{ strtoupper(substr($member->name, 0, 1)) }}
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="card-body p-4 text-center">
                                            <h5 class="fw-bold mb-1" style="color: #003366;">{{ $member->name }}</h5>
                                            <p class="text-warning fw-bold small mb-3">{{ $member->position }}</p>
                                            <p class="text-muted small mb-3" style="line-height: 1.6;">{{ $member->bio ?? 'Committed to excellence in education.' }}</p>
                                            <div class="d-flex justify-content-center gap-2 flex-wrap">
                                                @if($member->email)
                                                <a href="mailto:{{ $member->email }}" class="btn btn-sm btn-outline-primary rounded-pill px-3">
                                                    <i class="bi bi-envelope me-1"></i>Email
                                                </a>
                                                @endif
                                                @if($member->phone)
                                                <a href="tel:{{ $member->phone }}" class="btn btn-sm btn-outline-success rounded-pill px-3">
                                                    <i class="bi bi-telephone me-1"></i>Call
                                                </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        @else
                            <div class="text-center py-5 text-muted">
                                <i class="bi bi-people fs-1 d-block mb-3 opacity-25"></i>
                                <p class="lead">No team members have been added yet. Please check back soon.</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
