@extends('layouts.app')

@section('content')
    @include('layouts.header')

    <!-- Page Header -->
    <section class="page-header py-5 text-white" style="background: linear-gradient(rgba(0, 51, 102, 0.8), rgba(0, 51, 102, 0.8)), url('https://images.unsplash.com/photo-1523050335392-9ae867749296?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'); background-size: cover; background-position: center; border-bottom: 5px solid #ffd700;">
        <div class="container text-center animate__animated animate__fadeIn">
            <h1 class="display-4 fw-bold mb-0 text-uppercase tracking-wider">{{ $page->title }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 mt-3">
                    <li class="breadcrumb-item"><a href="{{ route('welcome') }}" class="text-white text-decoration-none">HOME</a></li>
                    <li class="breadcrumb-item active text-warning fw-bold" aria-current="page">{{ strtoupper($page->slug) }}</li>
                </ol>
            </nav>
        </div>
    </section>

    @if($page->slug == 'fees')
        <!-- Fees Content -->
        <div class="fees-container animate__animated animate__fadeIn py-5">
            <div class="container">
                <!-- English Fee Table -->
                <div class="mb-5">
                    <h4 class="fw-bold text-dark mb-3 text-uppercase small border-start border-4 border-primary ps-3">SCHOOL FEES AND OTHER RELATED EXPENSES FOR ONE YEAR</h4>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered border-light shadow-sm" style="border-radius: 15px; overflow: hidden;">
                            <thead class="bg-primary text-white" style="background-color: var(--primary-blue) !important;">
                                <tr class="text-center small">
                                    <th class="py-3">Level</th>
                                    <th class="py-3">Fees</th>
                                    <th class="py-3">Food</th>
                                    <th class="py-3">Textbooks/Stationeries</th>
                                    <th class="py-3">Other Expenses</th>
                                    <th class="py-3">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($fees as $fee)
                                <tr class="text-center align-middle">
                                    <td class="fw-bold text-dark">{{ $fee->level_en }}</td>
                                    <td>{{ number_format((float)str_replace(',', '', $fee->tuition_fees)) }}</td>
                                    <td>{{ number_format((float)str_replace(',', '', $fee->food)) }}</td>
                                    <td>{{ number_format((float)str_replace(',', '', $fee->stationery)) }}</td>
                                    <td>{{ number_format((float)str_replace(',', '', $fee->other_expenses)) }}</td>
                                    <td class="fw-bold text-primary">{{ $fee->total }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted py-4">No fee data available.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <p class="text-muted small mt-2"><i class="bi bi-info-circle me-1"></i> Transportation costs is paid separately for those who use school transport.</p>
                </div>

                <!-- Swahili Fee Table -->
                <div class="mb-5 animate__animated animate__fadeInUp">
                    <h4 class="fw-bold text-dark mb-3 text-uppercase small border-start border-4 border-warning ps-3">ADA YA SHULE NA GHARAMA ZINGINE ZINAZOHUSIANA KWA MWAKA MMOJA</h4>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered border-light shadow-sm" style="border-radius: 15px; overflow: hidden;">
                            <thead class="bg-dark text-white">
                                <tr class="text-center small">
                                    <th class="py-3">Ngazi</th>
                                    <th class="py-3">Ada</th>
                                    <th class="py-3">Chakula</th>
                                    <th class="py-3">Vitabu/Stationary</th>
                                    <th class="py-3">Gharama nyinginezo</th>
                                    <th class="py-3">Jumla Kuu</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($fees as $fee)
                                <tr class="text-center align-middle">
                                    <td class="fw-bold text-dark">{{ $fee->level_sw }}</td>
                                    <td>{{ number_format((float)str_replace(',', '', $fee->tuition_fees)) }}/=</td>
                                    <td>{{ number_format((float)str_replace(',', '', $fee->food)) }}/=</td>
                                    <td>{{ number_format((float)str_replace(',', '', $fee->stationery)) }}/=</td>
                                    <td>{{ number_format((float)str_replace(',', '', $fee->other_expenses)) }}/=</td>
                                    <td class="fw-bold text-primary">{{ $fee->total }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted py-4">Taarifa za ada hazipatikani.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <p class="text-muted small mt-2"><i class="bi bi-info-circle me-1"></i> Gharama za usafiri zitatolewa tofauti kwa watakaotumia usafiri wa shule.</p>
                </div>
            </div>
        </div>
    @else
        <div class="container py-5 animate__animated animate__fadeIn">
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <div class="card border-0 shadow-lg overflow-hidden" style="border-radius: 30px; background: #fff;">
                        <div class="row g-0">
                            <!-- Content Sidebar Info -->
                            <div class="col-lg-3 bg-light p-4 d-flex flex-column align-items-center text-center border-end">
                                <div class="icon-box bg-white text-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-4 shadow-sm" style="width: 100px; height: 100px; border: 2px solid var(--primary-blue);">
                                    <i class="bi bi-pencil-square fs-1" style="color: var(--primary-blue) !important;"></i>
                                </div>
                                <h4 class="fw-bold text-dark mb-2 text-uppercase small tracking-widest">ADMISSION</h4>
                                <div class="divider bg-warning mx-auto mb-4" style="width: 40px; height: 3px;"></div>
                                <p class="text-muted small italic">Join our family today.</p>
                            </div>

                            <!-- Main Content Area -->
                            <div class="col-lg-9 p-5">
                                <div class="content-header mb-4 pb-3 border-bottom">
                                    <h2 class="fw-bold text-dark mb-0" style="color: var(--primary-blue) !important;">Start Your <span class="text-primary">Journey</span> With Us</h2>
                                </div>
                                
                                <div class="page-body-content mb-5">
                                    <p class="lead text-muted" style="line-height: 1.8;">{{ $page->content }}</p>
                                </div>

                                @if(session('username'))
                                    <div class="alert alert-success border-0 shadow-lg p-5 mb-5 animate__animated animate__bounceIn" style="border-radius: 20px; background: #d1e7dd;">
                                        <div class="text-center">
                                            <i class="bi bi-check-circle-fill display-1 text-success mb-4"></i>
                                            <h3 class="fw-bold text-dark">MAOMBI YAMEPOKELEWA!</h3>
                                            <p class="lead text-dark mb-4">Tafadhali hifadhi taarifa hizi za siri. Utazitumia kuingia kwenye portal ya mzazi.</p>
                                            
                                            <div class="row justify-content-center">
                                                <div class="col-md-6">
                                                    <div class="bg-white p-4 rounded-4 shadow-sm border border-success border-opacity-25">
                                                        <div class="mb-3">
                                                            <label class="small fw-bold text-muted text-uppercase tracking-widest">Username</label>
                                                            <div class="fs-3 fw-extrabold text-primary">{{ session('username') }}</div>
                                                        </div>
                                                        <div>
                                                            <label class="small fw-bold text-muted text-uppercase tracking-widest">Password</label>
                                                            <div class="fs-3 fw-extrabold text-danger">{{ session('password') }}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                <div class="mt-5 text-center">
                                    <h4 class="fw-bold text-dark mb-4 text-uppercase small border-start border-4 border-primary ps-3 text-start">Admission Steps</h4>
                                    <div class="admission-timeline text-start mb-5 ps-3">
                                        @foreach($admissionSteps as $step)
                                            <div class="step-item d-flex mb-4">
                                                <div class="step-number bg-primary text-white rounded-circle me-3 d-flex align-items-center justify-content-center" style="min-width: 35px; height: 35px; background-color: var(--primary-blue) !important;">{{ $step->step_number }}</div>
                                                <div>
                                                    <h6 class="fw-bold mb-1 text-dark">{{ $step->title }}</h6>
                                                    <p class="text-muted small mb-0">{{ $step->description }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                    <a href="{{ route('apply') }}" class="btn btn-warning btn-lg px-5 rounded-pill fw-bold shadow-sm transition-hover">
                                        <i class="bi bi-pencil-square me-2"></i> APPLY NOW / OMBA SASA
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <style>
        .tracking-wider { letter-spacing: 0.1rem; }
        .transition-hover:hover { transform: translateY(-3px); }
    </style>
@endsection
