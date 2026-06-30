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
                    <a href="{{ route('news') }}" class="text-white text-decoration-none small">News & Events</a>
                    <i class="bi bi-chevron-right text-white-50 small"></i>
                    <span class="text-warning small fw-bold">Details</span>
                </div>
                <h1 class="display-5 fw-bold text-white mb-3" style="text-shadow: 0 4px 20px rgba(0,0,0,0.3);">{{ $newsItem->title }}</h1>
                <div class="d-flex justify-content-center gap-3 text-white-50 small">
                    <span><i class="bi bi-calendar-event me-1"></i> {{ $newsItem->published_at ? \Carbon\Carbon::parse($newsItem->published_at)->format('F d, Y') : 'Upcoming' }}</span>
                    <span><i class="bi bi-clock me-1"></i> {{ \Carbon\Carbon::parse($newsItem->created_at)->diffForHumans() }}</span>
                </div>
            </div>
        </div>
    </section>
    <div style="height: 5px; background: linear-gradient(90deg, #ffd700, #ffed4a, #ffd700);"></div>

    <section class="py-5 bg-light">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card border-0 shadow-lg overflow-hidden" style="border-radius: 30px; background: #fff;">
                        @if($newsItem->image)
                        <div class="overflow-hidden" style="height: 450px;">
                            <img src="{{ asset('storage/' . $newsItem->image) }}" alt="{{ $newsItem->title }}" class="w-100 h-100" style="object-fit: cover;">
                        </div>
                        @endif
                        <div class="card-body p-4 p-lg-5">
                            <div class="d-flex align-items-center gap-3 mb-4">
                                <span class="badge bg-primary rounded-pill px-3 py-2">News & Events</span>
                                <span class="text-muted"><i class="bi bi-calendar3 me-1"></i> {{ $newsItem->published_at ? \Carbon\Carbon::parse($newsItem->published_at)->format('M d, Y') : 'Upcoming' }}</span>
                            </div>
                            <h2 class="fw-bold mb-4" style="color: #003366;">{{ $newsItem->title }}</h2>
                            <div class="news-content text-muted" style="line-height: 1.9; font-size: 1.05rem;">
                                {!! $newsItem->content !!}
                            </div>
                            <hr class="my-5">
                            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                                <a href="{{ route('news') }}" class="btn btn-outline-primary rounded-pill fw-bold px-4">
                                    <i class="bi bi-arrow-left-circle me-2"></i> Back to News
                                </a>
                                <div class="d-flex gap-2">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" target="_blank" class="btn btn-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                        <i class="bi bi-facebook"></i>
                                    </a>
                                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($newsItem->title) }}" target="_blank" class="btn btn-info rounded-circle d-flex align-items-center justify-content-center text-white" style="width: 40px; height: 40px;">
                                        <i class="bi bi-twitter"></i>
                                    </a>
                                    <a href="https://wa.me/?text={{ urlencode($newsItem->title . ' ' . request()->url()) }}" target="_blank" class="btn btn-success rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                        <i class="bi bi-whatsapp"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
