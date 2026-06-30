@extends('layouts.app')

@section('meta_title', 'News & Events | Fransalian School')
@section('meta_description', 'Latest news, events, and announcements from Fransalian School Bombambili, Dar es Salaam. Stay updated with school activities and happenings.')
@section('og_title', 'News & Events | Fransalian School')
@section('og_description', 'Latest news, events, and announcements from Fransalian School Bombambili, Dar es Salaam.')

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
                    <span class="text-warning small fw-bold">News & Events</span>
                </div>
                <h1 class="display-3 fw-bold text-white mb-3" style="text-shadow: 0 4px 20px rgba(0,0,0,0.3);">Latest News & Events</h1>
                <p class="lead text-white-50 mb-3 mx-auto" style="max-width: 600px;">Stay updated with the latest happenings at Fransalian School.</p>
                <div class="mx-auto" style="width: 80px; height: 4px; background: linear-gradient(90deg, #ffd700, #ffed4a); border-radius: 2px;"></div>
            </div>
        </div>
    </section>
    <div style="height: 5px; background: linear-gradient(90deg, #ffd700, #ffed4a, #ffd700);"></div>

    <section class="py-5 bg-light">
        <div class="container py-4">
            <div class="row g-4">
                @forelse($newsItems ?? collect() as $item)
                <div class="col-lg-4 col-md-6 animate__animated animate__fadeInUp">
                    <div class="card border-0 shadow-lg h-100 overflow-hidden news-card" style="border-radius: 20px; background: #fff;">
                        <div class="position-relative overflow-hidden" style="height: 220px;">
                            @if($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-100 h-100 news-card-img" style="object-fit: cover;">
                            @else
                            <div class="w-100 h-100 d-flex align-items-center justify-content-center bg-primary-light">
                                <i class="bi bi-newspaper fs-1 text-primary opacity-50"></i>
                            </div>
                            @endif
                            <div class="position-absolute top-0 start-0 m-3">
                                <span class="badge bg-warning text-dark fw-bold px-3 py-2 rounded-pill">
                                    {{ $item->published_at ? \Carbon\Carbon::parse($item->published_at)->format('M d, Y') : 'Upcoming' }}
                                </span>
                            </div>
                        </div>
                        <div class="card-body p-4 d-flex flex-column">
                            <h5 class="fw-bold mb-3" style="color: #003366;">{{ $item->title }}</h5>
                            <p class="text-muted flex-grow-1" style="line-height: 1.7;">{{ Str::limit(strip_tags($item->content), 120) }}</p>
                            <a href="{{ route('news.show', $item->slug) }}" class="btn btn-outline-primary rounded-pill fw-bold mt-3 align-self-start">
                                Read More <i class="bi bi-arrow-right-circle ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center py-5">
                    <div class="card border-0 shadow-sm rounded-4 p-5 bg-white">
                        <i class="bi bi-newspaper fs-1 text-muted mb-3"></i>
                        <h4 class="text-muted">No news or events yet</h4>
                        <p class="text-muted">Check back soon for updates from Fransalian School.</p>
                    </div>
                </div>
                @endforelse
            </div>

            @if(($newsItems ?? collect())->hasPages())
            <div class="d-flex justify-content-center mt-5">
                {{ $newsItems->links() }}
            </div>
            @endif
        </div>
    </section>

    <style>
        .news-card { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .news-card:hover { transform: translateY(-10px); box-shadow: 0 1.5rem 3rem rgba(0,0,0,0.15) !important; }
        .news-card-img { transition: transform 0.5s ease; }
        .news-card:hover .news-card-img { transform: scale(1.1); }
        .bg-primary-light { background-color: rgba(0, 51, 102, 0.08); }
    </style>
@endsection
