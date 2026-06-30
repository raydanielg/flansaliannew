<footer class="bg-dark text-light py-5 mt-auto">
    <div class="container py-4">
        <div class="row g-4">
            <!-- Brand & Logo -->
            <div class="col-lg-3 col-md-6 pe-lg-4">
                <div class="d-flex align-items-center mb-4">
                    <img src="{{ asset('logo.png') }}" 
                         alt="School Logo" 
                         class="img-fluid me-3 bg-white rounded-circle p-2 shadow-sm" 
                         style="max-height: 85px;">
                    <div>
                        <h5 class="mb-0 fw-bold text-uppercase tracking-wider text-white">FRANSALIAN</h5>
                        <small class="text-secondary tracking-widest text-uppercase" style="font-size: 0.65rem;">School Bombambili</small>
                    </div>
                </div>
                <p class="text-secondary small mb-4" style="line-height: 1.8;">
                    We provide quality education and spiritual nurturing for our youth. Join us on a journey of knowledge, growth, and excellence for a brighter future.
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
                <h6 class="footer-title">Quick Links</h6>
                <ul class="list-unstyled footer-links">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('msfs') }}">MSFS</a></li>
                    <li><a href="{{ route('admission') }}">Admissions</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </div>

            <!-- Services/Programs -->
            <div class="col-lg-2 col-md-6">
                <h6 class="footer-title">Our Services</h6>
                <ul class="list-unstyled footer-links">
                    <li><a href="#">Primary Education</a></li>
                    <li><a href="#">Spiritual Nurturing</a></li>
                    <li><a href="#">Sports & Arts</a></li>
                    <li><a href="#">Academic Clubs</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-2 col-md-6">
                <h6 class="footer-title">Contact Info</h6>
                <div class="d-flex mb-3 align-items-start">
                    <i class="bi bi-geo-alt text-warning me-3 mt-1"></i>
                    <p class="text-secondary small mb-0">P.O. BOX 75652<br>Dar es Salaam</p>
                </div>
                <div class="d-flex mb-3 align-items-center">
                    <i class="bi bi-telephone text-warning me-3"></i>
                    <p class="text-secondary small mb-0">Mobile: +255 749 770 703</p>
                </div>
                <div class="d-flex mb-3 align-items-center">
                    <i class="bi bi-telephone text-warning me-3"></i>
                    <p class="text-secondary small mb-0">Mobile: +255 688 367 100</p>
                </div>
                <div class="d-flex mb-3 align-items-center">
                    <i class="bi bi-envelope text-warning me-3"></i>
                    <p class="text-secondary small mb-0">info@fransalian.ac.tz</p>
                </div>
            </div>

            <!-- Location Map -->
            <div class="col-lg-3 col-md-6">
                <h6 class="footer-title">Our Location</h6>
                <div class="rounded-3 overflow-hidden shadow-sm" style="border: 1px solid rgba(255,255,255,0.1);">
                    <iframe
                        src="https://maps.google.com/maps?q=Fransalian+School+Bombambili,+Dar+es+Salaam&t=&z=16&ie=UTF8&iwloc=&output=embed"
                        width="100%"
                        height="200"
                        style="border:0; filter: grayscale(0.2) contrast(1.1);"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <p class="text-secondary small mt-2 mb-0">
                    <i class="bi bi-pin-map-fill text-warning me-2"></i>Bombambili, Dar es Salaam
                </p>
            </div>
        </div>

        <hr class="my-5 border-secondary opacity-10">

        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <p class="text-secondary small mb-0">
                    &copy; {{ date('Y') }} <span class="text-white fw-bold">Fransalian School Bombambili</span>. All Rights Reserved.
                </p>
            </div>
            <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="#" class="text-secondary text-decoration-none small hover-warning">Terms & Conditions</a></li>
                    <li class="list-inline-item ms-3 text-secondary opacity-25">|</li>
                    <li class="list-inline-item ms-3"><a href="#" class="text-secondary text-decoration-none small hover-warning">Privacy Policy</a></li>
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
