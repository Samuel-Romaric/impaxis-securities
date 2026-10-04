<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'Impaxis') }}</title>

    <!-- Fonts -->
    <link rel="icon" type="image/x-icon" href="{{ asset('front/assets/logo/favicon-impaxis-securities.ico') }}">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap-5.0.2/css/bootstrap.min.css') }}">
    <link href="{{ asset('/front/assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet" />
    
    <style>
        :root {
            --impaxis-blue: #19479a;
            --impaxis-orange: #f59b00;
            --impaxis-ink: #090909;
            --impaxis-border: #d9d9d9;
            --impaxis-text: #686464;
        }

        body {
            color: var(--impaxis-ink);
            font-family: Helvetica, Arial, sans-serif;
            /* font-family: "Montserrat", Arial, Helvetica, sans-serif; */
            /* color: var(--impaxis-text); */
            font-size: 16px;
            font-weight: 200;
            line-height: 1.5;
        }

        /* Header Styles begin */
        .topbar {
            min-height: 42px;
            background: var(--impaxis-ink);
        }

        .language-switcher > button, select {
            text-transform: none;
            background: #090909;
            border: none;
            color: white;
        }

        .language-switcher > button, select:focus {
            text-transform: none;
            background: #090909;
            border: 1px solid #090909;
            color: white;
        }

        .language-switcher > button, select:hover{
            cursor: pointer;
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
            border: 1.5px solid #ffffff;
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

        .mainnav .activeContactRoute {
            background: #fff;
            color: #123878 !important;
            border: 1.5px solid #123878;
        }

        .logo {
            max-height: 100%;
            max-width: 150px;
        }

        /* Market Ticker Styles begin */
        .market-ticker {
            overflow: hidden;
            min-height: 40px;
            background: var(--impaxis-ink);
            color: #fff;
        }

        .market-ticker__track {
            display: flex;
            width: max-content;
            min-height: 40px;
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
            font-size: 12px;
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
    @include('layouts.front.partials._header')

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

    @include('layouts.front.partials._footer')

    <script src="{{ asset('front/css/bootstrap-5.0.2/js/bootstrap.bundle.min.js') }}"></script>
    @stack('scripts')
    <script src="{{ asset('front/js/jquery-4.js') }}"></script>
</body>
</html>
