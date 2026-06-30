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

            <div class="row g-4 justify-content-center">
                <!-- St. Francis de Sales -->
                <div class="col-lg-6 animate__animated animate__fadeInUp">
                    <div class="card border-0 shadow-lg h-100 overflow-hidden" style="border-radius: 30px; background: #fff;">
                        <div class="row g-0 h-100">
                            <div class="col-md-5">
                                <div class="h-100" style="min-height: 300px; background: #f8f9fa;">
                                    <img src="{{ asset('images/St.-Francis-de-Sales4-768x1024.jpg') }}" alt="St. Francis de Sales" class="w-100 h-100" style="object-fit: cover;">
                                </div>
                            </div>
                            <div class="col-md-7 p-4 d-flex flex-column">
                                <div class="mb-auto">
                                    <span class="badge bg-primary mb-2">Heavenly Patron</span>
                                    <h4 class="fw-bold mb-1" style="color: #003366;">St. Francis de Sales</h4>
                                    <p class="text-warning fw-bold small mb-3">(1567 – 1622)</p>
                                    <p class="text-muted small" style="line-height: 1.7;">This school is dedicated to its heavenly patron St Francis de Sales (1567-1622). He was born on 21 August 1567 into a senatorial family in France where he was destined to work in government positions of authority. Instead, he felt called to become a priest in the Catholic Church. Within a few years of priestly ordination, Francis de Sales became the Bishop of Geneva, and became noted for his deep faith and his gentle approach to the Protestant Reformation at that time.</p>
                                    <p class="text-muted small" style="line-height: 1.7;">Through his missionary efforts, he won back hundreds of Protestant Christians to the Catholic fold. He authored two well-known theological classics: <em>Introduction to the Devout Life</em> and <em>Treatise on the Love of God</em>. As a Doctor of the Church, Francis de Sales is famous for his teachings on the Catholic doctrine. He is also known as the Gentleman Saint. He died on 28 December 1622, aged 55 years. He was canonized as a Saint in 1665.</p>
                                </div>
                                <div class="mt-4 p-3 rounded-4" style="background: linear-gradient(135deg, #f8fbff 0%, #eef4ff 100%); border-left: 4px solid #003366;">
                                    <i class="bi bi-quote fs-3 text-primary opacity-25 mb-2 d-block"></i>
                                    <p class="fst-italic text-dark mb-0 fw-bold">"You can catch more flies with a spoonful of honey than with a barrel of vinegar"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fr. Peter Marie Mermier -->
                <div class="col-lg-6 animate__animated animate__fadeInUp animate__delay-1s">
                    <div class="card border-0 shadow-lg h-100 overflow-hidden" style="border-radius: 30px; background: #fff;">
                        <div class="row g-0 h-100">
                            <div class="col-md-5">
                                <div class="h-100" style="min-height: 300px; background: #f8f9fa;">
                                    <img src="{{ asset('images/fr-peter-mermier.webp') }}" alt="Fr. Peter Marie Mermier" class="w-100 h-100" style="object-fit: cover;">
                                </div>
                            </div>
                            <div class="col-md-7 p-4 d-flex flex-column">
                                <div class="mb-auto">
                                    <span class="badge bg-warning text-dark mb-2">Founder of MSFS</span>
                                    <h4 class="fw-bold mb-1" style="color: #003366;">Fr. Peter Marie Mermier</h4>
                                    <p class="text-warning fw-bold small mb-3">Founder of the MSFS Congregation</p>
                                    <p class="text-muted small" style="line-height: 1.7;">Fr Peter Marie Mermier, the founder of the Congregation of the Missionaries of St Francis de Sales, was born in Annecy, France, in 1790. He entered the seminary in Annecy, and was ordained priest in 1813. He died in 1862, and Pope John Paul II raised him to the status of Servant of God.</p>
                                    <p class="text-muted small" style="line-height: 1.7;">Fr Mermier was interested in starting a congregation for preaching missions abroad. With the support of a few fellow-priests, he founded the MSFS Congregation which received canonical approval in 1838. For Fr Mermier, the Salesian spirituality was all-embracing and pastorally effective. The invitation of Pope Gregory XVI to extend missionary activities to the Church in Asia and Africa was the answer for Mermier’s prayer and longing. The MSFS today work in 26 countries, starting with India in 1845 and ending with Poland in 2003.</p>
                                </div>
                                <div class="mt-4 p-3 rounded-4" style="background: linear-gradient(135deg, #fffdf5 0%, #fff8e1 100%); border-left: 4px solid #ffc107;">
                                    <i class="bi bi-quote fs-3 text-warning opacity-25 mb-2 d-block"></i>
                                    <p class="fst-italic text-dark mb-0 fw-bold">"Education of the heart is the heart of education."</p>
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
    </style>
@endsection
