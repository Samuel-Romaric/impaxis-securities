@extends('layouts.front.guest')

@section('title', 'Accueil')

@push('style')
    <style>
        .welcome-hero {
            position: relative;
            display: flex;
            min-height: min(640px, calc(100vh - 188px));
            align-items: center;
            overflow: hidden;
            background-color: #10232d;
            background-image: linear-gradient(90deg, rgba(1, 13, 22, .88) 0%, rgba(1, 13, 22, .55) 47%, rgba(1, 13, 22, .12) 100%), url('{{ asset('front/assets/images/slide-1.png') }}');
            /* background-image: linear-gradient(90deg, rgba(1, 13, 22, .88) 0%, rgba(1, 13, 22, .55) 47%, rgba(1, 13, 22, .12) 100%), url('https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?auto=format&fit=crop&w=2400&q=85'); */
            background-position: center;
            background-size: cover;
        }

        .welcome-hero__content {
            position: relative;
            z-index: 1;
            width: 100%;
            margin: 0 auto;
            padding-top: 70px;
            padding-bottom: 82px;
        }

        .welcome-hero__title {
            max-width: 750px;
            margin: 0 0 38px;
            color: #fff;
            font-size: clamp(2.4rem, 4.2vw, 4.25rem);
            font-weight: 700;
            letter-spacing: 0;
            line-height: 1.22;
        }

        .welcome-hero__action {
            display: inline-flex;
            min-width: 270px;
            min-height: 54px;
            align-items: center;
            justify-content: center;
            padding: 13px 28px;
            background: var(--impaxis-orange);
            color: #fff;
            font-size: 16px;
            font-weight: 700;
            text-decoration: none;
            transition: background-color .2s ease, transform .2s ease;
        }

        .welcome-hero__action:hover,
        .welcome-hero__action:focus {
            background: #d98200;
            color: #fff;
            transform: translateY(-2px);
        }

        @media (max-width: 767.98px) {
            .welcome-hero {
                min-height: 560px;
                background-position: 61% center;
            }

            .welcome-hero__content {
                padding: 58px 20px 68px;
            }

            .welcome-hero__title {
                max-width: 580px;
                margin-bottom: 32px;
                font-size: clamp(2.2rem, 10vw, 3.5rem);
                line-height: 1.18;
            }

            .welcome-hero__action {
                width: 100%;
                max-width: 270px;
            }
        }

        .history-section {
            padding: 80px 0 114px;
            background: #fff;
        }

        .history-section__inner {
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
            gap: 76px;
            align-items: center;
        }

        .history-section__image {
            display: block;
            width: 100%;
            height: 95%;
            border-radius: 8px;
            aspect-ratio: 1 / 1;
            object-fit: cover;
            object-position: center;
        }

        .history-section__content {
            max-width: 530px;
        }

        .history-section__title {
            margin: 0 0 18px;
            color: var(--impaxis-ink);
            font-size: 32px;
            font-weight: 600;
            letter-spacing: 0;
            line-height: 1.2;
        }

        .history-section__intro,
        .history-section__list {
            margin: 0;
            font-size: 16px;
            line-height: 1.4;
        }

        .history-section__list {
            padding-left: 22px;
        }

        .history-section__list li {
            padding-left: 3px;
        }

        .history-section__list li + li {
            margin-top: 3px;
        }

        .history-section__action {
            display: inline-flex;
            min-width: 257px;
            min-height: 42px;
            align-items: center;
            justify-content: center;
            margin-top: 22px;
            padding: 10px 26px;
            background: var(--impaxis-orange);
            color: #fff;
            font-size: 16px;
            font-weight: 700;
            text-decoration: none;
            transition: background-color .2s ease, transform .2s ease;
        }

        .history-section__action:hover,
        .history-section__action:focus {
            background: #d98200;
            color: #fff;
            transform: translateY(-2px);
        }

        .app-section {
            padding: 72px 0 104px;
            background: #fff;
        }

        .app-section__inner {
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
            align-items: stretch;
        }

        .app-section__image {
            width: 100%;
            height: 100%;
            min-height: 486px;
            object-fit: cover;
            object-position: center;
        }

        .app-section__content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 48px 42px;
            background: var(--impaxis-blue);
            color: #fff;
        }

        .app-section__title {
            margin: 0 0 18px;
            color: #fff;
            font-size: 38px;
            font-weight: 600;
            line-height: 1.15;
        }

        .app-section__copy,
        .app-section__list {
            margin: 0;
            font-size: 16px;
            line-height: 1.25;
        }

        .app-section__list {
            margin: 2px 0 0;
            padding-left: 23px;
        }

        .app-section__action {
            display: inline-flex;
            width: fit-content;
            min-width: 275px;
            min-height: 44px;
            align-items: center;
            justify-content: center;
            margin-top: 42px;
            padding: 10px 24px;
            background: var(--impaxis-orange);
            color: #fff;
            font-size: 16px;
            font-weight: 700;
            text-decoration: none;
            transition: background-color .2s ease, transform .2s ease;
        }

        .app-section__action:hover,
        .app-section__action:focus {
            background: #d98200;
            color: #fff;
            transform: translateY(-2px);
        }

        .services-section {
            padding: 78px 0 84px;
            background: #f3f5f9;
        }

        .services-section__title {
            margin: 0 0 12px;
            color: var(--impaxis-ink);
            font-size: 32px;
            font-weight: 600;
            line-height: 1.2;
            text-align: center;
        }

        .services-section__intro {
            max-width: 620px;
            margin: 0 auto 38px;
            font-size: 16px;
            line-height: 1.4;
            text-align: center;
        }

        .service-card {
            min-height: 352px;
            border: 0;
            border-radius: 10px;
            background: #fff;
            color: var(--impaxis-ink);
            box-shadow: none;
            transition: transform .25s ease, box-shadow .25s ease;
            will-change: transform;
        }

        .service-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 24px rgba(9, 9, 9, .14);
        }

        .service-card--blue {
            background: var(--impaxis-blue);
            color: #fff;
        }

        .service-card__body {
            display: flex;
            flex-direction: column;
            height: 100%;
            padding: 18px 19px 20px;
        }

        .service-card__top {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            margin-bottom: 24px;
        }

        .service-card__image {
            width: 109px;
            height: 109px;
            border-radius: 5px;
            object-fit: cover;
            transition: transform .25s ease;
        }

        .service-card:hover .service-card__image {
            transform: scale(1.03);
        }

        .service-card__link {
            display: inline-flex;
            width: 40px;
            height: 40px;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--impaxis-blue);
            border-radius: 50%;
            color: var(--impaxis-blue);
            font-size: 27px;
            font-weight: 300;
            line-height: 1;
            text-decoration: none;
            transition: background-color .2s ease, color .2s ease, transform .2s ease;
        }

        .service-card--blue .service-card__link {
            border-color: #fff;
            background: #fff;
            color: var(--impaxis-blue);
        }

        .service-card__link:hover,
        .service-card__link:focus {
            background: var(--impaxis-blue);
            color: #fff;
            transform: translate(2px, -2px);
        }

        .service-card--blue .service-card__link:hover,
        .service-card--blue .service-card__link:focus {
            background: transparent;
            color: #fff;
        }

        .service-card__title {
            margin: 0 0 11px;
            color: inherit;
            font-size: 21px;
            font-weight: 500;
            line-height: 1.1;
        }

        .service-card__copy {
            margin: 0;
            color: inherit;
            font-size: 15px;
            line-height: 1.16;
        }

        .references-section {
            padding: 72px 0 82px;
            background: #f3f5f9;
        }

        .references-section__title {
            margin: 0 0 34px;
            color: var(--impaxis-ink);
            font-size: 32px;
            font-weight: 600;
            line-height: 1.2;
            text-align: center;
        }

        .reference-card {
            min-height: 238px;
            border: 1px solid #dce2eb;
            border-radius: 0;
            background: #fff;
            box-shadow: 0 5px 15px rgba(25, 71, 154, .06);
            transition: transform .25s ease, box-shadow .25s ease;
        }

        .reference-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 22px rgba(25, 71, 154, .14);
        }

        .reference-card__body {
            display: flex;
            height: 100%;
            flex-direction: column;
            padding: 13px 10px 12px;
        }

        .reference-card__logo {
            display: block;
            width: 100%;
            height: 62px;
            margin-bottom: 14px;
            object-fit: contain;
            object-position: left center;
        }

        .reference-card__amount {
            margin: 0 0 8px;
            color: #080808;
            font-size: 19px;
            font-weight: 700;
            line-height: 1.1;
        }

        .reference-card__operation {
            min-height: 34px;
            margin: 0;
            color: #080808;
            font-size: 13px;
            line-height: 1.15;
            text-transform: uppercase;
        }

        .reference-card__role {
            margin: 10px 0 0;
            color: #444;
            font-size: 16px;
            line-height: 1.15;
        }

        .reference-card__year {
            margin: auto 0 0;
            padding-top: 14px;
            color: var(--impaxis-blue);
            font-size: 14px;
            line-height: 1;
        }

        .news-section {
            padding: 76px 0 96px;
            background: #f3f5f9;
        }

        .news-section__title {
            margin: 0 0 54px;
            color: var(--impaxis-ink);
            font-size: 38px;
            font-weight: 600;
            line-height: 1.2;
            text-align: center;
        }

        .news-carousel {
            position: relative;
            padding: 0 74px;
        }

        .news-carousel .carousel-inner {
            padding: 0 0 8px;
        }

        .news-card {
            min-height: 416px;
            border: 1px solid #dce2eb;
            border-radius: 5px;
            background: #fff;
            box-shadow: 0 5px 15px rgba(25, 71, 154, .04);
            transition: transform .25s ease, box-shadow .25s ease;
        }

        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 22px rgba(25, 71, 154, .14);
        }

        .news-card__image {
            display: block;
            width: 100%;
            height: 210px;
            border-radius: 4px 4px 0 0;
            object-fit: cover;
        }

        .news-card__body {
            display: flex;
            min-height: 206px;
            flex-direction: column;
            padding: 16px 18px 20px;
        }

        .news-card__category {
            display: inline-flex;
            width: fit-content;
            min-width: 126px;
            min-height: 36px;
            align-items: center;
            justify-content: center;
            margin-bottom: 13px;
            padding: 7px 16px;
            border-radius: 4px;
            background: #edf1f7;
            color: #3862aa;
            font-size: 16px;
            line-height: 1;
        }

        .news-card__title {
            display: -webkit-box;
            overflow: hidden;
            margin: 0 0 20px;
            color: var(--impaxis-ink);
            font-size: 14px;
            font-weight: 700;
            line-height: 1.35;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
        }

        .news-card__action {
            display: flex;
            min-height: 38px;
            align-items: center;
            justify-content: center;
            margin-top: auto;
            border-radius: 4px;
            background: var(--impaxis-orange);
            color: #fff;
            font-size: 16px;
            font-weight: 700;
            text-decoration: none;
            transition: background-color .2s ease;
        }

        .news-card__action:hover,
        .news-card__action:focus {
            background: #d98200;
            color: #fff;
        }

        .news-carousel__control {
            position: absolute;
            top: 50%;
            display: inline-flex;
            width: 76px;
            height: 76px;
            align-items: center;
            justify-content: center;
            border: 0;
            border-radius: 50%;
            background: #dce5f3;
            color: var(--impaxis-ink);
            transform: translateY(-50%);
            opacity: 1;
        }

        .news-carousel__control:hover,
        .news-carousel__control:focus {
            background: #c7d6eb;
            opacity: 1;
        }

        .news-carousel__control--prev {
            left: 0;
        }

        .news-carousel__control--next {
            right: 0;
        }

        .news-carousel__icon {
            width: 22px;
            height: 22px;
            border-top: 4px solid currentColor;
            border-right: 4px solid currentColor;
        }

        .news-carousel__icon--prev {
            transform: rotate(-135deg) translate(-3px, -3px);
        }

        .news-carousel__icon--next {
            transform: rotate(45deg) translate(-3px, -3px);
        }

        @media (max-width: 767.98px) {
            .news-section {
                padding: 56px 0 72px;
            }

            .news-section__title {
                margin-bottom: 30px;
                font-size: 28px;
            }

            .news-carousel {
                padding: 0 42px;
            }

            .news-carousel__control {
                width: 42px;
                height: 42px;
            }

            .news-carousel__icon {
                width: 15px;
                height: 15px;
                border-width: 3px;
            }

            .news-card__image {
                height: 190px;
            }
        }

        @media (max-width: 767.98px) {
            .services-section {
                padding: 56px 0 64px;
            }

            .services-section__title {
                font-size: 28px;
            }

            .services-section__intro {
                margin-bottom: 28px;
            }

            .service-card {
                min-height: 0;
            }

            .references-section {
                padding: 56px 0 64px;
            }

            .references-section__title {
                font-size: 28px;
            }

            .reference-card {
                min-height: 238px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .service-card,
            .service-card__image,
            .service-card__link,
            .reference-card {
                transition: none;
            }

            .service-card:hover,
            .service-card:hover .service-card__image,
            .service-card__link:hover,
            .service-card__link:focus {
                transform: none;
            }

            .reference-card:hover {
                transform: none;
            }
        }

        @media (max-width: 767.98px) {
            .history-section {
                padding: 56px 0 72px;
            }

            .history-section__inner {
                grid-template-columns: 1fr;
                gap: 34px;
            }

            .history-section__content {
                max-width: none;
            }

            .history-section__title {
                font-size: 28px;
            }

            .history-section__action {
                width: 100%;
                max-width: 257px;
            }

            .app-section {
                padding: 56px 0 72px;
            }

            .app-section__inner {
                grid-template-columns: 1fr;
            }

            .app-section__image {
                min-height: 330px;
                max-height: 430px;
            }

            .app-section__content {
                padding: 38px 24px 42px;
            }

            .app-section__title {
                font-size: 30px;
            }

            .app-section__action {
                width: 100%;
                margin-top: 30px;
            }
        }
    </style>
@endpush

@section('content')
    <section class="welcome-hero" aria-labelledby="welcome-hero-title">
        <div class="container welcome-hero__content" style="padding-top: 120px; padding-bottom: 120px;">
            <h1 class="welcome-hero__title py-4" id="welcome-hero-title">
                Avec IMPAXIS SECURITIES,<br>
                investir en bourse n’a jamais<br>
                été aussi simple
            </h1>
            <a class="welcome-hero__action" href="#services">En savoir plus</a>
        </div>
    </section>

    <section class="history-section" id="societe" aria-labelledby="history-title">
        <div class="container history-section__inner">
            <img
                class="history-section__image"
                src="{{ asset('front/assets/images/notre-histoire.png') }}"
                alt="Vue aérienne d'un quartier d'affaires moderne"
                loading="lazy"
            >

            <div class="history-section__content">
                <h2 class="history-section__title" id="history-title">Notre Histoire</h2>
                <p class="history-section__intro">Le Groupe IMPAXIS c’est :</p>
                <ul class="history-section__list">
                    <li>L’histoire de banquiers africains provenant des meilleures banques internationales, corporate et marchés, de jeunes africaines et africains professionnels et audacieux</li>
                    <li>L’histoire d’une volonté d’apporter innovation aux meilleurs standards internationaux dans la finance en Afrique, particulièrement en Afrique de l’Ouest</li>
                    <li>L’histoire d’une volonté de bâtir une famille unie, pluridisciplinaire, entreprenante, agile, respectueuse de tous et qui impacte son industrie et son environnement</li>
                    <li>L’histoire d’une communauté unie et sympathique soucieuse de l’écoute méticuleuse du client et l’élaboration de produits financiers à forte valeur ajoutée taille sur mesure.</li>
                </ul>
                <a class="history-section__action" href="#services">En savoir plus</a>
            </div>
        </div>
    </section> 

    <section class="services-section" id="services" aria-labelledby="services-title">
        <div class="container">
            <h2 class="services-section__title" id="services-title">Nos Services</h2>
            <p class="services-section__intro">Impaxis Securities propose une gamme élargie de services financiers pour répondre aux besoins de sa clientèle :</p>

            <div class="row g-3">
                <div class="col-12 col-md-6 col-xl-3 d-flex">
                    <article class="card service-card w-100">
                        <div class="card-body service-card__body">
                            <div class="service-card__top">
                                <img class="service-card__image" src="{{ asset('front/assets/images/services/service-1-conseil.png') }}" alt="Réunion de professionnels" loading="lazy">
                                <a class="service-card__link" href="#contact" aria-label="Découvrir le conseil pour l’accès au marché financier">&#8599;</a>
                            </div>
                            <h3 class="service-card__title">Conseil pour l’accès au<br>marché financier</h3>
                            <p class="service-card__copy">Nous accompagnons les entreprises dans la mobilisation de ressources, l’introduction en bourse et la structuration financière, de l’analyse à la cotation sur le marché.</p>
                        </div>
                    </article>
                </div>

                <div class="col-12 col-md-6 col-xl-3 d-flex">
                    <article class="card service-card service-card--blue w-100">
                        <div class="card-body service-card__body">
                            <div class="service-card__top">
                                <img class="service-card__image" src="{{ asset('front/assets/images/services/service-2-recherche.png') }}" alt="Analyse de données financières" loading="lazy">
                                <a class="service-card__link" href="#contact" aria-label="Découvrir l’analyse et la recherche financière">&#8599;</a>
                            </div>
                            <h3 class="service-card__title">Analyse &amp; Recherche<br>Financière</h3>
                            <p class="service-card__copy">Impaxis Securities propose des analyses financières et recommandations d’investissement pour aider ses clients à mieux saisir les opportunités du marché, notamment sur la BRVM.</p>
                        </div>
                    </article>
                </div>

                <div class="col-12 col-md-6 col-xl-3 d-flex">
                    <article class="card service-card w-100">
                        <div class="card-body service-card__body">
                            <div class="service-card__top">
                                <img class="service-card__image" src="{{ asset('front/assets/images/services/service-3-conseil.png') }}" alt="Conseil entre professionnels" loading="lazy">
                                <a class="service-card__link" href="#contact" aria-label="Découvrir le conseil en placement">&#8599;</a>
                            </div>
                            <h3 class="service-card__title">Conseil en Placement</h3>
                            <p class="service-card__copy">Nous accompagnons nos clients dans la définition de stratégies d’investissement adaptées à leurs objectifs et à leur profil de risque.</p>
                        </div>
                    </article>
                </div>

                <div class="col-12 col-md-6 col-xl-3 d-flex">
                    <article class="card service-card service-card--blue w-100">
                        <div class="card-body service-card__body">
                            <div class="service-card__top">
                                <img class="service-card__image" src="{{ asset('front/assets/images/services/service-4-opcvm.png') }}" alt="Pièces et graphique financier" loading="lazy">
                                <a class="service-card__link" href="#contact" aria-label="Découvrir la mise en place d’OPCVM">&#8599;</a>
                            </div>
                            <h3 class="service-card__title">Mise en place<br>d’OPCVM</h3>
                            <p class="service-card__copy">Impaxis Securities accompagne ses clients dans la création et la gestion d’OPCVM (FCP et SICAV), ainsi que dans la conservation et l’administration des opérations.</p>
                        </div>
                    </article>
                </div>
            </div>

            <div class="row g-3 mt-3">
                <div class="col-12 col-md-6 col-xl-3 d-flex">
                    <article class="card service-card service-card--blue w-100">
                        <div class="card-body service-card__body">
                            <div class="service-card__top">
                                <img class="service-card__image" src="{{ asset('front/assets/images/services/service-5-placement.png') }}" alt="Réunion de professionnels" loading="lazy">
                                <a class="service-card__link" href="#contact" aria-label="Découvrir le conseil pour l’accès au marché financier">&#8599;</a>
                            </div>
                            <h3 class="service-card__title">Placement de Titres <br></h3>
                            <p class="service-card__copy">Nous proposons à nos clients l’accès à différents instruments financiers et monétaires permettant de diversifier et optimiser leurs investissements.</p>
                        </div>
                    </article>
                </div>

                <div class="col-12 col-md-6 col-xl-3 d-flex">
                    <article class="card service-card w-100">
                        <div class="card-body service-card__body">
                            <div class="service-card__top">
                                <img class="service-card__image" src="{{ asset('front/assets/images/services/service-6-levees.png') }}" alt="Analyse de données financières" loading="lazy">
                                <a class="service-card__link" href="#contact" aria-label="Découvrir l’analyse et la recherche financière">&#8599;</a>
                            </div>
                            <h3 class="service-card__title">Levées de Capitaux</h3>
                            <p class="service-card__copy">Impaxis Securities accompagne États, institutions et entreprises dans leurs opérations de levée de fonds via appels publics à l’épargne ou placements privés.</p>
                        </div>
                    </article>
                </div>

                <div class="col-12 col-md-6 col-xl-3 d-flex">
                    <article class="card service-card service-card--blue w-100">
                        <div class="card-body service-card__body">
                            <div class="service-card__top">
                                <img class="service-card__image" src="{{ asset('front/assets/images/services/service-7-conservation.png') }}" alt="Conseil entre professionnels" loading="lazy">
                                <a class="service-card__link" href="#contact" aria-label="Découvrir le conseil en placement">&#8599;</a>
                            </div>
                            <h3 class="service-card__title">Conservation de Portefeuilles Titres </h3>
                            <p class="service-card__copy">Nous assurons la conservation sécurisée des titres et la gestion des comptes de nos clients en relation avec le DC/BR. </p>
                        </div>
                    </article>
                </div>

                <div class="col-12 col-md-6 col-xl-3 d-flex">
                    <article class="card service-card w-100">
                        <div class="card-body service-card__body">
                            <div class="service-card__top">
                                <img class="service-card__image" src="{{ asset('front/assets/images/services/service-8-negociation.png') }}" alt="Pièces et graphique financier" loading="lazy">
                                <a class="service-card__link" href="#contact" aria-label="Découvrir la mise en place d’OPCVM">&#8599;</a>
                            </div>
                            <h3 class="service-card__title">Négociation de Valeurs Mobilières</h3>
                            <p class="service-card__copy">En tant qu’intermédiaire agréé, Impaxis Securities exécute les ordres d’achat et de vente de titres avec un accès direct et en temps réel au marché de la BRVM.</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="app-section" id="bourse" aria-labelledby="app-section-title">
        <div class="container app-section__inner">
            <img
                class="app-section__image"
                src="{{ asset('front/assets/images/accueil-bourse.jpg') }}"
                alt="Professionnel consultant une application financière sur son téléphone"
                loading="lazy"
            >

            <div class="app-section__content">
                <h2 class="app-section__title" id="app-section-title">La bourse à portée de main</h2>
                <p class="app-section__copy">Téléchargez l'application Impaxis Securities sur Android &amp; iOS.<br>Simulez vos investissements avec notre portefeuille virtuel.<br>Consultez vos comptes en ligne, 24h/24.</p>
                <p class="app-section__copy">Nous disposons d’un accès direct et en temps réel à la base de négociation de la BRVM permettant :</p>
                <ul class="app-section__list">
                    <li>La consultation de la feuille de marché</li>
                    <li>La saisie instantanée des ordres de bourse</li>
                    <li>La surveillance des saisies d’ordres sur le marché</li>
                    <li>La consultation des transactions réalisées sur le marché et des statistiques à chaque séance de cotation</li>
                </ul>
                <p class="app-section__copy">Nous intervenons également sur le marché de gré à gré, notamment pour la négociation des titres de nos cotés.</p>
                <a class="app-section__action" href="#contact">Télécharger l'application</a>
            </div>
        </div>
    </section>

    <section class="references-section" id="references" aria-labelledby="reference-title" style="background: #ffffff; margin-top: 0px; padding-top: 10px; padding-bottom: 82px;">
        <div class="container">
            <h2 class="references-section__title" id="reference-title">Nos références</h2>
            <div class="row g-2">
                <div class="col-12 col-md-6 col-xl-3 d-flex">
                    <article class="card reference-card w-100">
                        <div class="card-body reference-card__body">
                            <img class="reference-card__logo" src="{{ asset('front/assets/images/references/orange-sonatel.png') }}" alt="Orange Sonatel" loading="lazy">
                            <h3 class="reference-card__amount">100 milliards F CFA</h3>
                            <p class="reference-card__operation">Appel public à l’épargne - Sonatel</p>
                            <p class="reference-card__role">Arrangeur chef de file</p>
                            <p class="reference-card__year">2020</p>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-xl-3 d-flex">
                    <article class="card reference-card w-100">
                        <div class="card-body reference-card__body">
                            <img class="reference-card__logo" src="{{ asset('front/assets/images/references/bidc-ebid.png') }}" alt="BIDC" loading="lazy">
                            <h3 class="reference-card__amount">240 milliards F CFA</h3>
                            <p class="reference-card__operation">Appel public à l’épargne - GS Bond BIDC - EBID</p>
                            <p class="reference-card__role">Arrangeur principal<br>chef de file</p>
                            <p class="reference-card__year">2021-2024</p>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-xl-3 d-flex">
                    <article class="card reference-card w-100">
                        <div class="card-body reference-card__body">
                            <img class="reference-card__logo" src="{{ asset('front/assets/images/references/kasada.png') }}" alt="Kasada Capital Management" loading="lazy">
                            <h3 class="reference-card__amount">Confidentiel</h3>
                            <p class="reference-card__operation">Cession d’un complexe hôtelier</p>
                            <p class="reference-card__role">Conseil – fusions &amp; acquisitions</p>
                            <p class="reference-card__year">2022</p>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-xl-3 d-flex">
                    <article class="card reference-card w-100">
                        <div class="card-body reference-card__body">
                            <img class="reference-card__logo" src="{{ asset('front/assets/images/references/fidelis.png') }}" alt="Fidelis Finance" loading="lazy">
                            <h3 class="reference-card__amount">15 milliards F CFA</h3>
                            <p class="reference-card__operation">Appel public à l’épargne - Fidelis Finance Cap25</p>
                            <p class="reference-card__role">Arrangeur chef de file</p>
                            <p class="reference-card__year">2022</p>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-xl-3 d-flex">
                    <article class="card reference-card w-100">
                        <div class="card-body reference-card__body">
                            <img class="reference-card__logo" src="{{ asset('front/assets/images/references/boad.png') }}" alt="BOAD" loading="lazy">
                            <h3 class="reference-card__amount">310 milliards F CFA</h3>
                            <p class="reference-card__operation">Titrisation des créances souveraines par APE - FCTC Doli-Project</p>
                            <p class="reference-card__role">Chef de file</p>
                            <p class="reference-card__year">2023-2024</p>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-xl-3 d-flex">
                    <article class="card reference-card w-100">
                        <div class="card-body reference-card__body">
                            <img class="reference-card__logo" src="{{ asset('front/assets/images/references/nourmony.png') }}" alt="Nourmony" loading="lazy">
                            <h3 class="reference-card__amount">20 milliards F CFA</h3>
                            <p class="reference-card__operation">Appel public à l’épargne - Nourmony</p>
                            <p class="reference-card__role">Arrangeur chef de file</p>
                            <p class="reference-card__year">2021-2024</p>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-xl-3 d-flex">
                    <article class="card reference-card w-100">
                        <div class="card-body reference-card__body">
                            <img class="reference-card__logo" src="{{ asset('front/assets/images/references/senelec.png') }}" alt="Senelec" loading="lazy">
                            <h3 class="reference-card__amount">38 milliards F CFA</h3>
                            <p class="reference-card__operation">Appel public à l’épargne - Senelec</p>
                            <p class="reference-card__role">Arrangeur co-chef de file</p>
                            <p class="reference-card__year">2022</p>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-xl-3 d-flex">
                    <article class="card reference-card w-100">
                        <div class="card-body reference-card__body">
                            <img class="reference-card__logo" src="{{ asset('front/assets/images/references/crrh-uemoa.png') }}" alt="CRRH-UEMOA" loading="lazy">
                            <h3 class="reference-card__amount">60 milliards F CFA</h3>
                            <p class="reference-card__operation">Social bond CRRH-UEMOA</p>
                            <p class="reference-card__year">2022</p>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-xl-3 d-flex">
                    <article class="card reference-card w-100">
                        <div class="card-body reference-card__body">
                            <img class="reference-card__logo" src="{{ asset('front/assets/images/references/nsia-banque.png') }}" alt="NSIA Banque" loading="lazy">
                            <h3 class="reference-card__amount">10 milliards F CFA</h3>
                            <p class="reference-card__operation">FCTC Zaka RMBS</p>
                            <p class="reference-card__year">2023-2024</p>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-xl-3 d-flex">
                    <article class="card reference-card w-100">
                        <div class="card-body reference-card__body">
                            <img class="reference-card__logo" src="{{ asset('front/assets/images/references/etat-senegal.png') }}" alt="État du Sénégal" loading="lazy">
                            <h3 class="reference-card__amount">454 milliards F CFA</h3>
                            <p class="reference-card__operation">L’APE de l’État du Sénégal</p>
                            <p class="reference-card__year">2021-2024</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="news-section" id="actualites" aria-labelledby="news-section-title">
        <div class="container">
            <h2 class="news-section__title" id="news-section-title">Actualités récentes</h2>

            <div id="news-carousel" class="carousel slide news-carousel" data-bs-ride="carousel" data-bs-interval="6000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row g-4">
                            <div class="col-12 col-lg-4 d-flex">
                                <article class="card news-card w-100">
                                    <img class="news-card__image" src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?auto=format&amp;fit=crop&amp;w=800&amp;h=450&amp;q=85" alt="Graphique d’évolution boursière" loading="lazy">
                                    <div class="card-body news-card__body">
                                        <span class="news-card__category">Bourse</span>
                                        <h3 class="news-card__title">Découvrez les dernières évolutions des indices boursiers et les prévisions ...</h3>
                                        <a class="news-card__action" href="#contact">Lire plus</a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-12 col-lg-4 d-flex">
                                <article class="card news-card w-100">
                                    <img class="news-card__image" src="https://images.unsplash.com/photo-1554224154-26032ffc0d07?auto=format&amp;fit=crop&amp;w=800&amp;h=450&amp;q=85" alt="Documents d’analyse financière" loading="lazy">
                                    <div class="card-body news-card__body">
                                        <span class="news-card__category">Investissement</span>
                                        <h3 class="news-card__title">Nos conseils pratiques pour équilibrer vos investissements et minimiser...</h3>
                                        <a class="news-card__action" href="#contact">Lire plus</a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-12 col-lg-4 d-flex">
                                <article class="card news-card w-100">
                                    <img class="news-card__image" src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?auto=format&amp;fit=crop&amp;w=800&amp;h=450&amp;q=85" alt="Professionnelle analysant les marchés financiers" loading="lazy">
                                    <div class="card-body news-card__body">
                                        <span class="news-card__category">Marchés financiers</span>
                                        <h3 class="news-card__title">Analyse des secteurs porteurs et des opportunités d’investissement sur les...</h3>
                                        <a class="news-card__action" href="#contact">Lire plus</a>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row g-4">
                            <div class="col-12 col-lg-4 d-flex">
                                <article class="card news-card w-100">
                                    <img class="news-card__image" src="https://images.unsplash.com/photo-1526304640581-d334cdbbf45e?auto=format&amp;fit=crop&amp;w=800&amp;h=450&amp;q=85" alt="Pièces et graphique de croissance" loading="lazy">
                                    <div class="card-body news-card__body">
                                        <span class="news-card__category">Finance</span>
                                        <h3 class="news-card__title">Comprendre les tendances économiques qui influencent vos placements...</h3>
                                        <a class="news-card__action" href="#contact">Lire plus</a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-12 col-lg-4 d-flex">
                                <article class="card news-card w-100">
                                    <img class="news-card__image" src="{{ asset('front/assets/images/news/new-2-conseil.jpg') }}" alt="Réunion autour d'une stratégie financière" loading="lazy">
                                    <div class="card-body news-card__body">
                                        <span class="news-card__category">Conseil</span>
                                        <h3 class="news-card__title">Les bonnes pratiques pour construire une stratégie patrimoniale durable...</h3>
                                        <a class="news-card__action" href="#contact">Lire plus</a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-12 col-lg-4 d-flex">
                                <article class="card news-card w-100">
                                    <img class="news-card__image" src="https://images.unsplash.com/photo-1559526324-593bc073d938?auto=format&amp;fit=crop&amp;w=800&amp;h=450&amp;q=85" alt="Tablette affichant des données de marché" loading="lazy">
                                    <div class="card-body news-card__body">
                                        <span class="news-card__category">Actualité BRVM</span>
                                        <h3 class="news-card__title">Les rendez-vous et indicateurs à suivre sur le marché régional...</h3>
                                        <a class="news-card__action" href="#contact">Lire plus</a>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev news-carousel__control news-carousel__control--prev" type="button" data-bs-target="#news-carousel" data-bs-slide="prev" aria-label="Actualités précédentes">
                    <span class="news-carousel__icon news-carousel__icon--prev" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next news-carousel__control news-carousel__control--next" type="button" data-bs-target="#news-carousel" data-bs-slide="next" aria-label="Actualités suivantes">
                    <span class="news-carousel__icon news-carousel__icon--next" aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </section>

@endsection


@push('scripts')
    <script>
        // Add any custom JavaScript here
    </script>
@endpush