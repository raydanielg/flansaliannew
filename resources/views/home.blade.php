@extends('layouts.portal')

@section('portal-content')
<div class="row g-4">
    <!-- Welcome Card -->
    <div class="col-12">
        <div class="card border-0 shadow-sm p-4 rounded-4 bg-primary text-white" style="background: linear-gradient(135deg, #003366 0%, #0056b3 100%) !important;">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h2 class="fw-bold mb-2">Welcome Back, {{ Auth::check() ? Auth::user()->name : 'Guest' }}!</h2>
                    <p class="opacity-75 mb-0">Track your child's academic journey and school activities in one place.</p>
                </div>
                <div class="col-md-4 text-center text-md-end">
                    <i class="bi bi-person-workspace display-1 opacity-25"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Application Status Summary -->
    <div class="col-md-6">
        <div class="card border-0 shadow-sm rounded-4 h-100">
            <div class="card-header bg-white border-bottom py-3 px-4 d-flex justify-content-between align-items-center">
                <h5 class="fw-bold mb-0">Latest Applications</h5>
                <a href="{{ route('home.applications') }}" class="btn btn-sm btn-link text-primary text-decoration-none p-0 fw-bold small">VIEW ALL</a>
            </div>
            <div class="card-body p-4">
                @forelse($applications as $app)
                <div class="d-flex align-items-center mb-3 p-3 bg-light rounded-3 border-start border-4 {{ $app->status == 'pending' ? 'border-warning' : 'border-success' }}">
                    <div class="me-3">
                        <i class="bi bi-file-earmark-person fs-3 text-primary"></i>
                    </div>
                    <div class="flex-grow-1">
                        <h6 class="fw-bold mb-0 text-dark">{{ $app->student_name }}</h6>
                        <small class="text-muted">{{ $app->applying_for_level }}</small>
                    </div>
                    <div class="text-end">
                        <span class="badge {{ $app->status == 'pending' ? 'bg-warning text-dark' : 'bg-success' }} rounded-pill small px-3">
                            {{ strtoupper($app->status) }}
                        </span>
                    </div>
                </div>
                @empty
                <div class="text-center py-4 text-muted">
                    <i class="bi bi-info-circle display-4 mb-3"></i>
                    <p class="small">You haven't submitted any applications yet.</p>
                </div>
                @endforelse
            </div>
        </div>
    </div>

    <!-- Notifications or Calendar -->
    <div class="col-md-6">
        <div class="card border-0 shadow-sm rounded-4 h-100">
            <div class="card-header bg-white border-bottom py-3 px-4">
                <h5 class="fw-bold mb-0">Upcoming Events</h5>
            </div>
            <div class="card-body p-4">
                <div class="d-flex align-items-start mb-4">
                    <div class="bg-warning text-dark rounded-3 px-3 py-2 text-center me-3 shadow-sm" style="min-width: 65px;">
                        <div class="fw-bold h4 mb-0">15</div>
                        <div class="small fw-bold">APR</div>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1 text-dark">Parents' Meeting</h6>
                        <p class="small text-muted mb-0">Term 1 general meeting for all parents.</p>
                    </div>
                </div>
                <div class="d-flex align-items-start">
                    <div class="bg-primary text-white rounded-3 px-3 py-2 text-center me-3 shadow-sm" style="min-width: 65px;">
                        <div class="fw-bold h4 mb-0">28</div>
                        <div class="small fw-bold">MAY</div>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1 text-dark">Cultural Day</h6>
                        <p class="small text-muted mb-0">Annual school cultural exhibition and festival.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
