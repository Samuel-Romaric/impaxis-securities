<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Impaxis') }} | @yield('title')</title>

        <!-- Fonts -->
        <link rel="icon" type="image/x-icon" href="{{ asset('front/assets/logo/favicon-impaxis-securities.ico') }}">
        <link rel="stylesheet" href="{{ asset('front/css/bootstrap-5.0.2/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    
        <!-- Scripts -->
        <style>
            body {
                font-family: 'Inter', sans-serif;
                background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .login-card {
                border: none;
                border-radius: 1rem;
                box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3), 0 8px 10px -6px rgba(0, 0, 0, 0.3);
                background: #ffffff;
                overflow: hidden;
                width: 100%;
                max-width: 440px;
            }

            .brand-icon {
                width: 50px;
                height: 50px;
                background: rgba(13, 110, 253, 0.1);
                color: #0d6efd;
                border-radius: 12px;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                font-size: 1.5rem;
            }

            .form-control, .input-group-text {
                border-color: #e2e8f0;
                padding: 0.75rem 1rem;
                font-size: 0.95rem;
            }

            .form-control:focus {
                border-color: #0d6efd;
                box-shadow: 0 0 0 4px rgba(13, 110, 253, 0.15);
            }

            .btn-primary {
                padding: 0.75rem 1rem;
                font-weight: 600;
                border-radius: 0.5rem;
                transition: all 0.2s ease;
            }

            .btn-primary:hover {
                transform: translateY(-1px);
                box-shadow: 0 4px 12px rgba(13, 110, 253, 0.25);
            }

            .toggle-password {
                cursor: pointer;
                background: transparent;
            }

            .toggle-password:hover {
                color: #0d6efd;
            }

            /* Animation pour le spinner de chargement */
            .btn-spinner {
                display: none;
            }
        </style>
        @stack('style')
    </head>
    <body class="font-sans antialiased">
        <div class="container p-3">
    <div class="card login-card mx-auto">
        <div class="card-body p-4 p-sm-5">
            
            <!-- En-tête -->
            <div class="text-center mb-4">
                <div class="brand-icon mb-3">
                    <i class="bi bi-shield-lock-fill"></i>
                </div>
                <h4 class="fw-bold text-dark mb-1">Espace Connexion</h4>
                <p class="text-muted small">Accédez à la gestion de votre tableau de bord</p>
            </div>

            <!-- Message d'erreur dynamique via JS -->
            <div id="alert-message" class="alert alert-danger d-none" role="alert">
                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                <span id="alert-text"></span>
            </div>

            <!-- Formulaire -->
            <form id="loginForm" method="POST" action="{{ route('admin.login') }}" method="POST" novalidate>
                @csrf
                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label text-secondary small fw-medium">Adresse Email</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light text-muted"><i class="bi bi-envelope"></i></span>
                        <input type="email" class="form-control" id="email" name="email" placeholder="nom@exemple.com" required>
                    </div>
                    <div class="invalid-feedback">Veuillez saisir une adresse email valide.</div>
                </div>

                <!-- Mot de passe -->
                <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <label for="password" class="form-label text-secondary small fw-medium mb-0">Mot de passe</label>
                        <a href="#" class="text-primary text-decoration-none small">Oublié ?</a>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text bg-light text-muted"><i class="bi bi-key"></i></span>
                        <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required>
                        <span class="input-group-text text-muted toggle-password" id="togglePassword">
                            <i class="bi bi-eye" id="eyeIcon"></i>
                        </span>
                    </div>
                    <div class="invalid-feedback">Le mot de passe est obligatoire.</div>
                </div>

                <!-- Se souvenir de moi -->
                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" id="remember" name="remember">
                    <label class="form-check-label text-secondary small" for="remember">
                        Se souvenir de moi
                    </label>
                </div>

                <!-- Bouton Soumettre -->
                <button type="submit" class="btn btn-primary w-100 mb-3" id="submitBtn">
                    <span class="btn-text">Se connecter</span>
                    <span class="spinner-border spinner-border-sm btn-spinner ms-2" role="status" aria-hidden="true"></span>
                </button>

            </form>

            <!-- Pied de carte -->
            <div class="text-center pt-3 border-top">
                <p class="text-muted small mb-0">&copy; 2026 - Tous droits réservés.</p>
            </div>

        </div>
    </div>
</div>

<!-- Scripts : jQuery & Bootstrap 5 Bundle -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

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
</script>
    </body>
</html>
