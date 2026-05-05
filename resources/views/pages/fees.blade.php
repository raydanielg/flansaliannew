@extends('layouts.app')

@section('content')
    @include('layouts.header')

    <!-- Page Header -->
    <section class="page-header py-5 text-white" style="background: linear-gradient(rgba(0, 51, 102, 0.8), rgba(0, 51, 102, 0.8)), url('https://images.unsplash.com/photo-1454165833767-027ff394149a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'); background-size: cover; background-position: center; border-bottom: 5px solid #ffd700;">
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
