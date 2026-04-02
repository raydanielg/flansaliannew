@extends('layouts.portal')

@section('portal-content')
<div class="card border-0 shadow-sm rounded-4">
    <div class="card-header bg-white border-bottom py-3 px-4">
        <h5 class="fw-bold mb-0 text-dark">My Applications</h5>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="bg-light">
                    <tr>
                        <th class="px-4 py-3 border-0 small fw-bold text-muted">STUDENT NAME</th>
                        <th class="py-3 border-0 small fw-bold text-muted">LEVEL</th>
                        <th class="py-3 border-0 small fw-bold text-muted">DATE APPLIED</th>
                        <th class="py-3 border-0 small fw-bold text-muted text-center">STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($applications as $app)
                    <tr>
                        <td class="px-4 py-3">
                            <div class="d-flex align-items-center">
                                <div class="bg-primary-light text-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                    <i class="bi bi-person-fill"></i>
                                </div>
                                <span class="fw-bold text-dark">{{ $app->student_name }}</span>
                            </div>
                        </td>
                        <td class="py-3 text-muted">{{ $app->applying_for_level }}</td>
                        <td class="py-3 text-muted">{{ $app->created_at->format('d M, Y') }}</td>
                        <td class="py-3 text-center">
                            <span class="badge {{ $app->status == 'pending' ? 'bg-warning text-dark' : 'bg-success' }} rounded-pill px-3">
                                {{ strtoupper($app->status) }}
                            </span>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center py-5 text-muted">
                            <i class="bi bi-inbox display-4 mb-3 d-block"></i>
                            No applications found.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
