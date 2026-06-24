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
                    <span class="text-warning small fw-bold">{{ ucfirst($page->slug ?? $page->title) }}</span>
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
                                @if($page->slug == 'news')
                                    <i class="bi bi-newspaper fs-1"></i>
                                @elseif($page->slug == 'feedback')
                                    <i class="bi bi-chat-left-dots fs-1"></i>
                                @elseif($page->slug == 'help-desk')
                                    <i class="bi bi-headset fs-1"></i>
                                @else
                                    <i class="bi bi-info-circle fs-1"></i>
                                @endif
                            </div>
                            <h4 class="fw-bold text-dark mb-2 text-uppercase small tracking-widest">Fransalian</h4>
                            <div class="divider bg-warning mx-auto mb-4" style="width: 40px; height: 3px;"></div>
                            <p class="text-muted small italic px-2">Providing quality education and spiritual growth since 1838.</p>
                        </div>

                        <!-- Main Content Area -->
                        <div class="col-lg-9 p-5">
                            <div class="content-header mb-4 pb-3 border-bottom">
                                <h2 class="fw-bold text-dark mb-0" style="color: var(--primary-blue) !important;">{{ $page->title }}</h2>
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
                                        
                                        <div class="mt-5">
                                            <a href="{{ route('login') }}" class="btn btn-primary btn-lg px-5 rounded-pill fw-bold shadow">INGIA KWENYE PORTAL SASA</a>
                                        </div>
                                        <p class="text-muted small mt-3 italic">* Taarifa hizi zinaonyeshwa mara moja tu kwa usalama wako.</p>
                                    </div>
                                </div>
                            @endif

                            @if($page->slug == 'news')
                            <!-- News Specific Section -->
                            <div class="row g-4">
                                @forelse($newsItems as $item)
                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm p-4 bg-light transition-hover" style="border-radius: 20px; border-left: 5px solid var(--primary-blue) !important;">
                                        <div class="text-primary small fw-bold mb-2 text-uppercase">{{ $item->published_at ? \Carbon\Carbon::parse($item->published_at)->format('F d, Y') : $item->created_at->format('F d, Y') }}</div>
                                        <h5 class="fw-bold text-dark">{{ $item->title }}</h5>
                                        <p class="text-muted small mb-0">{{ $item->content }}</p>
                                    </div>
                                </div>
                                @empty
                                <div class="col-12 text-center text-muted py-4">
                                    <i class="bi bi-info-circle display-4 mb-3"></i>
                                    <p>No news updates at the moment. Please check back later.</p>
                                </div>
                                @endforelse
                            </div>
                            @endif

                            @if($page->slug == 'feedback')
                            <!-- Feedback Form Section -->
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show rounded-4 px-4 mb-4 shadow-sm" role="alert">
                                    <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            <form action="{{ route('feedback.store') }}" method="POST" class="bg-light p-4 rounded-4 shadow-sm">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label small fw-bold tracking-wider">FULL NAME</label>
                                        <input type="text" name="name" class="form-control rounded-3 py-2 px-3 @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Enter your name" required>
                                        @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label small fw-bold tracking-wider">EMAIL ADDRESS</label>
                                        <input type="email" name="email" class="form-control rounded-3 py-2 px-3 @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Enter your email" required>
                                        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label small fw-bold tracking-wider">SUBJECT</label>
                                        <input type="text" name="subject" class="form-control rounded-3 py-2 px-3 @error('subject') is-invalid @enderror" value="{{ old('subject') }}" placeholder="What is this about?">
                                        @error('subject') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label small fw-bold tracking-wider">YOUR MESSAGE</label>
                                        <textarea name="message" class="form-control rounded-3 @error('message') is-invalid @enderror" rows="5" placeholder="Share your feedback with us..." required>{{ old('message') }}</textarea>
                                        @error('message') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-primary btn-lg px-5 rounded-pill fw-bold shadow transition-hover" style="background-color: var(--primary-blue) !important;">
                                            <i class="bi bi-send-fill me-2 small"></i> SUBMIT FEEDBACK
                                        </button>
                                    </div>
                                </div>
                            </form>
                            @endif

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

                            @if($page->slug == 'admission')
                            <div class="row g-5">
                                <!-- Steps Column -->
                                <div class="col-lg-6 animate__animated animate__fadeInLeft">
                                    <h4 class="fw-bold text-dark mb-4 text-uppercase small border-start border-4 border-primary ps-3">Hatua za Kujiunga / Admission Steps</h4>
                                    <div class="admission-timeline ps-3">
                                        @foreach($admissionSteps as $step)
                                        <div class="step-item d-flex mb-4 position-relative">
                                            <div class="step-icon-wrapper me-4">
                                                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center shadow-sm" style="width: 45px; height: 45px; background-color: var(--primary-blue) !important;">
                                                    <i class="bi {{ $step->icon ?? 'bi-check2' }} fs-5"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <h6 class="fw-bold mb-1 text-dark">{{ $step->step_number }}. {{ $step->title }}</h6>
                                                <p class="text-muted small mb-0">{{ $step->description }}</p>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="mt-5">
                                        <a href="{{ route('apply') }}" class="btn btn-warning btn-lg px-5 rounded-pill fw-bold shadow-sm transition-hover">
                                            <i class="bi bi-pencil-square me-2"></i> APPLY NOW / OMA SASA
                                        </a>
                                    </div>
                                </div>

                                <!-- Requirements/Results Column -->
                                <div class="col-lg-6 animate__animated animate__fadeInRight">
                                    <h4 class="fw-bold text-dark mb-4 text-uppercase small border-start border-4 border-warning ps-3">Mahitaji na Matokeo / Requirements & Results</h4>
                                    <div class="requirements-list">
                                        <div class="table-responsive">
                                            <table class="table table-hover border-light shadow-sm" style="border-radius: 15px; overflow: hidden; background: #f8fafc;">
                                                <thead class="bg-dark text-white">
                                                    <tr class="small">
                                                        <th class="py-3 px-4">Kipengele / Item</th>
                                                        <th class="py-3 px-4">Maelezo / Details</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($admissionRequirements as $req)
                                                    <tr>
                                                        <td class="fw-bold text-dark px-4 py-3 small">{{ $req->title }}</td>
                                                        <td class="text-muted px-4 py-3 small">{{ $req->requirement }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                        <div class="card border-0 shadow-sm p-4 mt-4 bg-light" style="border-radius: 20px; border-left: 5px solid var(--primary-blue) !important;">
                                            <h6 class="fw-bold text-dark mb-2"><i class="bi bi-info-circle-fill text-primary me-2"></i> Muhimu / Important</h6>
                                            <p class="text-muted small mb-0">Hakikisha unakamilisha maombi yako mapema. Nafasi ni chache kulingana na vigezo vya shule.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                            @if($page->slug == 'help-desk')
                            <!-- Help Desk Specific Section -->
                            <div class="accordion accordion-flush" id="faqAccordion">
                                @forelse($faqs as $faq)
                                <div class="accordion-item border-0 mb-3 shadow-sm rounded-4 overflow-hidden">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fw-bold text-dark py-3 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq-{{ $faq->id }}">
                                            <i class="bi bi-question-circle text-primary me-3"></i> {{ $faq->question }}
                                        </button>
                                    </h2>
                                    <div id="faq-{{ $faq->id }}" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body text-muted px-4 py-3 bg-white">
                                            {{ $faq->answer }}
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="text-center py-5 text-muted">
                                    <i class="bi bi-headset display-4 mb-3"></i>
                                    <p>No FAQs available at the moment. Please contact us for support.</p>
                                </div>
                                @endforelse
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .bg-primary-light { background-color: rgba(0, 51, 102, 0.08); }
        .rounded-4 { border-radius: 1.25rem !important; }
        .tracking-wider { letter-spacing: 0.1rem; }
        .transition-hover { transition: all 0.3s ease; }
        .transition-hover:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important; }
        .accordion-button:not(.collapsed) { background-color: #f8f9fa; color: var(--primary-blue); }
        .accordion-button:focus { box-shadow: none; }
    </style>
@endsection
