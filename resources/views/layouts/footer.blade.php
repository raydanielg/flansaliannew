<footer class="bg-dark text-white py-5 mt-auto">
    <div class="container">
        <div class="row g-4">
            <!-- Brand & Logo -->
            <div class="col-lg-4 col-md-6">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('cropped-cropped-school_emblem-1-removebg-preview.png') }}" 
                         alt="School Logo" 
                         class="img-fluid me-3" 
                         style="max-height: 70px; filter: brightness(0) invert(1);">
                    <h5 class="mb-0 fw-bold text-uppercase tracking-wider">FRANSALIAN</h5>
                </div>
                <p class="text-secondary small pe-lg-4">
                    Tunatoa elimu bora na malezi ya kiroho kwa vijana wetu. Jiunge nasi katika safari ya maarifa na mafanikio.
                </p>
                <div class="social-links d-flex gap-3 mt-4">
                    <a href="#" class="text-secondary hover-white transition-all"><i class="bi bi-facebook fs-5"></i></a>
                    <a href="#" class="text-secondary hover-white transition-all"><i class="bi bi-twitter-x fs-5"></i></a>
                    <a href="#" class="text-secondary hover-white transition-all"><i class="bi bi-instagram fs-5"></i></a>
                    <a href="#" class="text-secondary hover-white transition-all"><i class="bi bi-youtube fs-5"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6">
                <h6 class="text-white fw-bold mb-4 text-uppercase small">Viungo Muhimu</h6>
                <ul class="list-unstyled footer-links">
                    <li class="mb-2"><a href="{{ url('/') }}" class="text-secondary text-decoration-none small hover-white">Nyumbani</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary text-decoration-none small hover-white">Kuhusu Sisi</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary text-decoration-none small hover-white">Taarifa</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary text-decoration-none small hover-white">Wasiliana Nasi</a></li>
                </ul>
            </div>

            <!-- Services/Programs -->
            <div class="col-lg-3 col-md-6">
                <h6 class="text-white fw-bold mb-4 text-uppercase small">Huduma Zetu</h6>
                <ul class="list-unstyled footer-links">
                    <li class="mb-2"><a href="#" class="text-secondary text-decoration-none small hover-white">Elimu ya Msingi</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary text-decoration-none small hover-white">Sekondari</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary text-decoration-none small hover-white">Malezi ya Kiroho</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary text-decoration-none small hover-white">Michezo na Sanaa</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-3 col-md-6">
                <h6 class="text-white fw-bold mb-4 text-uppercase small">Wasiliana Nasi</h6>
                <div class="d-flex mb-3">
                    <i class="bi bi-geo-alt text-primary me-3"></i>
                    <p class="text-secondary small mb-0">S.L.P 123, Dar es Salaam, Tanzania</p>
                </div>
                <div class="d-flex mb-3">
                    <i class="bi bi-telephone text-primary me-3"></i>
                    <p class="text-secondary small mb-0">+255 123 456 789</p>
                </div>
                <div class="d-flex mb-3">
                    <i class="bi bi-envelope text-primary me-3"></i>
                    <p class="text-secondary small mb-0">info@fransalian.ac.tz</p>
                </div>
            </div>
        </div>

        <hr class="my-5 border-secondary opacity-25">

        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <p class="text-secondary small mb-0">
                    &copy; {{ date('Y') }} Fransalian. Haki zote zimehifadhiwa.
                </p>
            </div>
            <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="#" class="text-secondary text-decoration-none small hover-white">Vigezo na Masharti</a></li>
                    <li class="list-inline-item ms-3"><a href="#" class="text-secondary text-decoration-none small hover-white">Sera ya Faragha</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<style>
    .hover-white:hover {
        color: white !important;
        transition: color 0.2s ease-in-out;
    }
    .transition-all {
        transition: all 0.2s ease-in-out;
    }
    .tracking-wider {
        letter-spacing: 0.1em;
    }
    footer {
        border-top: 1px solid rgba(255,255,255,0.05);
    }
</style>
