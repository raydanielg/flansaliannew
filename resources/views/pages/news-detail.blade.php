@extends('layouts.app')

@section('meta_title', $newsItem->title . ' | Fransalian School News')
@section('meta_description', Str::limit(strip_tags($newsItem->content), 160))
@section('meta_keywords', 'Fransalian School news, ' . $newsItem->title . ', school events, Dar es Salaam')
@section('og_type', 'article')
@section('og_title', $newsItem->title . ' | Fransalian School')
@section('og_description', Str::limit(strip_tags($newsItem->content), 160))
@if($newsItem->image)
@section('og_image', asset('storage/' . $newsItem->image))
@endif

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
                            <img src="{{ asset('storage/' . $newsItem->image) }}" alt="{{ $newsItem->title }} - Fransalian School News" class="w-100 h-100" style="object-fit: cover;" loading="lazy">
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
                                <div class="d-flex align-items-center gap-2">
                                    <span class="text-muted small fw-bold me-2">Share:</span>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" target="_blank" class="btn btn-primary rounded-circle d-flex align-items-center justify-content-center share-btn" style="width: 40px; height: 40px;" title="Share on Facebook">
                                        <i class="bi bi-facebook"></i>
                                    </a>
                                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($newsItem->title) }}" target="_blank" class="btn btn-info rounded-circle d-flex align-items-center justify-content-center text-white share-btn" style="width: 40px; height: 40px;" title="Share on Twitter">
                                        <i class="bi bi-twitter"></i>
                                    </a>
                                    <a href="https://wa.me/?text={{ urlencode($newsItem->title . ' ' . request()->url()) }}" target="_blank" class="btn btn-success rounded-circle d-flex align-items-center justify-content-center share-btn" style="width: 40px; height: 40px;" title="Share on WhatsApp">
                                        <i class="bi bi-whatsapp"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->url()) }}" target="_blank" class="btn btn-primary rounded-circle d-flex align-items-center justify-content-center share-btn" style="width: 40px; height: 40px; background-color: #0077b5; border-color: #0077b5;" title="Share on LinkedIn">
                                        <i class="bi bi-linkedin"></i>
                                    </a>
                                    <a href="mailto:?subject={{ urlencode($newsItem->title) }}&body={{ urlencode(request()->url()) }}" class="btn btn-secondary rounded-circle d-flex align-items-center justify-content-center share-btn" style="width: 40px; height: 40px;" title="Share via Email">
                                        <i class="bi bi-envelope"></i>
                                    </a>
                                    <button onclick="copyLink()" class="btn btn-outline-primary rounded-circle d-flex align-items-center justify-content-center share-btn" style="width: 40px; height: 40px;" title="Copy Link">
                                        <i class="bi bi-link-45deg"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
    function copyLink() {
        navigator.clipboard.writeText(window.location.href).then(function() {
            alert('Link copied to clipboard!');
        });
    }
    </script>

    <style>
        .share-btn { transition: all 0.3s ease; }
        .share-btn:hover { transform: translateY(-3px) scale(1.1); box-shadow: 0 5px 15px rgba(0,0,0,0.2); }
    </style>
@endsection
