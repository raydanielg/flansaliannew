<footer class="bg-dark text-light py-5 mt-auto">
    <div class="container py-4">
        <div class="row g-4">
            <!-- Brand & Logo -->
            <div class="col-lg-4 col-md-6 pe-lg-5">
                <div class="d-flex align-items-center mb-4">
                    <img src="{{ asset('logo.png') }}" 
                         alt="School Logo" 
                         class="img-fluid me-3" 
                         style="max-height: 65px; filter: brightness(0) invert(1);">
                    <div>
                        <h5 class="mb-0 fw-bold text-uppercase tracking-wider text-white">FRANSALIAN</h5>
                        <small class="text-secondary tracking-widest text-uppercase" style="font-size: 0.65rem;">School Bombambili</small>
                    </div>
                </div>
                <p class="text-secondary small mb-4" style="line-height: 1.8;">
                    Tunatoa elimu bora na malezi ya kiroho kwa vijana wetu. Jiunge nasi katika safari ya maarifa na mafanikio kwa mustakabali wa maisha yako.
                </p>
                <div class="social-links d-flex gap-3">
                    <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-youtube"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6">
                <h6 class="footer-title">Viungo Muhimu</h6>
                <ul class="list-unstyled footer-links">
                    <li><a href="{{ url('/') }}">Nyumbani</a></li>
                    <li><a href="{{ route('msfs') }}">MSFS</a></li>
                    <li><a href="{{ route('admission') }}">Taarifa za Udahili</a></li>
                    <li><a href="{{ route('contact') }}">Wasiliana Nasi</a></li>
                </ul>
            </div>

            <!-- Services/Programs -->
            <div class="col-lg-3 col-md-6">
                <h6 class="footer-title">Huduma Zetu</h6>
                <ul class="list-unstyled footer-links">
                    <li><a href="#">Elimu ya Msingi</a></li>
                    <li><a href="#">Malezi ya Kiroho</a></li>
                    <li><a href="#">Michezo na Sanaa</a></li>
                    <li><a href="#">Klabu za Kitaaluma</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-3 col-md-6">
                <h6 class="footer-title">Mawasiliano</h6>
                <div class="d-flex mb-3 align-items-start">
                    <i class="bi bi-geo-alt text-warning me-3 mt-1"></i>
                    <p class="text-secondary small mb-0">S.L.P 123, Gongo la Mboto,<br>Dar es Salaam, Tanzania</p>
                </div>
                <div class="d-flex mb-3 align-items-center">
                    <i class="bi bi-telephone text-warning me-3"></i>
                    <p class="text-secondary small mb-0">+255 123 456 789</p>
                </div>
                <div class="d-flex mb-3 align-items-center">
                    <i class="bi bi-envelope text-warning me-3"></i>
                    <p class="text-secondary small mb-0">info@fransalian.ac.tz</p>
                </div>
            </div>
        </div>

        <hr class="my-5 border-secondary opacity-10">

        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <p class="text-secondary small mb-0">
                    &copy; {{ date('Y') }} <span class="text-white fw-bold">Fransalian School Bombambili</span>. Haki zote zimehifadhiwa.
                </p>
            </div>
            <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="#" class="text-secondary text-decoration-none small hover-warning">Vigezo na Masharti</a></li>
                    <li class="list-inline-item ms-3 text-secondary opacity-25">|</li>
                    <li class="list-inline-item ms-3"><a href="#" class="text-secondary text-decoration-none small hover-warning">Sera ya Faragha</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<style>
    .footer-title {
        color: white;
        font-weight: 700;
        margin-bottom: 25px;
        text-transform: uppercase;
        font-size: 0.85rem;
        letter-spacing: 1px;
        position: relative;
    }
    .footer-title::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -8px;
        width: 30px;
        height: 2px;
        background-color: #ffc107;
    }
    .footer-links li {
        margin-bottom: 12px;
    }
    .footer-links li a {
        color: #adb5bd;
        text-decoration: none;
        font-size: 0.9rem;
        transition: all 0.3s ease;
    }
    .footer-links li a:hover {
        color: #ffc107;
        padding-left: 5px;
    }
    .social-icon {
        width: 38px;
        height: 38px;
        background-color: rgba(255, 255, 255, 0.05);
        color: #adb5bd;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        text-decoration: none;
        transition: all 0.3s ease;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }
    .social-icon:hover {
        background-color: #ffc107;
        color: #212529;
        transform: translateY(-3px);
        border-color: #ffc107;
    }
    .hover-warning:hover {
        color: #ffc107 !important;
    }
    .tracking-widest {
        letter-spacing: 0.15em;
    }
    footer {
        background-color: #111111 !important;
    }
</style>
