<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap-5.0.2/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('front/css/fontawesome-free-7/css/all.min.css') }}"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('front/assets/logo/favicon-impaxis-securities.ico') }}">

    <style>
        :root {
            --impaxis-blue: #19479a;
            --impaxis-orange: #f59b00;
            --impaxis-ink: #090909;
            --impaxis-border: #d9d9d9;
        }

        body {
            color: var(--impaxis-ink);
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Header Styles begin */
        .topbar {
            min-height: 42px;
            background: var(--impaxis-ink);
        }

        .topbar-link {
            display: inline-flex;
            align-items: center;
            min-height: 42px;
            padding: 0 15px;
            color: #fff;
            font-size: 16px;
            text-decoration: none;
        }

        .topbar-link:hover,
        .topbar-link:focus {
            color: #fff;
        }

        .topbar-link--client {
            background: var(--impaxis-orange);
        }

        .topbar-link--login {
            min-height: 36px;
            margin: 3px 0;
            border: 1px solid #fff;
            padding: 0 14px;
        }

        .mainnav {
            min-height: 84px;
            border-bottom: 1px solid var(--impaxis-border);
            background: #fff;
        }

        .brand {
            display: inline-flex;
            align-items: center;
            color: var(--impaxis-blue);
            font-size: 27px;
            font-weight: 700;
            letter-spacing: 3px;
            line-height: 1;
            text-decoration: none;
        }

        .brand-mark {
            display: inline-grid;
            width: 39px;
            height: 39px;
            margin-left: 7px;
            place-items: center;
            border: 3px solid #aeb9c8;
            border-radius: 50%;
            color: var(--impaxis-blue);
            font-size: 19px;
            letter-spacing: 0;
            transform: rotate(-16deg);
        }

        .mainnav .navbar-nav {
            gap: 24px;
        }

        .mainnav .nav-link {
            padding: 10px 0;
            color: var(--impaxis-ink);
            font-size: 16px;
            white-space: nowrap;
        }

        .mainnav .nav-link:hover,
        .mainnav .nav-link:focus,
        .mainnav .nav-link.active {
            color: var(--impaxis-orange) !important;
        }

        .mainnav .nav-link--contact {
            padding: 8px 35px !important;
            background: var(--impaxis-blue);
            color: #fff !important;
        }

        .mainnav .nav-link--contact:hover,
        .mainnav .nav-link--contact:focus {
            background: #123878;
            color: #fff;
        }

        .logo {
            max-height: 100%;
            max-width: 150px;
        }

        /* Market Ticker Styles begin */
        .market-ticker {
            overflow: hidden;
            min-height: 62px;
            background: var(--impaxis-ink);
            color: #fff;
        }

        .market-ticker__track {
            display: flex;
            width: max-content;
            min-height: 62px;
            align-items: center;
            animation: market-ticker-scroll 28s linear infinite;
        }

        .market-ticker:hover .market-ticker__track,
        .market-ticker:focus-within .market-ticker__track {
            animation-play-state: paused;
        }

        .market-ticker__group {
            display: flex;
            align-items: center;
        }

        .market-ticker__item {
            display: inline-flex;
            align-items: center;
            min-height: 22px;
            padding: 0 27px;
            border-right: 1px solid #fff;
            font-size: 13px;
            white-space: nowrap;
        }

        .market-ticker__symbol {
            font-weight: 700;
        }

        .market-ticker__change {
            margin-left: 3px;
        }

        .market-ticker__arrow {
            margin-left: 8px;
            color: #13a538;
            font-size: 18px;
            line-height: 1;
        }

        .market-ticker__arrow--down {
            color: #ef302e;
        }

        @keyframes market-ticker-scroll {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(-50%);
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .market-ticker__track {
                animation: none;
            }
        }
        /* Market Ticker Styles end */
        /* Header Styles end */

        /* Footer Styles begin */
        .site-footer {
            border-top: 3px solid #d7d7d7;
            background: var(--impaxis-ink);
            color: #fff;
        }

        .footer-main {
            padding: 52px 0 72px;
        }

        .footer-title {
            margin-bottom: 12px;
            color: #fff;
            font-size: 24px;
            font-weight: 400;
        }

        .footer-heading {
            margin-bottom: 14px;
            color: #fff;
            font-size: 23px;
            font-weight: 400;
        }

        .footer-copy {
            max-width: 330px;
            margin-bottom: 42px;
            color: #e4e4e4;
            font-size: 15px;
            line-height: 1.2;
        }

        .footer-newsletter-label {
            display: block;
            margin-bottom: 7px;
            color: #fff;
            font-size: 15px;
        }

        .footer-newsletter {
            display: flex;
            max-width: 378px;
        }

        .footer-newsletter .form-control {
            min-height: 44px;
            border: 1px solid #bdbdbd;
            border-radius: 0;
            background: transparent;
            color: #fff;
        }

        .footer-newsletter .form-control::placeholder {
            color: #bdbdbd;
        }

        .footer-newsletter .btn {
            min-width: 102px;
            border: 0;
            border-radius: 0;
            background: var(--impaxis-orange);
            color: #fff;
        }

        .footer-links {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .footer-links li + li {
            margin-top: 5px;
        }

        .footer-links a,
        .footer-legal a {
            color: #f2f2f2;
            font-size: 15px;
            text-decoration: none;
        }

        .footer-links a:hover,
        .footer-links a:focus,
        .footer-legal a:hover,
        .footer-legal a:focus {
            color: var(--impaxis-orange);
        }

        .footer-bottom {
            border-top: 1px solid #595959;
            padding: 26px 0 16px;
        }

        .footer-legal {
            color: #cfcfcf;
            font-size: 14px;
        }

        .footer-legal-separator {
            margin: 0 5px;
            color: #777;
        }

        .footer-social {
            display: flex;
            align-items: center;
            gap: 13px;
        }

        .footer-social a {
            display: inline-flex;
            width: 18px;
            height: 18px;
            align-items: center;
            justify-content: center;
            color: #d3d3d3;
            font-size: 13px;
            font-weight: 700;
            text-decoration: none;
        }

        .footer-social a:hover,
        .footer-social a:focus {
            color: var(--impaxis-orange);
        }
        /* Footer Styles end */

        @media (max-width: 767.98px) {
            .footer-main {
                padding: 38px 0 42px;
            }

            .footer-column + .footer-column {
                margin-top: 32px;
            }

            .footer-copy {
                margin-bottom: 28px;
            }

            .footer-bottom {
                padding-top: 20px;
            }

            .footer-social {
                margin-top: 18px;
            }
        }

        @media (max-width: 991.98px) {
            .mainnav .navbar-collapse {
                padding: 12px 0 18px;
            }

            .mainnav .navbar-nav {
                gap: 3px;
            }

            .mainnav .nav-link,
            .mainnav .nav-link--contact {
                padding: 10px 0;
            }
        }

        @media (max-width: 575.98px) {
            .topbar .container {
                padding: 0 12px;
            }

            .topbar-link {
                padding: 0 9px;
                font-size: 14px;
            }

            .brand {
                font-size: 22px;
            }
        }
    </style>
    @stack('style')
</head>
<body>
    <header>
        <div class="topbar">
            <div class="container d-flex justify-content-between align-items-center">
                <a class="topbar-link topbar-link--client" href="#">Devenir client</a>
                <div class="d-flex align-items-center gap-3">
                    <a class="topbar-link" href="#" aria-label="Choisir la langue">Français <span class="ms-1" aria-hidden="true">&#9662;</span></a>
                    <a class="topbar-link topbar-link--login" href="#">Accès client</a>
                </div>
            </div>
        </div>

        <nav class="mainnav navbar navbar-light navbar-expand-lg" aria-label="Navigation principale">
            <div class="container">
                <a class="brand navbar-brand m-0" href="{{ url('/') }}" aria-label="Impaxis Securities - Accueil">
                    <img class="img-fluid brand-img logo" src="{{ asset('front/assets/images/logo-impaxis.png') }}" alt="Impaxis Securities" srcset="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-navigation" aria-controls="main-navigation" aria-expanded="false" aria-label="Ouvrir le menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="main-navigation">
                    <ul class="navbar-nav align-items-lg-center"> 
                        <li class="nav-item"><a class="nav-link  {{ activeRoute('front.welcome') }}" aria-current="page" href="{{ url('/') }}">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link {{ activeRoute('front.notre-societe') }}" href="{{ route('front.notre-societe') }}">Notre Société</a></li>
                        <li class="nav-item"><a class="nav-link {{-- activeRoute('front.marches') --}}" href="javascript:void(0){{-- route('front.marches') --}}">Marchés</a></li>
                        <li class="nav-item"><a class="nav-link {{ activeRoute('front.actualites') }}" href="{{ route('front.actualites') }}">Actualités</a></li>
                        <li class="nav-item"><a class="nav-link {{ activeRoute('front.documentation') }}" href="{{ route('front.documentation') }}">Documentation</a></li>
                        <li class="nav-item"><a class="nav-link {{ activeRoute('front.faq') }}" href="{{ route('front.faq') }}">FAQ</a></li>
                        <li class="nav-item"><a class="nav-link nav-link--contact" href="{{ route('front.contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="market-ticker" aria-label="Cours des marchés">
        <div class="market-ticker__track">
            @foreach (range(1, 2) as $tickerGroup)
                <div class="market-ticker__group" aria-hidden="{{ $tickerGroup === 2 ? 'true' : 'false' }}">
                    <div class="market-ticker__item">
                        <span class="market-ticker__symbol">PRSC 1 675</span>
                        <span class="market-ticker__change">-6,94%</span>
                        <span class="market-ticker__arrow" aria-hidden="true">&#9650;</span>
                    </div>
                    <div class="market-ticker__item">
                        <span class="market-ticker__symbol">SICC 3 310</span>
                        <span class="market-ticker__change">-7,41%</span>
                        <span class="market-ticker__arrow market-ticker__arrow--down" aria-hidden="true">&#9660;</span>
                    </div>
                    <div class="market-ticker__item">
                        <span class="market-ticker__symbol">SICC 3 310</span>
                        <span class="market-ticker__change">-7,41%</span>
                        <span class="market-ticker__arrow" aria-hidden="true">&#9650;</span>
                    </div>
                    <div class="market-ticker__item">
                        <span class="market-ticker__symbol">SICC 3 310</span>
                        <span class="market-ticker__change">-7,41%</span>
                        <span class="market-ticker__arrow" aria-hidden="true">&#9650;</span>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <main class="">
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container footer-main">
            <div class="row">
                <div class="footer-column col-md-5 col-lg-5">
                    <h2 class="footer-title">Impaxis Securities</h2>
                    <p class="footer-copy">Impaxis Securities est une Société de Gestion et d’Intermédiation agréée par le CREPMF et membre de la BRVM depuis 2004.</p>
                    <form class="footer-newsletter-form" action="#" method="POST">
                        @csrf
                        <label class="footer-newsletter-label" for="footer-email">Abonnez-vous à notre newsletter</label>
                        <div class="footer-newsletter">
                            <input class="form-control" id="footer-email" name="email" type="email" placeholder="E-mail" aria-label="Votre adresse e-mail" required>
                            <button class="btn" type="submit">Envoyez</button>
                        </div>
                    </form>
                </div>

                <div class="footer-column col-md-3 col-lg-3">
                    <h2 class="footer-heading">Liens rapides</h2>
                    <ul class="footer-links">
                        <li><a href="{{ url('/') }}">Accueil</a></li>
                        <li><a href="{{ route('front.notre-societe') }}">Notre Société</a></li>
                        <li><a href="{{ route('front.services') }}">Services</a></li>
                        <li><a href="{{ route('front.marches') }}">Marchés</a></li>
                        <li><a href="{{ route('front.actualites') }}">Actualités</a></li>
                        <li><a href="{{ route('front.documentation') }}">Ressources</a></li>
                        <li><a href="{{ route('front.contact') }}">Contact</a></li>
                    </ul>
                </div>

                <div class="footer-column col-md-2 col-lg-2">
                    <h2 class="footer-heading">Accès rapide</h2>
                    <ul class="footer-links">
                        <li><a href="#devenir-client">Devenir client</a></li>
                        <li><a href="#acces-client">Accès client</a></li>
                        <li><a href="{{ route('front.faq') }}">FAQ</a></li>
                        <li><a href="#service-client">Service client</a></li>
                    </ul>
                </div>

                <div class="footer-column col-md-2 col-lg-2">
                    <h2 class="footer-heading">Liens utiles</h2>
                    <ul class="footer-links">
                        <li><a href="#brvm">BRVM</a></li>
                        <li><a href="#crepmf">CREPMF</a></li>
                        <li><a href="#bceao">BCEAO</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container d-flex flex-column flex-md-row align-items-md-center justify-content-between">
                <p class="footer-legal mb-0">© Impaxis Securities 2026. Tous droits réservés.</p>
                <p class="footer-legal mb-0 mt-2 mt-md-0">
                    <a href="#mentions-legales">Mentions légales</a><span class="footer-legal-separator">|</span><a href="#confidentialite">Politique de confidentialité</a>
                </p>
                <nav class="footer-social" aria-label="Réseaux sociaux">
                    <a href="#facebook" aria-label="Facebook">f</a>
                    <a href="#linkedin" aria-label="LinkedIn">in</a>
                    <a href="#instagram" aria-label="Instagram">ig</a>
                    <a href="#tiktok" aria-label="TikTok">t</a>
                </nav>
            </div>
        </div>
    </footer>

    <script src="{{ asset('front/css/bootstrap-5.0.2/js/bootstrap.bundle.min.js') }}"></script>
    @stack('scripts')
    <script src="{{ asset('front/js/jquery-4.js') }}"></script>
</body>
</html>
