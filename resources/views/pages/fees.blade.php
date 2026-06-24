@extends('layouts.app')

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
                    <span class="text-warning small fw-bold">{{ ucfirst($page->slug) }}</span>
                </div>
                <h1 class="display-3 fw-bold text-white mb-3" style="text-shadow: 0 4px 20px rgba(0,0,0,0.3);">{{ $page->title }}</h1>
                <div class="mx-auto" style="width: 80px; height: 4px; background: linear-gradient(90deg, #ffd700, #ffed4a); border-radius: 2px;"></div>
            </div>
        </div>
    </section>
    <div style="height: 5px; background: linear-gradient(90deg, #ffd700, #ffed4a, #ffd700);"></div>

    <div class="container py-5 animate__animated animate__fadeIn">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card border-0 shadow-lg overflow-hidden" style="border-radius: 30px; background: #fff;">
                    <div class="row g-0">
                        <!-- Content Sidebar Info -->
                        <div class="col-lg-3 bg-light p-4 d-flex flex-column align-items-center text-center border-end">
                            <div class="icon-box bg-white text-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-4 shadow-sm" style="width: 100px; height: 100px; border: 2px solid var(--primary-blue);">
                                <i class="bi bi-wallet2 fs-1" style="color: var(--primary-blue) !important;"></i>
                            </div>
                            <h4 class="fw-bold text-dark mb-2 text-uppercase small tracking-widest">FEES</h4>
                            <div class="divider bg-warning mx-auto mb-4" style="width: 40px; height: 3px;"></div>
                            <p class="text-muted small italic px-2">Affordable investment in your child's future.</p>
                        </div>

                        <!-- Main Content Area -->
                        <div class="col-lg-9 p-5">
                            <div class="content-header mb-4 pb-3 border-bottom">
                                <h2 class="fw-bold text-dark mb-0" style="color: var(--primary-blue) !important;">Investment in Excellence</h2>
                            </div>
                            
                            <div class="page-body-content mb-5">
                                <p class="lead text-muted" style="line-height: 1.8;">{{ $page->content }}</p>
                            @if($page->slug == 'fees')
                            <!-- Fees Content -->
                            <div class="fees-container animate__animated animate__fadeIn">
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
                                                    <th class="py-3">Stationery</th>
                                                    <th class="py-3">Others</th>
                                                    <th class="py-3 bg-dark">Total</th>
                                                    <th class="py-3 bg-warning text-dark">Term 1</th>
                                                    <th class="py-3 bg-warning text-dark">Term 2</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($fees as $fee)
                                                <tr class="text-center align-middle">
                                                    <td class="fw-bold text-dark">{{ $fee->level_en }}</td>
                                                    <td>{{ $fee->tuition_fees }}</td>
                                                    <td>{{ $fee->food }}</td>
                                                    <td>{{ $fee->stationery }}</td>
                                                    <td>{{ $fee->other_expenses }}</td>
                                                    <td class="fw-bold text-dark bg-light">{{ $fee->total }}</td>
                                                    <td class="fw-bold text-primary">{{ $fee->term_1 }}/=</td>
                                                    <td class="fw-bold text-primary">{{ $fee->term_2 }}/=</td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="8" class="text-center text-muted py-4">No fee data available.</td>
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
                                                    <th class="py-3">Vitabu/Vifaa</th>
                                                    <th class="py-3">Nyinginezo</th>
                                                    <th class="py-3 bg-secondary">Jumla Kuu</th>
                                                    <th class="py-3 bg-warning text-dark">Muhula 1</th>
                                                    <th class="py-3 bg-warning text-dark">Muhula 2</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($fees as $fee)
                                                <tr class="text-center align-middle">
                                                    <td class="fw-bold text-dark">{{ $fee->level_sw }}</td>
                                                    <td>{{ $fee->tuition_fees }}/=</td>
                                                    <td>{{ $fee->food }}/=</td>
                                                    <td>{{ $fee->stationery }}/=</td>
                                                    <td>{{ $fee->other_expenses }}/=</td>
                                                    <td class="fw-bold text-dark bg-light">{{ $fee->total }}</td>
                                                    <td class="fw-bold text-primary">{{ $fee->term_1 }}/=</td>
                                                    <td class="fw-bold text-primary">{{ $fee->term_2 }}/=</td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="8" class="text-center text-muted py-4">Taarifa za ada hazipatikani.</td>
                                                </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                    <p class="text-muted small mt-2"><i class="bi bi-info-circle me-1"></i> Gharama za usafiri zitatolewa tofauti kwa watakaotumia usafiri wa shule.</p>
                                </div>
                            </div>
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .tracking-wider { letter-spacing: 0.1rem; }
        .transition-hover { transition: all 0.3s ease; }
        .transition-hover:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important; }
    </style>
@endsection
