@extends('layouts.app')

@section('meta_title', 'Sitemap | Fransalian School')
@section('meta_description', 'Navigate through all the pages of Fransalian School website. Find all our content organized in one place.')
@section('og_title', 'Sitemap | Fransalian School')
@section('og_description', 'Navigate through all the pages of Fransalian School website.')

@section('content')
    @include('layouts.header')

    <!-- Hero -->
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
                    <span class="text-warning small fw-bold">Sitemap</span>
                </div>
                <h1 class="display-3 fw-bold text-white mb-3" style="text-shadow: 0 4px 20px rgba(0,0,0,0.3);">Sitemap</h1>
                <div class="mx-auto" style="width: 80px; height: 4px; background: linear-gradient(90deg, #ffd700, #ffed4a); border-radius: 2px;"></div>
            </div>
        </div>
    </section>
    <div style="height: 5px; background: linear-gradient(90deg, #ffd700, #ffed4a, #ffd700);"></div>

    <!-- Sitemap Content -->
    <section class="py-5" style="background: linear-gradient(135deg, #f4f7f6 0%, #e8f0fe 100%); min-height: 60vh;">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-2" style="color: #003366;">Explore Our Website</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">Find all the pages of Fransalian School website organized below.</p>
            </div>

            <!-- Static Pages Grid -->
            <div class="row g-3 mb-5">
                @foreach($staticPages as $pageItem)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="{{ $pageItem['route'] }}" class="card border-0 shadow-sm h-100 p-3 text-decoration-none sitemap-card d-flex align-items-center" style="border-radius: 16px; background: #fff;">
                        <div class="bg-primary-light text-primary rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width: 50px; height: 50px;">
                            <i class="bi bi-{{ $pageItem['icon'] }} fs-5"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0 text-dark" style="font-size: 0.9rem;">{{ $pageItem['name'] }}</h6>
                            <p class="text-muted mb-0" style="font-size: 0.72rem; line-height: 1.3;">{{ $pageItem['desc'] }}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>

            <!-- News Articles -->
            @if($newsItems->count() > 0)
            <div class="card border-0 shadow-lg p-4" style="border-radius: 24px; background: #fff;">
                <div class="d-flex align-items-center mb-4">
                    <div class="bg-warning text-dark rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                        <i class="bi bi-newspaper fs-5"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold mb-0" style="color: #003366;">News & Events Articles</h4>
                        <p class="text-muted mb-0 small">All published news articles on our website</p>
                    </div>
                </div>
                <div class="row g-2">
                    @foreach($newsItems as $item)
                    <div class="col-lg-4 col-md-6">
                        <a href="{{ route('news.show', $item->slug) }}" class="d-flex align-items-center p-2 rounded-3 text-decoration-none sitemap-news-item" style="background: #f8f9fa;">
                            <i class="bi bi-chevron-right text-primary me-2"></i>
                            <span class="text-dark fw-bold small text-truncate">{{ $item->title }}</span>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </section>

    <style>
        .bg-primary-light { background-color: rgba(0, 51, 102, 0.08); }
        .sitemap-card { transition: all 0.3s ease; }
        .sitemap-card:hover { transform: translateY(-5px); box-shadow: 0 1rem 2rem rgba(0,0,0,0.1) !important; border-left: 4px solid #003366 !important; }
        .sitemap-news-item { transition: all 0.2s ease; }
        .sitemap-news-item:hover { background-color: rgba(0, 51, 102, 0.08) !important; transform: translateX(5px); }
    </style>
@endsection
