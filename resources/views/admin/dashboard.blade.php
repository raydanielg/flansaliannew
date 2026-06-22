@extends('admin.layouts.admin')

@section('page-title', 'Dashboard')

@section('content')
<div class="row g-4 mb-4 animate__animated animate__fadeInUp">
    <div class="col-xl col-lg-4 col-md-6">
        <div class="stat-card">
            <div class="stat-icon blue"><i class="bi bi-people-fill"></i></div>
            <div class="stat-details">
                <h3>{{ $stats['total_users'] }}</h3>
                <p>Registered Users</p>
            </div>
        </div>
    </div>
    <div class="col-xl col-lg-4 col-md-6">
        <div class="stat-card">
            <div class="stat-icon green"><i class="bi bi-file-earmark-text-fill"></i></div>
            <div class="stat-details">
                <h3>{{ $stats['total_applications'] }}</h3>
                <p>Applications</p>
            </div>
        </div>
    </div>
    <div class="col-xl col-lg-4 col-md-6">
        <div class="stat-card">
            <div class="stat-icon orange"><i class="bi bi-chat-left-text-fill"></i></div>
            <div class="stat-details">
                <h3>{{ $stats['total_feedbacks'] }}</h3>
                <p>Feedbacks</p>
            </div>
        </div>
    </div>
    <div class="col-xl col-lg-4 col-md-6">
        <div class="stat-card">
            <div class="stat-icon purple"><i class="bi bi-question-circle-fill"></i></div>
            <div class="stat-details">
                <h3>{{ $stats['total_faqs'] }}</h3>
                <p>Help Desk FAQs</p>
            </div>
        </div>
    </div>
    <div class="col-xl col-lg-4 col-md-6">
        <div class="stat-card">
            <div class="stat-icon red"><i class="bi bi-newspaper"></i></div>
            <div class="stat-details">
                <h3>{{ $stats['total_news'] }}</h3>
                <p>News Articles</p>
            </div>
        </div>
    </div>
    <div class="col-xl col-lg-4 col-md-6">
        <div class="stat-card">
            <div class="stat-icon blue" style="background: #6f42c1;"><i class="bi bi-images"></i></div>
            <div class="stat-details">
                <h3>{{ $stats['total_gallery'] }}</h3>
                <p>Gallery Images</p>
            </div>
        </div>
    </div>
</div>

<div class="row g-4">
    <div class="col-lg-7 animate__animated animate__fadeInUp animate__delay-1s">
        <div class="admin-card">
            <div class="admin-card-header">
                <h5><i class="bi bi-clock-history me-2 text-primary"></i> Recent Applications</h5>
                <a href="{{ route('admin.applications') }}" class="btn btn-sm btn-outline-primary rounded-pill px-3 fw-bold">View All</a>
            </div>
            <div class="admin-card-body">
                <table class="admin-table table">
                    <thead>
                        <tr>
                            <th>Applicant</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($recent_applications as $app)
                        <tr>
                            <td><strong>{{ $app->student_name ?? $app->name ?? 'N/A' }}</strong></td>
                            <td>{{ $app->parent_email ?? 'N/A' }}</td>
                            <td>{{ $app->created_at?->format('M d, Y') ?? 'N/A' }}</td>
                            <td><span class="status-badge status-pending">Pending</span></td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted py-4">
                                <i class="bi bi-inbox fs-2 d-block mb-2 opacity-25"></i>
                                No applications yet
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-5 animate__animated animate__fadeInUp animate__delay-2s">
        <div class="admin-card">
            <div class="admin-card-header">
                <h5><i class="bi bi-chat-dots me-2 text-primary"></i> Recent Feedback</h5>
            </div>
            <div class="admin-card-body">
                <table class="admin-table table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Message</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($recent_feedbacks as $fb)
                        <tr>
                            <td><strong>{{ $fb->name ?? 'Anonymous' }}</strong></td>
                            <td>{{ Str::limit($fb->message ?? $fb->content ?? 'No message', 40) }}</td>
                            <td>{{ $fb->created_at?->format('M d') ?? 'N/A' }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-center text-muted py-4">
                                <i class="bi bi-inbox fs-2 d-block mb-2 opacity-25"></i>
                                No feedback yet
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="admin-card mt-4 animate__animated animate__fadeInUp animate__delay-2s">
            <div class="admin-card-header">
                <h5><i class="bi bi-lightning-charge me-2 text-warning"></i> Quick Actions</h5>
            </div>
            <div class="p-4">
                <div class="row g-3">
                    <div class="col-6">
                        <a href="{{ route('admin.applications') }}" class="btn btn-outline-primary w-100 rounded-3 py-3 fw-bold">
                            <i class="bi bi-file-earmark-text d-block fs-4 mb-1"></i> Applications
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="{{ route('admin.users') }}" class="btn btn-outline-success w-100 rounded-3 py-3 fw-bold">
                            <i class="bi bi-people d-block fs-4 mb-1"></i> Users
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="{{ route('admin.gallery') }}" class="btn btn-outline-warning w-100 rounded-3 py-3 fw-bold">
                            <i class="bi bi-images d-block fs-4 mb-1"></i> Gallery
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="{{ route('admin.settings') }}" class="btn btn-outline-info w-100 rounded-3 py-3 fw-bold">
                            <i class="bi bi-gear d-block fs-4 mb-1"></i> Settings
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
