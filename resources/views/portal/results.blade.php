@extends('layouts.portal')

@section('portal-content')
<div class="row justify-content-center">
    <div class="col-md-8 text-center py-5">
        <div class="card border-0 shadow-sm rounded-4 p-5">
            <i class="bi bi-hourglass-split display-1 text-warning mb-4"></i>
            <h2 class="fw-bold text-dark">Results are Pending</h2>
            <p class="lead text-muted mb-4">Exam results will be posted here once the academic term is complete and approved by the administration.</p>
            <div class="mt-4">
                <a href="{{ route('home') }}" class="btn btn-primary rounded-pill px-5 fw-bold shadow">Back to Dashboard</a>
            </div>
        </div>
    </div>
</div>
@endsection
