@extends('layouts.portal')

@section('portal-content')
<div class="row justify-content-center">
    <div class="col-md-8 text-center py-5">
        <div class="card border-0 shadow-sm rounded-4 p-5">
            <i class="bi bi-shield-check display-1 text-success mb-4"></i>
            <h2 class="fw-bold text-dark">Behaviour Record</h2>
            <p class="lead text-muted mb-4">Track your child's conduct and disciplinary records. No records found at the moment.</p>
            <div class="mt-4">
                <a href="{{ route('home') }}" class="btn btn-primary rounded-pill px-5 fw-bold shadow">Back to Dashboard</a>
            </div>
        </div>
    </div>
</div>
@endsection
