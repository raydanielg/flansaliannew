@extends('layouts.app')

@section('meta_title', 'Apply Online | Fransalian School')
@section('meta_description', 'Apply online for admission to Fransalian School Bombambili, Dar es Salaam. English Medium Pre & Primary School. Admissions open for 2027.')
@section('og_title', 'Apply Online | Fransalian School')
@section('og_description', 'Apply online for admission to Fransalian School Bombambili, Dar es Salaam.')

@section('content')
    @include('layouts.header')

    <!-- Page Header -->
    <section class="page-header py-5 text-white" style="background: linear-gradient(rgba(0, 51, 102, 0.8), rgba(0, 51, 102, 0.8)), url('https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'); background-size: cover; background-position: center; border-bottom: 5px solid #ffd700;">
        <div class="container text-center animate__animated animate__fadeIn">
            <h1 class="display-4 fw-bold mb-0 text-uppercase tracking-wider">Online Application</h1>
            <p class="lead mt-3">Maombi ya Kujiunga na Shule Mtandaoni</p>
        </div>
    </section>

    <div class="container py-5 animate__animated animate__fadeIn">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card border-0 shadow-lg" style="border-radius: 30px; overflow: hidden;">
                    <div class="row g-0">
                        <div class="col-lg-4 bg-primary text-white p-5 d-flex flex-column justify-content-center" style="background-color: var(--primary-blue) !important;">
                            <h3 class="fw-bold mb-4">Maelekezo / Instructions</h3>
                            <ul class="list-unstyled">
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill me-2 text-warning"></i>
                                    <span>Jaza taarifa zote kwa usahihi.</span>
                                </li>
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill me-2 text-warning"></i>
                                    <span>Hakikisha namba ya simu inapatikana.</span>
                                </li>
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill me-2 text-warning"></i>
                                    <span>Tutakuwasiliana kwa ajili ya usaili.</span>
                                </li>
                            </ul>
                            <div class="mt-4 p-3 bg-white-10 rounded">
                                <p class="small mb-0 italic">"Join us in nurturing excellence."</p>
                            </div>
                        </div>
                        <div class="col-lg-8 p-5">
                            <form action="{{ route('apply.store') }}" method="POST">
                                @csrf
                                <h5 class="fw-bold mb-4 border-bottom pb-2 text-primary">Student Information / Taarifa za Mwanafunzi</h5>
                                <div class="row g-3 mb-4">
                                    <div class="col-md-12">
                                        <label class="form-label small fw-bold">FULL NAME / JINA KAMILI</label>
                                        <input type="text" name="student_name" class="form-control rounded-3" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label small fw-bold">DATE OF BIRTH / TAREHE YA KUZALIWA</label>
                                        <input type="date" name="date_of_birth" class="form-control rounded-3" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label small fw-bold">GENDER / JINSIA</label>
                                        <select name="gender" class="form-select rounded-3" required>
                                            <option value="">Select...</option>
                                            <option value="Male">Male / Mvulana</option>
                                            <option value="Female">Female / Msichana</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label small fw-bold">APPLYING FOR LEVEL / DARASA ANALOOMBA</label>
                                        <select name="applying_for_level" class="form-select rounded-3" required>
                                            <option value="">Select Level...</option>
                                            <option value="Pre-Primary I">Pre-Primary I</option>
                                            <option value="Pre-Primary II">Pre-Primary II</option>
                                            <option value="Std 1">Standard 1</option>
                                        </select>
                                    </div>
                                </div>

                                <h5 class="fw-bold mb-4 border-bottom pb-2 text-primary">Parent/Guardian Information / Taarifa za Mzazi</h5>
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <label class="form-label small fw-bold">PARENT NAME / JINA LA MZAZI</label>
                                        <input type="text" name="parent_name" class="form-control rounded-3" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label small fw-bold">PHONE NUMBER / NAMBA YA SIMU</label>
                                        <input type="text" name="parent_phone" class="form-control rounded-3" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label small fw-bold">EMAIL ADDRESS / BARUA PEPE</label>
                                        <input type="email" name="parent_email" class="form-control rounded-3" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label small fw-bold">RESIDENTIAL ADDRESS / MAKAZI</label>
                                        <textarea name="address" class="form-control rounded-3" rows="3" required></textarea>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-warning btn-lg w-100 rounded-pill fw-bold shadow">SUBMIT APPLICATION / TUMA MAOMBI</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
