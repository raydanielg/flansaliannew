@extends('layouts.app')

@section('content')
    @include('layouts.header')

    <!-- Powerful Page Header -->
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
                                <i class="bi bi-people-fill display-3" style="color: var(--primary-blue) !important;"></i>
                            </div>
                            <h4 class="fw-bold text-dark mb-2 text-uppercase small tracking-widest">MSFS</h4>
                            <div class="divider bg-warning mx-auto mb-4" style="width: 40px; height: 3px;"></div>
                            <p class="text-muted small italic">"Nurturing the heart, educating the mind."</p>
                        </div>

                        <!-- Main Content Area -->
                        <div class="col-lg-9 p-5">
                            <div class="content-header mb-4 pb-3 border-bottom">
                                <h3 class="fw-bold text-dark mb-0" style="color: var(--primary-blue) !important;">Ownership & Management</h3>
                            </div>
                            
                            <div class="page-body-content">
                                <p class="lead text-muted mb-5">{{ $page->content }}</p>
                                
                                <div class="info-item mb-4 animate__animated animate__fadeInUp">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="icon-small bg-primary-light rounded-circle me-3">
                                            <i class="bi bi-patch-check-fill text-primary"></i>
                                        </div>
                                        <h5 class="fw-bold mb-0 text-dark">Our Heritage</h5>
                                    </div>
                                    <p class="text-muted ps-5">Founded in 1838 in Annecy, France by Father Peter Marie Mermier, the society was established to rejuvenate the faith through missions and education.</p>
                                </div>

                                <div class="info-item mb-4 animate__animated animate__fadeInUp animate__delay-1s">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="icon-small bg-primary-light rounded-circle me-3">
                                            <i class="bi bi-gem text-primary"></i>
                                        </div>
                                        <h5 class="fw-bold mb-0 text-dark">Our Philosophy</h5>
                                    </div>
                                    <p class="text-muted ps-5">Following the spirit of St. Francis de Sales, we emphasize "Gentleness, Optimism, and Humility" in our educational approach.</p>
                                </div>

                                <div class="info-item animate__animated animate__fadeInUp animate__delay-2s">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="icon-small bg-primary-light rounded-circle me-3">
                                            <i class="bi bi-heart-pulse-fill text-primary"></i>
                                        </div>
                                        <h5 class="fw-bold mb-0 text-dark">Our Global Impact</h5>
                                    </div>
                                    <p class="text-muted ps-5">Fransalians operate in over 30 countries, running prestigious schools, colleges, and social centers dedicated to human development.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MSFS Leaders Section -->
    <section class="py-5 bg-light overflow-hidden">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h6 class="text-primary fw-bold text-uppercase tracking-widest mb-3">Inspirational Figures</h6>
                <h2 class="display-5 fw-bold text-dark">Leaders of the <span class="text-primary">MSFS Legacy</span></h2>
                <p class="text-muted mt-3 mx-auto" style="max-width: 700px;">Meet the visionary saints and founders whose spirit guides our mission and education.</p>
            </div>

            <!-- Animated Quotes Banner -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10">
                    <div class="card border-0 shadow-lg overflow-hidden text-center p-4 p-lg-5" style="border-radius: 30px; background: linear-gradient(135deg, #003366 0%, #004080 100%);">
                        <i class="bi bi-quote fs-1 text-warning mb-3 d-block"></i>
                        <p class="text-white fst-italic mb-0" style="font-size: 1.5rem; line-height: 1.6; min-height: 80px;">
                            <span id="typewriter-quote"></span><span class="typewriter-cursor">|</span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card border-0 shadow-lg overflow-hidden" style="border-radius: 30px; background: #fff;">
                        <!-- Tabs Header -->
                        <div class="card-header bg-white border-0 p-0">
                            <ul class="nav nav-tabs msfs-tabs flex-nowrap justify-content-center p-3 gap-2" id="msfsTab" role="tablist" style="border-bottom: 2px solid #eef4ff;">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active msfs-tab-btn" id="patron-tab" data-bs-toggle="tab" data-bs-target="#patron-content" type="button" role="tab">
                                        <i class="bi bi-stars me-2"></i>Heavenly Patron
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link msfs-tab-btn" id="congregation-tab" data-bs-toggle="tab" data-bs-target="#congregation-content" type="button" role="tab">
                                        <i class="bi bi-globe me-2"></i>MSFS Congregation
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link msfs-tab-btn" id="founder-tab" data-bs-toggle="tab" data-bs-target="#founder-content" type="button" role="tab">
                                        <i class="bi bi-person-raised-hand me-2"></i>MSFS Founder
                                    </button>
                                </li>
                            </ul>
                        </div>

                        <!-- Tabs Content -->
                        <div class="tab-content p-4 p-lg-5">
                            <!-- Tab 1: Heavenly Patron -->
                            <div class="tab-pane fade show active" id="patron-content" role="tabpanel">
                                <div class="row g-5 align-items-center">
                                    <div class="col-lg-5">
                                        <div class="position-relative rounded-4 overflow-hidden shadow" style="max-width: 360px; margin: 0 auto;">
                                            <img src="{{ asset('images/St.-Francis-de-Sales4-768x1024.jpg') }}" alt="St. Francis de Sales" class="w-100" style="object-fit: cover; aspect-ratio: 3/4;">
                                            <div class="position-absolute bottom-0 start-0 end-0 p-3 text-white" style="background: linear-gradient(transparent, rgba(0,26,51,0.85));">
                                                <span class="badge bg-primary">Heavenly Patron</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <h3 class="fw-bold mb-1" style="color: #003366;">St. Francis de Sales</h3>
                                        <p class="text-warning fw-bold mb-4">(1567 – 1622)</p>
                                        <p class="text-muted" style="line-height: 1.8;">This school is dedicated to its heavenly patron <strong>St Francis de Sales (1567-1622)</strong>. He was born on 21 August 1567 into a senatorial family in France where he was destined to work in government positions of authority. Instead, he felt called to become a priest in the Catholic Church. Within a few years of priestly ordination, Francis de Sales became the Bishop of Geneva, and became noted for his deep faith and his gentle approach to the Protestant Reformation at that time.</p>
                                        <p class="text-muted" style="line-height: 1.8;">Through his missionary efforts, he won back hundreds of Protestant Christians to the Catholic fold. He authored two well-known theological classics: <em>Introduction to the Devout Life</em> and <em>Treatise on the Love of God</em>. As a Doctor of the Church, Francis de Sales is famous for his teachings on the Catholic doctrine. He is also known as the Gentleman Saint. He died on 28 December 1622, aged 55 years. He was canonized as a Saint in 1665.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab 2: MSFS Congregation -->
                            <div class="tab-pane fade" id="congregation-content" role="tabpanel">
                                <div class="row g-5 align-items-center">
                                    <div class="col-lg-5">
                                        <div class="row g-3">
                                            <div class="col-6">
                                                <div class="text-center p-4 rounded-4 bg-white shadow-sm border h-100">
                                                    <div class="display-5 fw-bold text-primary mb-1">32+</div>
                                                    <div class="small text-muted fw-bold text-uppercase">Countries</div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-center p-4 rounded-4 bg-white shadow-sm border h-100">
                                                    <div class="display-5 fw-bold text-warning mb-1">1000+</div>
                                                    <div class="small text-muted fw-bold text-uppercase">Member Priests</div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-center p-4 rounded-4 bg-white shadow-sm border h-100">
                                                    <div class="display-5 fw-bold text-success mb-1">12+</div>
                                                    <div class="small text-muted fw-bold text-uppercase">Provinces Worldwide</div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-center p-4 rounded-4 bg-white shadow-sm border h-100">
                                                    <div class="display-5 fw-bold text-info mb-1">150+</div>
                                                    <div class="small text-muted fw-bold text-uppercase">Institutions Worldwide</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <h3 class="fw-bold mb-3" style="color: #003366;">Missionaries of St Francis de Sales</h3>
                                        <p class="text-muted" style="line-height: 1.8;">The Missionaries of St Francis de Sales (MSFS), also known as the Fransalians, was founded in Annecy, France, on <strong>24 October 1838</strong>, by Fr Mermier, under the patronage of St Francis de Sales. Fr Mermier’s idea was to bring about a spiritual renewal of his people by preaching parish missions. This special apostolate, in turn, gave rise to a community of preachers gathered around Fr Mermier.</p>
                                        <p class="text-muted" style="line-height: 1.8;">The MSFS was founded in response to a desire of St Francis de Sales to found a society of missionary priests. Nearly two centuries after the Saint’s death, his successor in the See of Annecy broached the subject of such a society to Fr Mermier who had been considering the same idea.</p>
                                        <p class="text-muted" style="line-height: 1.8;">Accordingly, Fr Mermier put the design into execution. In 1830, the institute was formed with La Feuillette as the site for the mother-house. It was blessed by the bishop in August 1837, and the congregation canonically instituted by him on 08 October 1838. In 1845, his offer was accepted by the Congregation for the Evangelization of Peoples, and the first missionaries set out for India. The first batch of the MSFS landed in Pondicherry in September 1845, and they reached Visakhapatnam on 19 February 1846.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab 3: MSFS Founder -->
                            <div class="tab-pane fade" id="founder-content" role="tabpanel">
                                <div class="row g-5 align-items-center">
                                    <div class="col-lg-5">
                                        <div class="position-relative rounded-4 overflow-hidden shadow" style="max-width: 360px; margin: 0 auto;">
                                            <img src="{{ asset('images/fr-peter-mermier.webp') }}" alt="Fr. Peter Marie Mermier" class="w-100" style="object-fit: cover; aspect-ratio: 3/4;">
                                            <div class="position-absolute bottom-0 start-0 end-0 p-3 text-white" style="background: linear-gradient(transparent, rgba(0,26,51,0.85));">
                                                <span class="badge bg-warning text-dark">Founder of MSFS</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <h3 class="fw-bold mb-1" style="color: #003366;">Fr. Peter Marie Mermier</h3>
                                        <p class="text-warning fw-bold mb-4">Founder of the MSFS Congregation</p>
                                        <p class="text-muted" style="line-height: 1.8;">Fr Peter Marie Mermier, the founder of the Congregation of the Missionaries of St Francis de Sales, was born in Annecy, France, in <strong>1790</strong>. He entered the seminary in Annecy, and was ordained priest in 1813. He died in 1862, and Pope John Paul II raised him to the status of Servant of God.</p>
                                        <p class="text-muted" style="line-height: 1.8;">Fr Mermier was interested in starting a congregation for preaching missions abroad. With the support of a few fellow-priests, he founded the MSFS Congregation which received canonical approval in 1838. For Fr Mermier, the Salesian spirituality was all-embracing and pastorally effective. Mermier felt proud of his native saint, SFS. He wanted the members of his congregation to be contemplatives in action and mystics of God’s love.</p>
                                        <p class="text-muted" style="line-height: 1.8;">The invitation of Pope Gregory XVI to extend missionary activities to the Church in Asia and Africa was the answer for Mermier’s prayer and longing. The congregation was invited to take up pastoral activities in the Apostolic Vicariate of Visakhapatnam in 1846. The MSFS today work in 26 countries, starting with India in 1845 and ending with Poland in 2003.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .bg-primary-light { background-color: rgba(0, 51, 102, 0.08); }
        .icon-small { width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; }
        .tracking-wider { letter-spacing: 0.1rem; }
        .msfs-tab-btn {
            border: 2px solid transparent !important;
            border-radius: 50px !important;
            padding: 12px 24px !important;
            font-weight: 700;
            color: #6c757d !important;
            background: #f8f9fa !important;
            transition: all 0.3s ease;
        }
        .msfs-tab-btn:hover {
            color: #003366 !important;
            background: #eef4ff !important;
        }
        .msfs-tab-btn.active {
            color: #fff !important;
            background: #003366 !important;
            border-color: #003366 !important;
            box-shadow: 0 4px 15px rgba(0, 51, 102, 0.3);
        }
        .msfs-tabs {
            border: none !important;
        }
        .msfs-tabs .nav-link {
            margin-bottom: 0 !important;
        }
        .typewriter-cursor {
            animation: blink 1s infinite;
            color: #ffc107;
            font-weight: 100;
        }
        @keyframes blink {
            0%, 50% { opacity: 1; }
            51%, 100% { opacity: 0; }
        }
    </style>

    <script>
        (function() {
            const quotes = [
                "You can catch more flies with a spoonful of honey than with a barrel of vinegar — St. Francis de Sales",
                "Education of the heart is the heart of education. — Fr. Peter Marie Mermier"
            ];
            const element = document.getElementById('typewriter-quote');
            let quoteIndex = 0;
            let charIndex = 0;
            let isDeleting = false;
            let typingSpeed = 80;

            function typeWriter() {
                const currentQuote = quotes[quoteIndex];
                if (isDeleting) {
                    element.textContent = currentQuote.substring(0, charIndex - 1);
                    charIndex--;
                    typingSpeed = 40;
                } else {
                    element.textContent = currentQuote.substring(0, charIndex + 1);
                    charIndex++;
                    typingSpeed = 80;
                }

                if (!isDeleting && charIndex === currentQuote.length) {
                    isDeleting = true;
                    typingSpeed = 2500;
                } else if (isDeleting && charIndex === 0) {
                    isDeleting = false;
                    quoteIndex = (quoteIndex + 1) % quotes.length;
                    typingSpeed = 500;
                }

                setTimeout(typeWriter, typingSpeed);
            }

            if (element) {
                typeWriter();
            }
        })();
    </script>
@endsection
