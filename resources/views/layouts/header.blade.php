<div class="top-bar d-none d-lg-flex justify-content-between align-items-center px-4 py-2" style="background-color: #002244;">
    <div class="top-bar-left">
        <a href="{{ route('news') }}" class="me-4 text-white text-decoration-none small fw-bold hover-warning {{ Request::is('news') ? 'text-warning' : '' }}">NEWS & UPDATES</a>
        <a href="{{ route('feedback') }}" class="me-4 text-white text-decoration-none small fw-bold hover-warning {{ Request::is('feedback') ? 'text-warning' : '' }}">FEEDBACK</a>
        <a href="{{ route('help-desk') }}" class="text-white text-decoration-none small fw-bold hover-warning {{ Request::is('help-desk') ? 'text-warning' : '' }}">HELP DESK</a>
    </div>
    <div class="top-bar-right d-flex align-items-center">
        <div class="search-box position-relative">
            <input type="text" placeholder="Search..." class="form-control form-control-sm bg-white-10 border-0 text-white rounded-pill px-3 py-1" style="width: 200px;">
            <i class="bi bi-search position-absolute end-0 top-50 translate-middle-y me-3 text-white-50"></i>
        </div>
    </div>
</div>

<header class="main-header py-4 bg-white border-bottom shadow-sm">
    <div class="container">
        <div class="d-flex align-items-center justify-content-center">
            <!-- Logo -->
            <div class="me-4">
                <img src="{{ asset('cropped-cropped-school_emblem-1-removebg-preview.png') }}" alt="School Logo" class="school-logo-lg" style="height: 90px; width: auto;">
            </div>
            
            <!-- Centered Text -->
            <div class="text-center">
                <p class="mb-1 text-muted small fw-bold tracking-widest text-uppercase">The United Republic of Tanzania</p>
                <h1 class="mb-1 fw-extrabold school-name-main" style="color: #003366; font-size: 2.5rem; letter-spacing: -1px; line-height: 1;">FRANSALIAN SCHOOL BOMBAMBILI</h1>
                <p class="mb-0 text-secondary fw-bold fs-5">Primary Day School - Gongo la Mboto</p>
            </div>
        </div>
    </div>
</header>

<nav class="main-nav sticky-top shadow-sm" style="background-color: #004488;">
    <div class="container d-flex justify-content-between align-items-center">
        <ul class="nav">
            <li class="nav-item"><a href="{{ route('welcome') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">HOME</a></li>
            <li class="nav-item"><a href="{{ route('msfs') }}" class="nav-link {{ Request::is('msfs') ? 'active' : '' }}">MSFS</a></li>
            <li class="nav-item"><a href="{{ route('mission') }}" class="nav-link {{ Request::is('mission') ? 'active' : '' }}">MISSION</a></li>
            <li class="nav-item"><a href="{{ route('vision') }}" class="nav-link {{ Request::is('vision') ? 'active' : '' }}">VISION</a></li>
            <li class="nav-item"><a href="{{ route('admission') }}" class="nav-link {{ Request::is('admission') ? 'active' : '' }}">ADMISSION</a></li>
            <li class="nav-item"><a href="{{ route('fees') }}" class="nav-link {{ Request::is('fees') ? 'active' : '' }}">FEES</a></li>
            <li class="nav-item"><a href="{{ route('portal') }}" class="nav-link {{ Request::is('portal') ? 'active' : '' }}">PARENTS' PORTAL</a></li>
            <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link {{ Request::is('contact') ? 'active' : '' }}">CONTACT US</a></li>
        </ul>
        <div class="auth-buttons ms-auto">
            @guest
                <a href="{{ route('login') }}" class="btn btn-danger btn-sm fw-bold px-4 rounded">LOGIN</a>
            @else
                <div class="d-flex align-items-center">
                    <a href="{{ url('/home') }}" class="btn btn-danger btn-sm fw-bold px-4 rounded me-2">DASHBOARD</a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-outline-light btn-sm fw-bold px-3 rounded">LOGOUT</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                </div>
            @endguest
        </div>
    </div>
</nav>

<style>
    :root {
        --primary-blue: #003366;
        --secondary-blue: #004488;
        --dark-blue: #002244;
    }

    .bg-white-10 { background-color: rgba(255,255,255,0.1); }
    .tracking-widest { letter-spacing: 0.2rem; }
    
    .hover-warning:hover { color: #ffc107 !important; }

    .main-nav .nav-link {
        color: white !important;
        font-weight: 700;
        font-size: 0.85rem;
        padding: 15px 12px;
        transition: all 0.2s ease-in-out;
        border-bottom: 3px solid transparent;
    }

    .main-nav .nav-link:hover, 
    .main-nav .nav-link.active {
        background-color: rgba(255, 255, 255, 0.1);
        color: #ffc107 !important;
        border-bottom: 3px solid #ffc107;
    }
    
    @media (max-width: 992px) {
        .school-name-main { font-size: 1.8rem !important; }
        .main-nav .nav-link { padding: 10px 8px; font-size: 0.75rem; }
    }

    @media (max-width: 768px) {
        .school-name-main { font-size: 1.4rem !important; }
        .school-logo-lg { height: 60px !important; }
        .main-nav .container { flex-direction: column; }
    }
</style>
