<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('meta_title', 'Fransalian School | Pre & Primary School - Dar es Salaam')</title>
    <meta name="description" content="@yield('meta_description', 'Fransalian School Bombambili, Dar es Salaam - A Pre & Primary English Medium School rooted in MSFS values. Knowledge, Love, Service. Admissions open for 2026-27.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Fransalian School, Dar es Salaam, primary school, pre school, English medium, MSFS, Catholic school, admission, Bombambili, Gongo la Mboto')">
    <meta name="author" content="Fransalian School">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="@yield('canonical_url', url()->current())">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('logo.png') }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:title" content="@yield('og_title', 'Fransalian School | Pre & Primary School - Dar es Salaam')">
    <meta property="og:description" content="@yield('og_description', 'Fransalian School Bombambili, Dar es Salaam - A Pre & Primary English Medium School rooted in MSFS values. Knowledge, Love, Service.')">
    <meta property="og:image" content="@yield('og_image', asset('images/jengofarasaian.png'))">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Fransalian School">
    <meta property="og:locale" content="en_TZ">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', 'Fransalian School | Pre & Primary School - Dar es Salaam')">
    <meta name="twitter:description" content="@yield('og_description', 'Fransalian School Bombambili, Dar es Salaam - A Pre & Primary English Medium School rooted in MSFS values.')">
    <meta name="twitter:image" content="@yield('og_image', asset('images/jengofarasaian.png'))">

    <!-- Schema.org -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "School",
        "name": "Fransalian School",
        "description": "Pre & Primary English Medium School rooted in MSFS values. Knowledge, Love, Service.",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('logo.png') }}",
        "image": "{{ asset('images/jengofarasaian.png') }}",
        "telephone": "+255749770703",
        "email": "info@fransalian.ac.tz",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Bombambili, Gongo la Mboto",
            "addressLocality": "Dar es Salaam",
            "addressCountry": "TZ"
        }
    }
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Scripts -->
    @if(app()->environment('production'))
        <link rel="stylesheet" href="{{ asset('build/assets/app-070655a4.css') }}">
        <script src="{{ asset('build/assets/app-8d1dc501.js') }}" defer></script>
    @else
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @endif
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- Custom Styles -->
    <style>
        body, html {
            margin: 0;
            padding: 0;
        }
        :root {
            --primary-blue: #003366;
            --secondary-blue: #0056b3;
            --light-bg: #f4f7f6;
            --accent-blue: #e7f1ff;
        }

        body {
            background-color: var(--light-bg);
            font-family: 'Nunito', sans-serif;
        }

        .auth-card {
            border: none;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            display: flex;
            flex-direction: row;
            min-height: 500px;
            max-width: 900px;
            width: 95%;
            margin: auto;
            background: white;
        }

        .auth-sidebar {
            background-color: var(--primary-blue);
            color: white;
            padding: 40px;
            width: 55%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .auth-form-container {
            background-color: #f8f9fa;
            padding: 40px 30px;
            width: 45%;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .auth-sidebar h1 {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 20px;
            text-transform: uppercase;
            line-height: 1.1;
            letter-spacing: -1px;
        }

        .auth-sidebar .divider {
            width: 60px;
            height: 4px;
            background-color: white;
            margin-bottom: 30px;
        }

        .auth-sidebar p {
            font-size: 1.1rem;
            opacity: 0.85;
            margin-bottom: 20px;
            line-height: 1.5;
        }

        .auth-sidebar .quote {
            font-style: italic;
            border-left: 4px solid rgba(255,255,255,0.4);
            padding-left: 15px;
            font-size: 1rem;
            margin-top: 30px;
        }

        .school-logo {
            width: 85px;
            height: auto;
            margin-bottom: 10px;
            filter: drop-shadow(0 4px 6px rgba(0,0,0,0.1));
        }

        .auth-form-header {
            text-align: center;
            margin-bottom: 25px;
        }

        .auth-form-header h2 {
            font-weight: 800;
            color: var(--primary-blue);
            font-size: 1.6rem;
            margin-top: 8px;
        }

        .form-control {
            background-color: #ffffff;
            border: 1.5px solid #e0e6ed;
            padding: 10px 15px;
            border-radius: 8px;
            margin-bottom: 15px;
            font-size: 0.9rem;
            transition: all 0.2s;
        }

        .form-control:focus {
            background-color: #ffffff;
            box-shadow: 0 0 0 4px rgba(0, 51, 102, 0.1);
            border-color: var(--primary-blue);
        }

        .btn-auth {
            background-color: var(--primary-blue);
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-weight: 700;
            width: 100%;
            margin-top: 10px;
            letter-spacing: 1px;
            transition: all 0.3s;
            box-shadow: 0 4px 12px rgba(0, 51, 102, 0.2);
            font-size: 0.9rem;
        }

        .btn-auth:hover {
            background-color: var(--secondary-blue);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(0, 51, 102, 0.3);
        }

        .btn-back {
            position: absolute;
            top: 15px;
            right: 15px;
            padding: 6px 15px;
            border-radius: 30px;
            font-size: 0.7rem;
            text-decoration: none !important;
            color: var(--primary-blue);
            background: #eef2f7;
            font-weight: 700;
            transition: all 0.2s;
        }

        .btn-back:hover {
            background: #e2e8f0;
            transform: translateX(-2px);
        }

        .auth-links {
            text-align: center;
            margin-top: 15px;
            font-size: 0.85rem;
        }

        .auth-links a {
            color: var(--primary-blue);
            text-decoration: none;
            font-weight: 700;
        }

        .footer-text {
            text-align: center;
            font-size: 0.75rem;
            color: #888;
            margin-top: 30px;
        }

        @media (max-width: 768px) {
            .display-3 { font-size: 1.8rem !important; }
            .display-4 { font-size: 1.5rem !important; }
            .display-5 { font-size: 1.3rem !important; }
            .lead { font-size: 0.95rem !important; }
            section.py-5 { padding-top: 2rem !important; padding-bottom: 2rem !important; }
            .container.py-5 { padding-top: 1.5rem !important; padding-bottom: 1.5rem !important; }
            .container.py-4 { padding-top: 1rem !important; padding-bottom: 1rem !important; }
        }

        @media (max-width: 576px) {
            .display-3 { font-size: 1.4rem !important; }
            .display-4 { font-size: 1.2rem !important; }
            .display-5 { font-size: 1.1rem !important; }
            .lead { font-size: 0.85rem !important; }
            section.py-5 { padding-top: 1.5rem !important; padding-bottom: 1.5rem !important; }
            .container.py-5 { padding-top: 1rem !important; padding-bottom: 1rem !important; }
            .card-body.p-4 { padding: 1rem !important; }
            .card-body.p-5 { padding: 1.25rem !important; }
            .p-4 { padding: 1rem !important; }
            .p-5 { padding: 1.25rem !important; }
            .btn-lg { font-size: 0.9rem !important; padding: 0.5rem 1.5rem !important; }
            .rounded-pill { border-radius: 50rem !important; }
            .shadow-lg { box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1) !important; }
        }

        @media (max-width: 992px) {
            .auth-card {
                max-width: 800px;
            }
        }

        @media (max-width: 768px) {
            .auth-card {
                flex-direction: column;
                min-height: auto;
                max-width: 450px;
                margin: 20px auto;
            }
            .auth-sidebar, .auth-form-container {
                width: 100%;
                padding: 30px 20px;
            }
            .auth-sidebar {
                text-align: center;
                align-items: center;
            }
            .auth-sidebar .divider {
                margin-left: auto;
                margin-right: auto;
            }
            .auth-sidebar .quote {
                border-left: none;
                border-top: 2px solid rgba(255,255,255,0.2);
                padding-left: 0;
                padding-top: 15px;
                margin-top: 20px;
            }
            .auth-sidebar h1 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <div id="app">
        @auth
        @if(Request::is('admin*'))
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Fransalian') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ route('welcome') }}">Website</a></li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @endif
        @endauth

        <main class="{{ (Request::is('login', 'register', 'password/*', 'home')) ? '' : '' }}">
            @yield('content')
        </main>

        @include('layouts.footer')
    </div>
</body>
</html>
