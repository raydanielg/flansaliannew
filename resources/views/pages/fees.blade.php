@extends('layouts.app')

@section('meta_title', 'School Fees | Fransalian School')
@section('meta_description', 'Fransalian School fees structure - transparent and affordable while maintaining the highest standards of education and facilities.')
@section('og_title', 'School Fees | Fransalian School')
@section('og_description', 'Fransalian School fees structure - transparent and affordable quality education.')

@section('content')
    @include('layouts.header')

    <!-- Hero Banner -->
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
                    <span class="text-warning small fw-bold">Fees 2026</span>
                </div>
                <h1 class="display-3 fw-bold text-white mb-3" style="text-shadow: 0 4px 20px rgba(0,0,0,0.3);">Mchanganuo wa Ada — Mwaka 2026</h1>
                <p class="text-white-50 mb-0">Fee Structure for Academic Year 2026</p>
                <div class="mx-auto mt-3" style="width: 80px; height: 4px; background: linear-gradient(90deg, #ffd700, #ffed4a); border-radius: 2px;"></div>
            </div>
        </div>
    </section>
    <div style="height: 5px; background: linear-gradient(90deg, #ffd700, #ffed4a, #ffd700);"></div>

    <!-- Fee Tables -->
    <div class="container py-5 animate__animated animate__fadeIn">

        <!-- Table 1: Main Fee Breakdown -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-11">
                <div class="card border-0 shadow-lg overflow-hidden" style="border-radius: 24px;">
                    <div class="card-header text-white py-4 px-4" style="background: linear-gradient(135deg, #003366, #004080); border: none;">
                        <div class="d-flex align-items-center gap-3">
                            <div class="bg-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 50px; height: 50px;">
                                <i class="bi bi-table fs-4" style="color: #003366;"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold mb-0">Mchanganuo wa Ada na Michango Mingine</h4>
                                <p class="mb-0 text-white-50 small">Fee Breakdown and Other Contributions — 2026</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered mb-0 align-middle" style="border-color: #e9ecef;">
                                <thead style="background: linear-gradient(135deg, #003366, #0056b3);">
                                    <tr class="text-center text-white small text-uppercase">
                                        <th class="py-3 fw-bold">Daraja</th>
                                        <th class="py-3 fw-bold">Ada</th>
                                        <th class="py-3 fw-bold">Chakula</th>
                                        <th class="py-3 fw-bold">Vitabu na Vifaa</th>
                                        <th class="py-3 fw-bold">Gharama Zingine</th>
                                        <th class="py-3 fw-bold" style="background: #002244;">Mtihani wa Nje</th>
                                        <th class="py-3 fw-bold" style="background: #ffd700; color: #001a33 !important;">Jumla</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td class="fw-bold text-dark">Pre-P 1</td>
                                        <td>390,000</td>
                                        <td>375,000</td>
                                        <td>295,000</td>
                                        <td>85,000</td>
                                        <td class="text-muted">0</td>
                                        <td class="fw-bold" style="background: rgba(255,215,0,0.1); color: #003366;">1,145,000</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td class="fw-bold text-dark">Pre-P 2</td>
                                        <td>390,000</td>
                                        <td>375,000</td>
                                        <td>315,000</td>
                                        <td>100,000</td>
                                        <td class="text-muted">0</td>
                                        <td class="fw-bold" style="background: rgba(255,215,0,0.1); color: #003366;">1,180,000</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td class="fw-bold text-dark">Std I</td>
                                        <td>450,000</td>
                                        <td>375,000</td>
                                        <td>350,000</td>
                                        <td>85,000</td>
                                        <td class="text-muted">0</td>
                                        <td class="fw-bold" style="background: rgba(255,215,0,0.1); color: #003366;">1,260,000</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td class="fw-bold text-dark">Std II</td>
                                        <td>450,000</td>
                                        <td>375,000</td>
                                        <td>350,000</td>
                                        <td>85,000</td>
                                        <td>25,000</td>
                                        <td class="fw-bold" style="background: rgba(255,215,0,0.1); color: #003366;">1,285,000</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td class="fw-bold text-dark">Std III</td>
                                        <td>450,000</td>
                                        <td>375,000</td>
                                        <td>350,000</td>
                                        <td>85,000</td>
                                        <td class="text-muted">0</td>
                                        <td class="fw-bold" style="background: rgba(255,215,0,0.1); color: #003366;">1,260,000</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td class="fw-bold text-dark">Std IV</td>
                                        <td>500,000</td>
                                        <td>375,000</td>
                                        <td>355,000</td>
                                        <td>85,000</td>
                                        <td>30,000</td>
                                        <td class="fw-bold" style="background: rgba(255,215,0,0.1); color: #003366;">1,345,000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer bg-light py-2 px-4 border-0">
                        <p class="text-muted small mb-0"><i class="bi bi-info-circle me-1 text-primary"></i> Thamani zote zilizoonyeshwa zipo kwa Tsh (TZS). Ada ya usafiri inalipwa kando.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table 2: Fee Installment Schedule -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-11">
                <div class="card border-0 shadow-lg overflow-hidden" style="border-radius: 24px;">
                    <div class="card-header text-white py-4 px-4" style="background: linear-gradient(135deg, #003366, #004080); border: none;">
                        <div class="d-flex align-items-center gap-3">
                            <div class="bg-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 50px; height: 50px;">
                                <i class="bi bi-calendar-check fs-4" style="color: #003366;"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold mb-0">Ada Inaweza Kulipwa kwa Awamu Nne (4) kwa Mwaka</h4>
                                <p class="mb-0 text-white-50 small">Tuition Fee — Four Installment Payment Plan</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered mb-0 align-middle" style="border-color: #e9ecef;">
                                <thead style="background: linear-gradient(135deg, #003366, #0056b3);">
                                    <tr class="text-center text-white small text-uppercase">
                                        <th class="py-3 fw-bold">Mwezi / Deadline</th>
                                        <th class="py-3 fw-bold">Pre-P 1</th>
                                        <th class="py-3 fw-bold">Pre-P 2</th>
                                        <th class="py-3 fw-bold">Std I</th>
                                        <th class="py-3 fw-bold">Std II</th>
                                        <th class="py-3 fw-bold">Std III</th>
                                        <th class="py-3 fw-bold">Std IV</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td class="fw-bold text-dark text-start ps-4">
                                            <i class="bi bi-calendar-event text-primary me-2"></i>Kabla ya Jan. 01
                                        </td>
                                        <td class="fw-semibold">550,000</td>
                                        <td class="fw-semibold">575,000</td>
                                        <td class="fw-semibold">600,000</td>
                                        <td class="fw-semibold">600,000</td>
                                        <td class="fw-semibold">600,000</td>
                                        <td class="fw-semibold">650,000</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td class="fw-bold text-dark text-start ps-4">
                                            <i class="bi bi-calendar-event text-primary me-2"></i>Kabla ya Apr. 01
                                        </td>
                                        <td class="fw-semibold">200,000</td>
                                        <td class="fw-semibold">200,000</td>
                                        <td class="fw-semibold">245,000</td>
                                        <td class="fw-semibold">245,000</td>
                                        <td class="fw-semibold">245,000</td>
                                        <td class="fw-semibold">245,000</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td class="fw-bold text-dark text-start ps-4">
                                            <i class="bi bi-calendar-event text-primary me-2"></i>Kabla ya Jul. 01
                                        </td>
                                        <td class="fw-semibold">200,000</td>
                                        <td class="fw-semibold">205,000</td>
                                        <td class="fw-semibold">215,000</td>
                                        <td class="fw-semibold">220,000</td>
                                        <td class="fw-semibold">215,000</td>
                                        <td class="fw-semibold">230,000</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td class="fw-bold text-dark text-start ps-4">
                                            <i class="bi bi-calendar-event text-primary me-2"></i>Kabla ya Okt. 01
                                        </td>
                                        <td class="fw-semibold">195,000</td>
                                        <td class="fw-semibold">200,000</td>
                                        <td class="fw-semibold">200,000</td>
                                        <td class="fw-semibold">220,000</td>
                                        <td class="fw-semibold">200,000</td>
                                        <td class="fw-semibold">220,000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer bg-light py-2 px-4 border-0">
                        <p class="text-muted small mb-0"><i class="bi bi-info-circle me-1 text-primary"></i> Ada inaweza kulipwa kwa sehemu nne (4) kufikia tarehe zilizoonyeshwa.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table 3: Transport Fee -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-11">
                <div class="card border-0 shadow-lg overflow-hidden" style="border-radius: 24px;">
                    <div class="card-header text-white py-4 px-4" style="background: linear-gradient(135deg, #003366, #004080); border: none;">
                        <div class="d-flex align-items-center gap-3">
                            <div class="bg-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 50px; height: 50px;">
                                <i class="bi bi-bus-front fs-4" style="color: #003366;"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold mb-0">Ada ya Usafiri — Inaweza Kulipwa kwa Awamu Nne (4) kwa Mwaka</h4>
                                <p class="mb-0 text-white-50 small">Transport Fee — Four Installment Payment Plan</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered mb-0 align-middle" style="border-color: #e9ecef;">
                                <thead style="background: linear-gradient(135deg, #003366, #0056b3);">
                                    <tr class="text-center text-white small text-uppercase">
                                        <th class="py-3 fw-bold">Umbali (KM)</th>
                                        <th class="py-3 fw-bold" style="background: #002244;">Gharama ya Mwaka</th>
                                        <th class="py-3 fw-bold">Kabla ya Jan. 01</th>
                                        <th class="py-3 fw-bold">Kabla ya Apr. 01</th>
                                        <th class="py-3 fw-bold">Kabla ya Jul. 01</th>
                                        <th class="py-3 fw-bold">Kabla ya Okt. 01</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td class="fw-bold text-dark">
                                            <i class="bi bi-geo-alt text-primary me-1"></i>0 – 5 Km
                                        </td>
                                        <td class="fw-bold" style="background: rgba(0,51,102,0.05); color: #003366;">650,000</td>
                                        <td>162,500</td>
                                        <td>162,500</td>
                                        <td>162,500</td>
                                        <td>162,500</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td class="fw-bold text-dark">
                                            <i class="bi bi-geo-alt text-primary me-1"></i>5 – 25 Km
                                        </td>
                                        <td class="fw-bold" style="background: rgba(0,51,102,0.05); color: #003366;">700,000</td>
                                        <td>175,000</td>
                                        <td>175,000</td>
                                        <td>175,000</td>
                                        <td>175,000</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td class="fw-bold text-dark">
                                            <i class="bi bi-geo-alt text-primary me-1"></i>25 – 30 Km
                                        </td>
                                        <td class="fw-bold" style="background: rgba(0,51,102,0.05); color: #003366;">800,000</td>
                                        <td>200,000</td>
                                        <td>200,000</td>
                                        <td>200,000</td>
                                        <td>200,000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer bg-light py-2 px-4 border-0">
                        <p class="text-muted small mb-0"><i class="bi bi-info-circle me-1 text-primary"></i> Ada ya usafiri inategemea umbali wa makazi yako na shule.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Info Cards -->
        <div class="row justify-content-center g-4 mb-4">
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100 rounded-4 p-4 text-center" style="border-top: 4px solid #003366;">
                    <div class="bg-primary-light rounded-circle d-inline-flex align-items-center justify-content-center mx-auto mb-3" style="width: 60px; height: 60px;">
                        <i class="bi bi-cash-coin fs-3" style="color: #003366;"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-2">Malipo kwa Awamu</h6>
                    <p class="text-muted small mb-0">Ada inaweza kulipwa kwa sehemu nne (4) kufikia tarehe zilizoonyeshwa kwenye jedwali.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100 rounded-4 p-4 text-center" style="border-top: 4px solid #ffd700;">
                    <div class="rounded-circle d-inline-flex align-items-center justify-content-center mx-auto mb-3" style="width: 60px; height: 60px; background: rgba(255,215,0,0.15);">
                        <i class="bi bi-bus-front fs-3" style="color: #b8860b;"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-2">Usafiri wa Shule</h6>
                    <p class="text-muted small mb-0">Ada ya usafiri inalipwa kando na inategemea umbali wa makazi yako hadi shule.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100 rounded-4 p-4 text-center" style="border-top: 4px solid #28a745;">
                    <div class="rounded-circle d-inline-flex align-items-center justify-content-center mx-auto mb-3" style="width: 60px; height: 60px; background: rgba(40,167,69,0.12);">
                        <i class="bi bi-telephone-fill fs-3" style="color: #28a745;"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-2">Wasiliana Nasi</h6>
                    <p class="text-muted small mb-0">Kwa maswali zaidi kuhusu ada, wasiliana nasi: 0761 391 936 / 0784 377 306 / 0686 695 311</p>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="text-center p-5 rounded-4 shadow-sm" style="background: linear-gradient(135deg, #003366, #004080);">
                    <h4 class="text-white fw-bold mb-3">Admission 2026 Inaendelea</h4>
                    <p class="text-white-50 mb-4">Pre-Primary 1 & 2, Standard 1 – 4. Karibu uunge mkono familia ya Fransalian!</p>
                    <a href="{{ asset('APPLICATION AND ADMISSION FORM.pdf') }}" download class="btn btn-lg px-5 py-3 rounded-pill fw-bold shadow-lg" style="background: linear-gradient(135deg, #ffd700, #ffed4a); color: #001a33; border: none;">
                        <i class="bi bi-download me-2"></i> Pakua Fomu / Download Form
                    </a>
                </div>
            </div>
        </div>
    </div>

    <style>
        .bg-primary-light { background-color: rgba(0, 51, 102, 0.08); }
        .table > :not(caption) > * > * { padding: 0.85rem 0.5rem; }
        .card-header { border-radius: 0 !important; }
        @media (max-width: 768px) {
            .table > :not(caption) > * > * { padding: 0.6rem 0.4rem; font-size: 0.8rem; }
        }
    </style>
@endsection
