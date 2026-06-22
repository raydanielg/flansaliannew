@extends('admin.layouts.admin')

@section('page-title', 'Settings')

@section('content')
<div class="row animate__animated animate__fadeInUp">
    <div class="col-lg-8 mx-auto">
        <div class="admin-card">
            <div class="admin-card-header">
                <h5><i class="bi bi-gear me-2 text-primary"></i> Site Settings</h5>
            </div>
            <div class="p-4">
                <form method="POST" action="{{ route('admin.settings.update') }}">
                    @csrf
                    @php
                        $defaults = [
                            'site_name' => 'Fransalian School Bombambili',
                            'site_email' => 'info@fransalian.com',
                            'site_phone' => '+255 000 000 000',
                            'site_address' => 'Bombambili, Tanzania',
                            'admissions_open' => '1',
                        ];
                    @endphp

                    <h6 class="fw-bold text-primary mb-3"><i class="bi bi-building me-2"></i>General Information</h6>
                    <div class="row g-3 mb-4">
                        @php
                        $generalSettings = $settings['general'] ?? collect();
                    @endphp
                    @foreach(['site_name', 'site_email', 'site_phone', 'site_address'] as $key)
                        <div class="col-md-6">
                            <label class="form-label fw-bold text-capitalize">{{ str_replace('_', ' ', $key) }}</label>
                            <input type="text" name="{{ $key }}" class="form-control" value="{{ $generalSettings->firstWhere('key', $key)?->value ?? $defaults[$key] ?? '' }}">
                        </div>
                        @endforeach
                    </div>

                    <h6 class="fw-bold text-primary mb-3"><i class="bi bi-sliders me-2"></i>Features</h6>
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center justify-content-between p-3 rounded-3 bg-light">
                                <div>
                                    <span class="fw-bold">Admissions Open</span>
                                    <p class="small text-muted mb-0">Allow new applications</p>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="admissions_open" value="1" {{ ($generalSettings->firstWhere('key', 'admissions_open')?->value ?? '1') == '1' ? 'checked' : '' }} style="width: 45px; height: 22px;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex gap-3">
                        <button type="submit" class="btn btn-primary px-5 fw-bold rounded-pill">
                            <i class="bi bi-save me-2"></i>Save Settings
                        </button>
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary rounded-pill px-4">Cancel</a>
                    </div>
                </form>
            </div>
        </div>

        <div class="admin-card mt-4">
            <div class="admin-card-header">
                <h5><i class="bi bi-shield-lock me-2 text-primary"></i> Admin Account</h5>
            </div>
            <div class="p-4">
                <div class="d-flex align-items-center gap-3">
                    <div class="admin-avatar" style="width: 50px; height: 50px; font-size: 1.2rem;">{{ strtoupper(substr(auth()->user()->name, 0, 2)) }}</div>
                    <div>
                        <h6 class="fw-bold mb-0">{{ auth()->user()->name }}</h6>
                        <p class="text-muted small mb-0">{{ auth()->user()->email }}</p>
                    </div>
                    <span class="badge bg-primary ms-auto">Admin</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
