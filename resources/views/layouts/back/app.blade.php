<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') | {{ config('app.name', 'Impaxis') }}</title>
        
        <!-- Fonts -->
        <link rel="icon" type="image/x-icon" href="{{ asset('front/assets/logo/favicon-impaxis-securities.ico') }}">
        
        <!-- Bootstrap 5 CSS -->
        <link rel="stylesheet" href="{{ asset('front/css/bootstrap-5.0.2/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        

        <link href="{{ asset('/back/assets/fonts/feather/feather.css') }}" rel="stylesheet" />
        <link href="{{ asset('/back/assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('/back/assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet') }}" />
        <link rel="stylesheet" href="{{ asset('/back/assets/css/theme.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('/back/assets/css/admin.css') }}" />

        <!-- Styles -->
        <style>
            body {
                height: 100vh;
                background-color: #f8f9fa;
            }
            .login-container {
                height: 100vh;
            }
            /* Style de la colonne Image */
            .bg-image-column {
                background-image: url("{{ asset('/front/assets/images/services/service-6-levees.pn') }}"); /* Remplacez par votre image */
                background-size: cover;
                background-position: top;
                /* background-position: center; */
            }

            /* Centrage du formulaire */
            .form-column {
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 3rem;
            }

            .form-signin {
                width: 100%;
                max-width: 400px;
            }
        </style>
        @stack('style')
    </head>
<body class="">

    <div class="container-fluid g-0">
        <div class="row g-0 login-container">
                
            <!-- Colonne GAUCHE : Formulaire -->
            <div class="col-lg-6 col-12 form-column bg-white">
                <main class="form-signin">

                    @yield('content')
                    
                </main>
            </div>

            <!-- Colonne DROITE : Image (masquée sur mobile) -->
            <div class="col-lg-6 d-none d-lg-block bg-image-column">
                <!-- Cette colonne reste vide en HTML car l'image est gérée en arrière-plan via le CSS -->
            </div>
        </div>
    </div>


    <!-- Scripts : jQuery & Bootstrap 5 Bundle -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    {{-- 
    <script>
        $(document).ready(function () {

            // 1. Masquer / Afficher le mot de passe
            $('#togglePassword').on('click', function () {
                const passwordInput = $('#password');
                const eyeIcon = $('#eyeIcon');
                
                if (passwordInput.attr('type') === 'password') {
                    passwordInput.attr('type', 'text');
                    eyeIcon.removeClass('bi-eye').addClass('bi-eye-slash');
                } else {
                    passwordInput.attr('type', 'password');
                    eyeIcon.removeClass('bi-eye-slash').addClass('bi-eye');
                }
            });

            // 2. Validation & Soumission du formulaire en AJAX avec jQuery
            $('#loginForm').on('submit', function (e) {
                e.preventDefault();

                const form = $(this);
                const email = $('#email').val().trim();
                const password = $('#password').val().trim();
                const alertMsg = $('#alert-message');
                const submitBtn = $('#submitBtn');

                // Réinitialisation des classes de validation
                form.removeClass('was-validated');
                alertMsg.addClass('d-none');

                // Vérification basique
                if (!this.checkValidity()) {
                    e.stopPropagation();
                    form.addClass('was-validated');
                    return;
                }

                // Affichage de l'état de chargement du bouton
                submitBtn.prop('disabled', true);
                submitBtn.find('.btn-text').text('Connexion en cours...');
                submitBtn.find('.btn-spinner').show();

                // Simulation d'une requête AJAX vers le backend (Laravel par ex)
                setTimeout(function () {
                    
                    // Exemple d'appel AJAX réel :
                    $.ajax({
                        url: '/login',
                        type: 'POST',
                        data: form.serialize(),
                        success: function(response) {
                            window.location.href = '/dashboard';
                        },
                        error: function(xhr) {
                            $('#alert-text').text(xhr.responseJSON.message || 'Identifiants incorrects.');
                            alertMsg.removeClass('d-none');
                            submitBtn.prop('disabled', false);
                            submitBtn.find('.btn-text').text('Se connecter');
                            submitBtn.find('.btn-spinner').hide();
                        }
                    });
                    

                    // Pour la démo : simulation d'un succès
                    window.location.href = '#'; 

                }, 1200);
            });
        });
    </script> --}}
</body>
</html>
