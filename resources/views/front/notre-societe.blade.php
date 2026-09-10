@extends('layouts.front.guest')

@section('title', 'Notre société')

@push('style')
    <style>
        .company-banner {
            min-height: 410px;
            display: flex;
            align-items: center;
            background: linear-gradient(180deg, #050505 0%, #050505 31%, #071a42 100%);
            color: #fff;
        }

        .company-banner__content {
            max-width: 820px;
            margin: 0 auto;
        }

        .company-banner__title {
            margin: 0 0 12px;
            color: #fff;
            font-size: clamp(2.35rem, 4.4vw, 3.55rem);
            font-weight: 700;
            letter-spacing: 0;
            line-height: 1.08;
        }

        .company-banner__copy {
            max-width: 690px;
            margin: 0 auto;
            color: rgba(255, 255, 255, .92);
            font-size: 16px;
            line-height: 1.2;
        }

        .about-section {
            padding: 80px 0 96px;
            background: #fff;
        }

        .about-section__image {
            width: 100%;
            height: 100%;
            min-height: 470px;
            border-radius: 8px;
            object-fit: cover;
            object-position: center;
        }

        .about-section__content {
            padding-left: 10px;
        }

        .about-section__title {
            margin: 0 0 18px;
            color: #080808;
            font-size: 32px;
            font-weight: 600;
            line-height: 1.2;
        }

        .about-section__copy {
            margin: 0;
            color: #171717;
            font-size: 16px;
            line-height: 1.2;
            text-align: justify;
        }

        .mission-section {
            padding: 0 0 96px;
            background: #fff;
        }

        .mission-card {
            min-height: 300px;
            border: 0;
            border-radius: 10px;
            background: #f3f5f9;
        }

        .mission-card__body {
            display: flex;
            flex-direction: column;
            height: 100%;
            padding: 60px 38px 48px;
        }

        .mission-card__icon {
            display: inline-flex;
            width: 52px;
            height: 52px;
            align-items: center;
            justify-content: center;
            margin-bottom: 45px;
            color: var(--impaxis-blue);
            font-size: 49px;
            line-height: 1;
        }

        .mission-card__icon--vision {
            font-size: 43px;
        }

        .mission-card__title {
            margin: 0 0 30px;
            color: #080808;
            font-size: 24px;
            font-weight: 600;
            line-height: 1.2;
        }

        .mission-card__copy {
            max-width: 470px;
            margin: 0;
            color: #171717;
            font-size: 16px;
            line-height: 1.22;
        }

        .values-section {
            padding: 76px 0 88px;
            background: #f3f5f9;
        }

        .values-section__title {
            margin: 0 0 48px;
            color: #080808;
            font-size: 32px;
            font-weight: 600;
            line-height: 1.2;
            text-align: center;
        }

        .value-item {
            height: 100%;
            padding-right: 24px;
        }

        .value-item__icon {
            display: inline-flex;
            width: 42px;
            height: 42px;
            align-items: center;
            justify-content: center;
            margin-bottom: 39px;
            border-radius: 4px;
            background: #dce5f3;
            color: var(--impaxis-blue);
            font-size: 28px;
            line-height: 1;
        }

        .value-item__title {
            margin: 0 0 5px;
            color: #080808;
            font-size: 21px;
            font-weight: 600;
            line-height: 1.2;
        }

        .value-item__copy {
            margin: 0;
            color: #171717;
            font-size: 16px;
            line-height: 1.28;
            text-align: justify;
        }

        .investment-cta {
            padding: 92px 0 104px;
            background: #fff;
        }

        .investment-cta__content {
            padding-right: 36px;
        }

        .investment-cta__title {
            max-width: 560px;
            margin: 0 0 18px;
            color: #080808;
            font-size: 34px;
            font-weight: 600;
            line-height: 1.15;
        }

        .investment-cta__copy {
            max-width: 460px;
            margin: 0;
            color: #171717;
            font-size: 16px;
            line-height: 1.25;
        }

        .investment-cta__actions {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            margin-top: 42px;
        }

        .investment-cta__action {
            display: inline-flex;
            min-width: 196px;
            min-height: 45px;
            align-items: center;
            justify-content: center;
            padding: 10px 22px;
            border: 1px solid var(--impaxis-blue);
            color: #080808;
            font-size: 16px;
            font-weight: 600;
            text-decoration: none;
            transition: background-color .2s ease, color .2s ease, transform .2s ease;
        }

        .investment-cta__action--primary {
            background: var(--impaxis-blue);
            color: #fff;
        }

        .investment-cta__action:hover,
        .investment-cta__action:focus {
            background: var(--impaxis-blue);
            color: #fff;
            transform: translateY(-2px);
        }

        .investment-cta__image {
            display: block;
            width: 100%;
            height: 525px;
            object-fit: cover;
            object-position: center;
            border-radius: 8px;
        }

        .animme_border {
            border: 1px solid #dce5f3;
        }

        .animme_border:hover{
            border: 1px solid var(--impaxis-orange);
        }

        @media (max-width: 767.98px) {
            .values-section {
                padding: 56px 0 72px;
            }

            .values-section__title {
                margin-bottom: 32px;
                font-size: 28px;
            }

            .value-item {
                padding-right: 0;
            }

            .value-item__icon {
                margin-bottom: 24px;
            }

            .value-item__copy {
                text-align: left;
            }

            .investment-cta {
                padding: 56px 0 72px;
            }

            .investment-cta__content {
                padding-right: 0;
            }

            .investment-cta__title {
                font-size: 28px;
            }

            .investment-cta__copy {
                font-size: 17px;
            }

            .investment-cta__actions {
                margin-top: 30px;
            }

            .investment-cta__action {
                width: 100%;
            }

            .investment-cta__image {
                height: 360px;
            }
        }

        @media (max-width: 767.98px) {
            .mission-section {
                padding: 0 0 72px;
            }

            .mission-card {
                min-height: 320px;
            }

            .mission-card__body {
                padding: 40px 28px;
            }

            .mission-card__icon {
                margin-bottom: 30px;
            }

            .mission-card__title {
                margin-bottom: 20px;
                font-size: 22px;
            }

            .mission-card__copy {
                font-size: 17px;
            }
        }

        @media (max-width: 767.98px) {
            .about-section {
                padding: 56px 0 72px;
            }

            .about-section__image {
                min-height: 300px;
                max-height: 420px;
            }

            .about-section__content {
                padding: 32px 0 0;
            }

            .about-section__title {
                font-size: 28px;
            }

            .about-section__copy {
                text-align: left;
            }
        }

        @media (max-width: 767.98px) {
            .company-banner {
                min-height: 360px;
            }

            .company-banner__content {
                padding: 42px 20px;
            }

            .company-banner__title {
                font-size: clamp(2.15rem, 9vw, 3rem);
                line-height: 1.12;
            }
        }
    </style>
@endpush


@section('content')
    <section class="company-banner" aria-labelledby="company-banner-title">
        <div class="container text-center">
            <div class="company-banner__content">
                <h1 class="company-banner__title" id="company-banner-title">
                    Une expertise financière au<br class="d-none d-md-inline">
                    service de vos ambitions
                </h1>
                <p class="company-banner__copy">
                    Depuis plus de 20 ans, Impaxis Securities accompagne les particuliers, entreprises et<br class="d-none d-md-inline">
                    institutions dans leurs investissements et opérations financières sur les marchés de<br class="d-none d-md-inline">
                    l’UEMOA.
                </p>
            </div>
        </div>
    </section>

    <section class="about-section" id="qui-sommes-nous" aria-labelledby="about-section-title">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-12 col-lg-6">
                    <img
                        class="about-section__image"
                        src="{{ asset('front/assets/images/apropos.png') }}"
                        alt="Données et évolution des marchés financiers"
                        loading="lazy"
                    >
                </div>
 
                <div class="col-12 col-lg-6">
                    <div class="about-section__content">
                        <h2 class="about-section__title" id="about-section-title">Qui sommes-nous ?</h2>
                        <p class="about-section__copy">
                            Impaxis Securities est la Société du groupe Impaxis dédiée aux activités de marché. Créée en 2004, Impaxis Securities est une Société de Gestion et d’Intermédiation (SGI) indépendante, agréée par le Conseil Régional de l’Epargne Publique et des Marchés Financiers (CREPMF) sous le n° SGI-020/2004. Impaxis Securities est membre de la BRVM (Bourse Régionale des Valeurs Mobilières). Impaxis Securities permet à ses clients d’intervenir sur le marché financier à la BRVM et sur le marché monétaire de l’UEMOA (Union Monétaire Ouest-Africaine). Impaxis Securities s’adresse à toute personne physique désireuse d’effectuer des placements financiers dans la zone UEMOA (Union Economique et Monétaire Ouest-Africaine) ; et à toute morale voulant investir sur les marchés financier et monétaire ou souhaitant y mobiliser des ressources. La clientèle d’Impaxis Securities est sous-régionale et internationale et comprend des personnes physiques, morales et des institutions publiques et privées qui évoluent dans différents secteurs d’activités : compagnies d’assurance, banques, établissements publics financiers, service public, fonds d’investissement, prestataires de service, immobilier, cabinets de conseil et d’audit, ...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mission-section" aria-label="Mission et vision d’Impaxis Securities">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-lg-6 d-flex">
                    <article class="card mission-card w-100 animme_border">
                        <div class="card-body mission-card__body">
                            <span class="mission-card__icon" aria-hidden="true"><i class="bi bi-crosshair"></i></span>
                            <h2 class="mission-card__title">Notre mission</h2>
                            <p class="mission-card__copy">Faire de l’innovation financière et de l’excellence opérationnelle des leviers alternatifs de développement de l’Afrique.</p>
                        </div>
                    </article>
                </div>

                <div class="col-12 col-lg-6 d-flex">
                    <article class="card mission-card w-100 animme_border">
                        <div class="card-body mission-card__body">
                            <span class="mission-card__icon" aria-hidden="true"><i class="bi bi-eye"></i></span>
                            <h2 class="mission-card__title">Notre vision</h2>
                            <p class="mission-card__copy">Être reconnue comme la Banque d’Affaires de référence en Afrique, la meilleure entreprise où travailler, tout en générant une rentabilité durable.</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="values-section" id="valeurs" aria-labelledby="values-section-title">
        <div class="container">
            <h2 class="values-section__title" id="values-section-title">Nos valeurs</h2>

            <div class="row gy-5 gx-4">
                <div class="col-12 col-md-6 col-lg-4">
                    <article class="value-item">
                        {{-- <span class="value-item__icon" aria-hidden="true">&#128161;</span> --}}
                        <span class="value-item__icon" aria-hidden="true"><i class="bi bi-brightness-high"></i></span>
                        <h3 class="value-item__title">Innovation</h3>
                        <p class="value-item__copy">S’autoriser à penser hors des sentiers battus, à émettre de nouvelles idées (s’étonner, questionner, créer), et aller jusqu’au bout de leur mise en œuvre.</p>
                    </article>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <article class="value-item">
                        <span class="value-item__icon" aria-hidden="true"><i class="bi bi-briefcase"></i></span>
                        <h3 class="value-item__title">Responsabilité</h3>
                        <p class="value-item__copy">Prendre conscience de la portée de ses actes dans la réalisation ou non de l’ambition de l’entreprise et faire preuve d’engagement dans l’atteinte des objectifs collectifs.</p>
                    </article>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <article class="value-item">
                        <span class="value-item__icon" aria-hidden="true"><i class="bi bi-shield-check"></i></span>
                        <h3 class="value-item__title">Intégrité</h3>
                        <p class="value-item__copy">Bâtir un environnement interne de confiance et pérenniser la confiance des clients qui s’appuie sur la capacité de chaque acteur d’Impaxis à faire preuve de fiabilité et de stabilité dans le respect de ses engagements, et des principes de la société.</p>
                    </article>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <article class="value-item">
                        <span class="value-item__icon" aria-hidden="true"><i class="bi bi-graph-up-arrow"></i></span>
                        <h3 class="value-item__title">Performance</h3>
                        <p class="value-item__copy">Faire de la création de valeur, l’excellence et le sens des résultats, des drivers essentiels de ses actes au quotidien</p>
                    </article>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <article class="value-item">
                        <span class="value-item__icon" aria-hidden="true"><i class="bi bi-people"></i></span>
                        <h3 class="value-item__title">Esprit de famille</h3>
                        <p class="value-item__copy">L’esprit de famille se manifeste à travers la bienveillance et nous permet de nous dire les choses dans la transparence et le respect</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="investment-cta" aria-labelledby="investment-cta-title">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-12 col-lg-6">
                    <div class="investment-cta__content">
                        <h2 class="investment-cta__title" id="investment-cta-title">Construisons ensemble vos projets d’investissement</h2>
                        <p class="investment-cta__copy">Nos équipes sont à votre disposition pour vous accompagner dans vos opérations financières et stratégies d’investissement.</p>
                        <div class="investment-cta__actions">
                            <a class="investment-cta__action" href="{{ route('front.contact') }}#contact">Nous contacter</a>
                            <a class="investment-cta__action investment-cta__action--primary" href="{{ route('front.devenir-client') }}">Devenir client</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <img
                        class="investment-cta__image"
                        src="{{ asset('front/assets/images/apropos-construire.png') }}"
                        alt="Investisseur consultant les marchés financiers sur son téléphone"
                        loading="lazy"
                    >
                </div>
            </div>
        </div>
    </section>


@endsection 

