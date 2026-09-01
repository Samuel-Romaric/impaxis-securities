
@extends('layouts.front.guest')

@section('title', 'Actualités')

@push('style')
    <style>
        /* .news-section {
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
        } */

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

        /* .news-carousel__control {
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
        } */

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

        
    </style>
@endpush

@section('content')

    <!-- Bannière -->
    <section class="banner-section" style="background: linear-gradient(135deg, #000000 0%, #001a4d 100%); padding: 150px 20px; text-align: center; min-height: 400px; display: flex; align-items: center; justify-content: center;">
        <div class="banner-content">
            <h1 style="color: white; font-size: 64px; font-weight: 700; margin: 0; letter-spacing: 2px;">Actualités</h1>
        </div>
    </section>

    <div class="" style="background: #f3f5f9; margin-top: 0px; padding-top: 70px; padding-bottom: 80px;">
        <!-- Actualités -->
        <section class="news-section" id="actualites" aria-labelledby="news-section-title">
            <div class="container">
                {{-- <h2 class="news-section__title" id="news-section-title">Actualités récentes</h2> --}}

                <div id="news-carousel" class=" slide news-carousel" data-bs-ride="" data-bs-interval="">
                    <div class="carousel-inner">
                        <div class="">
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

                        <div class="mt-4">
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

                    {{-- <button class="carousel-control-prev news-carousel__control news-carousel__control--prev" type="button" data-bs-target="#news-carousel" data-bs-slide="prev" aria-label="Actualités précédentes">
                        <span class="news-carousel__icon news-carousel__icon--prev" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next news-carousel__control news-carousel__control--next" type="button" data-bs-target="#news-carousel" data-bs-slide="next" aria-label="Actualités suivantes">
                        <span class="news-carousel__icon news-carousel__icon--next" aria-hidden="true"></span>
                    </button> --}}
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
@endpush