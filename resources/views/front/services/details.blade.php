@extends('layouts.front.guest')

@section('title', 'Nos Services')

@push('style')
    <style>
        .service-details-section__image,
        .added-value-section__image {
            width: 100%;
            /* aspect-ratio: 16 / 9; */
            aspect-ratio: 20 / 13;
            height: auto;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 0px;
        }

        .service-details-section__content {
            padding: 20px;
            text-align: justify;
        }

        .service-details-section__title {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .service-details-section__copy {
            font-size: 18px;
            line-height: 1.6;
        }

        .marge {
            margin-top: 80px;
            margin-bottom: 70px;
        }
    </style>
@endpush
 

@section('content')
    <!-- Bannière -->
    <section class="banner-section" style="background: linear-gradient(135deg, #000000 0%, #001a4d 100%); padding: 150px 20px; text-align: center; min-height: 400px; display: flex; align-items: center; justify-content: center;">
        <div class="banner-content">
            <h1 style="color: white; font-size: 64px; font-weight: 700; margin: 0; letter-spacing: 2px;">{{ $service->title }}</h1>
        </div>
    </section>

    {{-- <section class="added-value-section" id="valeur-ajoutee" aria-labelledby="added-value-title">
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
    </section> --}}

    <section class="service-details-section marge" id="service-details" aria-labelledby="service-details-title">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img class="service-details-section__image" src="{{ $service->getFirstMediaUrl('service_images') }}" alt="{{ $service->title }}" loading="lazy">
                </div>
                <div class="col-12 col-md-6">
                    <div class="service-details-section__content">
                        {{-- <h2 class="service-details-section__title" id="service-details-title">{{ $service->title }}</h2> --}}
                        <p class="service-details-section__copy">{!! nl2br(e($service->description)) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection