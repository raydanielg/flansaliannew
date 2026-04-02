@extends('layouts.portal')

@section('portal-content')
<div class="row">
    <div class="col-lg-4">
        <div class="card border-0 shadow-sm rounded-4 text-center p-4 mb-4">
            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3 shadow" style="width: 100px; height: 100px;">
                <i class="bi bi-person display-3"></i>
            </div>
            <h5 class="fw-bold text-dark mb-1">{{ Auth::user()->name }}</h5>
            <p class="text-muted small">Parent/Guardian Account</p>
            <hr class="my-3 opacity-25">
            <div class="text-start small">
                <div class="mb-2"><i class="bi bi-envelope me-2 text-primary"></i> {{ Auth::user()->email }}</div>
                <div><i class="bi bi-calendar-check me-2 text-primary"></i> Joined {{ Auth::user()->created_at->format('M Y') }}</div>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-header bg-white border-bottom py-3 px-4">
                <h5 class="fw-bold mb-0 text-dark">Profile Settings</h5>
            </div>
            <div class="card-body p-4">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label small fw-bold">Username</label>
                            <input type="text" class="form-control rounded-3" value="{{ Auth::user()->name }}" disabled>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-bold">Email Address</label>
                            <input type="email" class="form-control rounded-3" value="{{ Auth::user()->email }}" disabled>
                        </div>
                        <div class="col-12 mt-4 pt-3 border-top">
                            <h6 class="fw-bold text-dark mb-3">Change Password</h6>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold">New Password</label>
                                    <input type="password" class="form-control rounded-3">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold">Confirm New Password</label>
                                    <input type="password" class="form-control rounded-3">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <button type="button" class="btn btn-primary rounded-pill px-5 fw-bold shadow">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
