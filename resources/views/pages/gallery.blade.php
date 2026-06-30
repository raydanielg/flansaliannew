@extends('layouts.app')

@section('meta_title', 'School Gallery | Fransalian School')
@section('meta_description', 'Explore photos of Fransalian School Bombambili - school life, events, facilities, and achievements of our students.')
@section('og_title', 'School Gallery | Fransalian School')
@section('og_description', 'Explore photos of Fransalian School Bombambili - school life, events, and achievements.')

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
                    <span class="text-warning small fw-bold">Gallery</span>
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
                            <h2 class="fw-bold text-dark mb-0" style="color: var(--primary-blue) !important;">Photo Gallery</h2>
                            <p class="text-muted mt-2 mb-0">Moments that capture our school spirit.</p>
                        </div>

                        @if($galleryImages->count() > 0)
                            <div class="row g-4">
                                @foreach($galleryImages as $image)
                                <div class="col-lg-4 col-md-6">
                                    <div class="card border-0 shadow-sm overflow-hidden" style="border-radius: 20px; cursor: pointer; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-8px)'" onmouseout="this.style.transform='translateY(0)'" onclick="openGalleryLightbox('{{ asset('storage/' . $image->image) }}', '{{ $image->title }}')">
                                        <div style="height: 280px; background: #f8f9fa; overflow: hidden;">
                                            <img src="{{ asset('storage/' . $image->image) }}" alt="{{ $image->title }}" class="w-100 h-100" style="object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'" onerror="this.parentElement.innerHTML='<div class=\'w-100 h-100 d-flex align-items-center justify-content-center bg-light text-muted\'><i class=\'bi bi-image fs-1\'></i></div>'">
                                        </div>
                                        <div class="card-body p-4">
                                            <h5 class="fw-bold mb-1" style="color: #003366;">{{ $image->title }}</h5>
                                            <p class="text-warning fw-bold small mb-2"><i class="bi bi-tag me-1"></i>{{ $image->category }}</p>
                                            <p class="text-muted small mb-0" style="line-height: 1.6;">{{ $image->description ?? '' }}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        @else
                            <div class="text-center py-5 text-muted">
                                <i class="bi bi-images fs-1 d-block mb-3 opacity-25"></i>
                                <p class="lead">No gallery images have been added yet.</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    function openGalleryLightbox(src, title) {
        document.getElementById('lightboxImage').src = src;
        document.getElementById('lightboxTitle').textContent = title;
        const modal = new bootstrap.Modal(document.getElementById('galleryLightbox'));
        modal.show();
    }
    </script>
@endsection
