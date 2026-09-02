@extends('layouts.front.guest')

@section('title', 'Contact')

@push('style')
    <style>
        .ct-icon {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .ct-icon span {
            color: #ffffff;
            padding: 6px;
            border-radius: 50%;
            background-color: #f59b00;
        }
        .ct-icon i {
            font-size: 16px;
        }

        .icon {
            color: #ffffff;
            padding: 6px;
            border-radius: 50%;
            background-color: #f59b00;
        } 

        .btn-orange {
            background-color: #f59b00;
            color: #fff;
            border: none;
        }
        .btn-orange:hover {
            background-color: #e68a00;
            color: #fff;
        }
        .btn-orange:focus {
            box-shadow: 0 0 0 0.2rem rgba(245, 155, 0, 0.5);
        }

    </style>
@endpush   

@section('content')
    <!-- Bannière -->
    <section class="banner-section" style="background: linear-gradient(135deg, #000000 0%, #001a4d 100%); padding: 150px 20px; text-align: center; min-height: 400px; display: flex; align-items: center; justify-content: center;">
        <div class="banner-content">
            <h1 style="color: white; font-size: 64px; font-weight: 700; margin: 0; letter-spacing: 2px;">Contact</h1>
        </div>
    </section>
    <!-- Contact -->
    <section class="actualites-section my-5" style="padding: 0px 0px;">
        <div class="container">
            <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.2586148284036!2d-17.470545625731617!3d14.697961774687254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec172aee90fe38d%3A0x7d065f6a1d49cb01!2sImpaxis%20Securities!5e0!3m2!1sfr!2sci!4v1788272008257!5m2!1sfr!2sci" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
            </div>
        </div>
    </section>

    <section class="container my-5" style="padding-top: 40px; padding-bottom: 40px;">
        <div class="row">
            <div class="col-md-6">
                <h2 style="font-size: 32px; font-weight: 600; line-height: 1.2; margin-bottom: 20px;">Nos contacts</h2>
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title">Siège groupe</h5>
                            <p> 
                                <div class="row mb-2">
                                    <div class="col-md-1" style="padding-top: 10px;"><span style="color: #ffffff; padding: 8px; border-radius: 50%; background-color: #f59b00;"><i class="bi bi-geo-alt-fill"></i></span></div>
                                    <div class="col-md-10"><span style="font-size: 16px; line-height: 1.5;"> Fann Résidence rue Aimé Césaire x Corniche Villa 103. BP 45545 Dakar – SENEGAL</span></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-1"><span style="color: #ffffff; padding: 8px; border-radius: 50%; background-color: #f59b00;"><i class="bi bi-telephone-fill"></i></span></div>
                                    <div class="col-md-10"><span style="font-size: 16px; line-height: 1.5;"> (+221) 33 869 3140</span></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-1"><span style="color: #ffffff; padding: 8px; border-radius: 50%; background-color: #f59b00;"><i class="bi bi-envelope-fill"></i></span></div>
                                    <div class="col-md-10"><span style="font-size: 16px; line-height: 1.5;"> serviceclient@impaxis-securities.com</span></div>
                                </div>
                            </p>
                        </div>

                        <div class="mt-5">
                            <h5 class="card-title">Bureaux régionaux & représentations internationales</h5>
                            <p> 
                                <div class="row mb-2">
                                    <div class="col-md-1" style="padding-top: 10px;"><span style="color: #ffffff; padding: 8px; border-radius: 50%; background-color: #f59b00;"><i class="bi bi-geo-alt-fill"></i></span></div>
                                    <div class="col-md-10"><span style="font-size: 16px; line-height: 1.5;"> Plateau - Bd Delafosse x Rue Alphonse Daudet – Entrée B – 6ème étage, Abidjan, Côte d'Ivoire</span></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-1"><span style="color: #ffffff; padding: 8px; border-radius: 50%; background-color: #f59b00;"><i class="bi bi-globe2"></i></span></div>
                                    <div class="col-md-10"><span style="font-size: 16px; line-height: 1.5;"> Dubaï</span></div>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <h2 style="font-size: 32px; font-weight: 600; line-height: 1.2; margin-bottom: 20px;">Ecrivez-nous via ce formulaire</h2>
                <div class="card">
                    <div class="card-body">
                        <form>
                            @csrf
                            <div class="row p-1">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label" for="name">Nom complet</label>
                                        <input type="text" class="form-control" placeholder="Prénom NOM">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label" for="email">Email</label>
                                        <input type="email" class="form-control" placeholder="prenom.nom@domaine.tld">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-1">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-form-label" for="subject">Objet</label>
                                        <input type="text" class="form-control" placeholder="Objet de votre message">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group p-1">
                                <label class="col-form-label" for="message">Message</label>
                                <textarea class="form-control" placeholder="Ecrivez ici votre message ..."></textarea>
                            </div>
                            <div class="row p-1 mt-4">
                                <div class="col-md-12">
                                    <div class="form-group d-grid">
                                        <button type="submit" class="btn btn-orange btn-block">Envoyer</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('assets/front/js/actualites.js') }}"></script>
@endpush
