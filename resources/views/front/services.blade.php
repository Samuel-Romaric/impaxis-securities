@extends('layouts.front.guest')

@section('title', 'Nos Services')

@push('style')
    <style>
        .services-banner {
            display: flex;
            min-height: 410px;
            align-items: center;
            background: linear-gradient(180deg, #050505 0%, #050505 31%, #071a42 100%);
            color: #fff;
        }

        .services-banner__content {
            max-width: 820px;
            margin: 0 auto;
        }

        .services-banner__title {
            margin: 0;
            color: #fff;
            font-size: clamp(2.8rem, 5vw, 4rem);
            font-weight: 700;
            letter-spacing: 0;
            line-height: 1.1;
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

        .added-value-section {
            padding: 88px 0 104px;
            background: #fff;
        }

        .added-value-section__inner {
            display: grid;
            grid-template-columns: minmax(0, .92fr) minmax(0, 1.08fr);
            align-items: center;
        }

        .added-value-section__image {
            z-index: 1;
            width: 100%;
            height: 605px;
            object-fit: cover;
            object-position: center;
        }

        .added-value-section__content {
            margin-left: -1px;
            padding: 46px 42px 48px;
            background: var(--impaxis-blue);
            color: #fff;
        }

        .added-value-section__title {
            margin: 0 0 20px;
            color: #fff;
            font-size: 32px;
            font-weight: 600;
            line-height: 1.15;
        }

        .added-value-section__copy {
            margin: 0;
            font-size: 16px;
            line-height: 1.18;
            text-align: justify;
        }

        .added-value-section__copy + .added-value-section__copy {
            margin-top: 8px;
        }

        .added-value-section__list {
            margin: 0;
            padding-left: 23px;
            font-size: 16px;
            line-height: 1.22;
        }

        .added-value-section__list li {
            padding-left: 2px;
        }

        .added-value-section__label {
            margin: 8px 0 0;
            font-size: 16px;
            font-weight: 700;
            line-height: 1.2;
        }

        @media (max-width: 767.98px) {
            .added-value-section {
                padding: 56px 0 72px;
            }

            .added-value-section__inner {
                grid-template-columns: 1fr;
            }

            .added-value-section__image {
                height: 340px;
            }

            .added-value-section__content {
                margin-left: 0;
                padding: 36px 24px 40px;
            }

            .added-value-section__title {
                font-size: 29px;
            }

            .added-value-section__copy,
            .added-value-section__list,
            .added-value-section__label {
                font-size: 15px;
                text-align: left;
            }
        }

        @media (max-width: 767.98px) {
            .services-banner {
                min-height: 360px;
            }

            .services-banner__content {
                padding: 42px 20px;
            }

            .services-banner__title {
                font-size: clamp(2.3rem, 11vw, 3.2rem);
            }
        }
    </style>
@endpush
 

@section('content')
    <section class="services-banner" aria-labelledby="services-banner-title">
        <div class="container text-center">
            <div class="services-banner__content">
                <h1 class="services-banner__title" id="services-banner-title">Nos services</h1>
            </div>
        </div>
    </section>

    <section class="added-value-section" id="valeur-ajoutee" aria-labelledby="added-value-title">
        <div class="container added-value-section__inner">
            <img
                class="added-value-section__image"
                src="{{ asset('front/assets/images/slide-1.png') }}"
                alt="Installation électrique et équipements techniques"
                loading="lazy"
            >

            <div class="added-value-section__content">
                <h2 class="added-value-section__title" id="added-value-title">Notre valeur ajoutée</h2>
                <p class="added-value-section__copy">Nous permettons à notre clientèle, grâce à des outils technologiques de pointe, d’avoir une totale liberté d’accès au marché financier et aux informations relatives à la bourse. Nous proposons également à nos clients un accompagnement personnalisé pour la gestion de leur portefeuille titres.</p>
                <p class="added-value-section__label">Nos engagements :</p>
                <ul class="added-value-section__list">
                    <li>Une équipe de professionnels à votre disposition pour vous rendre un service de qualité.</li>
                    <li>Réactivité et flexibilité</li>
                    <li>Indépendance</li>
                    <li>Réponse personnalisée à vos attentes</li>
                    <li>Innovation technologique</li>
                </ul>
                <p class="added-value-section__label">Notre petit plus :</p>
                <ul class="added-value-section__list">
                    <li>Une tarification compétitive</li>
                    <li>Un service de consultation de comptes en ligne</li>
                    <li>Un portefeuille virtuel pour vous familiariser à l’univers boursier</li>
                    <li>Une bourse en ligne pour passer vos ordres de bourse et consulter en temps réel les flux de la BRVM</li>
                    <li>Des notes de recherche sur les sociétés cotées</li>
                    <li>Un service de proximité avec l’engagement de répondre à vos requêtes sous 24h</li>
                </ul>
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

    

    {{-- <section class="services-section py-5" aria-labelledby="services-section-title">
        <div class="container">
            <h2 class="text-center mb-5" id="services-section-title">Découvrez nos services</h2>
            <div class="row g-4">
                @foreach ($services as $service)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="{{ asset('storage/' . $service->image) }}" class="card-img-top" alt="{{ $service->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $service->title }}</h5>
                                <p class="card-text">{{ $service->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}
@endsection