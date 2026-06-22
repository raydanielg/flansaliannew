@extends('admin.layouts.admin')

@section('page-title', 'Applications')

@section('content')
<div class="row mb-4 animate__animated animate__fadeInUp">
    <div class="col-12">
        <div class="admin-card p-4">
            <form method="GET" action="{{ route('admin.applications') }}" class="row g-3 align-items-end">
                <div class="col-md-4">
                    <label class="form-label fw-bold small text-muted">Search Applicant</label>
                    <input type="text" name="search" class="form-control" placeholder="Student name..." value="{{ request('search') }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-bold small text-muted">Status Filter</label>
                    <select name="status" class="form-select">
                        <option value="">All Statuses</option>
                        <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="approved" {{ request('status') == 'approved' ? 'selected' : '' }}>Approved</option>
                        <option value="rejected" {{ request('status') == 'rejected' ? 'selected' : '' }}>Rejected</option>
                    </select>
                </div>
                <div class="col-md-auto">
                    <button type="submit" class="btn btn-primary px-4 fw-bold"><i class="bi bi-search me-2"></i>Filter</button>
                    <a href="{{ route('admin.applications') }}" class="btn btn-outline-secondary fw-bold"><i class="bi bi-x-lg"></i></a>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="row animate__animated animate__fadeInUp animate__delay-1s">
    <div class="col-12">
        <div class="admin-card">
            <div class="admin-card-header">
                <h5><i class="bi bi-file-earmark-text me-2 text-primary"></i> All Applications</h5>
                <span class="badge bg-primary">{{ $applications->total() }} Total</span>
            </div>
            <div class="admin-card-body">
                <div class="table-responsive">
                    <table class="admin-table table mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Student Name</th>
                                <th>Parent</th>
                                <th>Level</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($applications as $app)
                            <tr>
                                <td><strong>#{{ $app->id }}</strong></td>
                                <td>{{ $app->student_name }}</td>
                                <td>{{ $app->parent_name }}<br><small class="text-muted">{{ $app->parent_email }}</small></td>
                                <td>{{ $app->applying_for_level }}</td>
                                <td>{{ $app->created_at?->format('M d, Y') }}</td>
                                <td>
                                    <span class="status-badge status-{{ $app->status }}">{{ ucfirst($app->status) }}</span>
                                </td>
                                <td>
                                    <form method="POST" action="{{ route('admin.applications.status', $app) }}" class="d-flex gap-2">
                                        @csrf
                                        @method('PUT')
                                        <select name="status" class="form-select form-select-sm" style="width: 110px;" onchange="this.form.submit()">
                                            <option value="pending" {{ $app->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="approved" {{ $app->status == 'approved' ? 'selected' : '' }}>Approved</option>
                                            <option value="rejected" {{ $app->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                                        </select>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted py-5">
                                    <i class="bi bi-inbox fs-1 d-block mb-3 opacity-25"></i>
                                    No applications found.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="p-3 border-top">
                    {{ $applications->withQueryString()->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
