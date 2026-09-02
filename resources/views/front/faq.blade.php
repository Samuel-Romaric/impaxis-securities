@extends('layouts.front.guest')

@section('title', 'Faq')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/front/css/actualites.css') }}">
@endpush   

@section('content')
    <!-- Bannière -->
    <section class="banner-section" style="background: linear-gradient(135deg, #000000 0%, #001a4d 100%); padding: 150px 20px; text-align: center; min-height: 400px; display: flex; align-items: center; justify-content: center;">
        <div class="banner-content">
            <h1 style="color: white; font-size: 64px; font-weight: 700; margin: 0; letter-spacing: 2px;">Faq</h1>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section" style="padding: 80px 20px; background-color: #f8f9fa;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Colonne gauche -->
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <h2 style="font-size: 48px; font-weight: 600; line-height: 1.2; margin-bottom: 20px;">
                        <span style="color: #003d99;">Questions</span><br>
                        <span style="color: #000;">fréquemment posées</span>
                    </h2>
                    <p style="font-size: 16px; color: #666; line-height: 1.6;">
                        Parcourez notre FAQ pour trouver rapidement l'information recherchée.
                    </p>
                </div>
                
                <!-- Colonne droite - Accordéons -->
                <div class="col-lg-7"> 
                    <div class="accordion" id="faqAccordion">
                        <!-- Question 1 -->
                        <div class="accordion-item" style="border: none; margin-bottom: 15px; border-radius: 8px; background-color: #e8eef7;">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1" style="background-color: #e8eef7; color: #000; font-weight: 600; font-size: 16px; padding: 20px;">
                                    Qu'est-ce qu'Impaxis Securities ?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="padding: 20px; color: #333; font-size: 15px; line-height: 1.6;">
                                    Impaxis Securities est une Société de Gestion et d'Intermédiaire (SGI) agréée par le CREPMF et membre de la BRVM. Elle accompagne les particuliers, entreprises et institutions dans leurs opérations sur les marchés financier et monétaire de l'UEMOA.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Question 2 -->
                        <div class="accordion-item" style="border: none; margin-bottom: 15px; border-radius: 8px; background-color: #e8eef7;">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2" style="background-color: #e8eef7; color: #000; font-weight: 600; font-size: 16px; padding: 20px;">
                                    Comment puis-je investir à la BRVM ?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="padding: 20px; color: #333; font-size: 15px; line-height: 1.6;">
                                    Vous pouvez investir à la BRVM en ouvrant un compte auprès d'Impaxis Securities et en suivant notre processus d'ouverture de compte. Notre équipe vous guidera à travers toutes les étapes.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Question 3 -->
                        <div class="accordion-item" style="border: none; margin-bottom: 15px; border-radius: 8px; background-color: #e8eef7;">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3" style="background-color: #e8eef7; color: #000; font-weight: 600; font-size: 16px; padding: 20px;">
                                    Quels types de placements proposez-vous ?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="padding: 20px; color: #333; font-size: 15px; line-height: 1.6;">
                                    Nous proposons une large gamme de placements incluant les actions, les obligations, les SICAV et autres instruments financiers disponibles sur les marchés de l'UEMOA.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Question 4 -->
                        <div class="accordion-item" style="border: none; margin-bottom: 15px; border-radius: 8px; background-color: #e8eef7;">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4" style="background-color: #e8eef7; color: #000; font-weight: 600; font-size: 16px; padding: 20px;">
                                    Puis-je consulter mon portefeuille en ligne ?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="padding: 20px; color: #333; font-size: 15px; line-height: 1.6;">
                                    Oui, vous pouvez consulter votre portefeuille en temps réel via notre plateforme en ligne sécurisée accessible 24h/24.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Question 5 -->
                        <div class="accordion-item" style="border: none; margin-bottom: 15px; border-radius: 8px; background-color: #e8eef7;">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5" style="background-color: #e8eef7; color: #000; font-weight: 600; font-size: 16px; padding: 20px;">
                                    Pourquoi choisir Impaxis Securities ?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="padding: 20px; color: #333; font-size: 15px; line-height: 1.6;">
                                    Impaxis Securities offre expertise, sécurité, transparence et un accompagnement personnalisé pour tous vos besoins d'investissement sur les marchés de l'UEMOA.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('assets/front/js/actualites.js') }}"></script>
@endpush
