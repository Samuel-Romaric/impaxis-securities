    <footer class="site-footer">
        <div class="container footer-main">
            <div class="row">
                <div class="footer-column col-md-5 col-lg-5">
                    <h2 class="footer-title">Impaxis Securities</h2>
                    <p class="footer-copy">Impaxis Securities est une Société de Gestion et d’Intermédiation agréée par le CREPMF et membre de la BRVM depuis 2004.</p>
                    <form class="footer-newsletter-form" action="#" method="POST">
                        @csrf
                        <label class="footer-newsletter-label" for="footer-email">Abonnez-vous à notre newsletter</label>
                        <div class="footer-newsletter">
                            <input class="form-control" id="footer-email" name="email" type="email" placeholder="E-mail" aria-label="Votre adresse e-mail" required>
                            <button class="btn" type="submit">Envoyez</button>
                        </div>
                    </form>
                </div>

                <div class="footer-column col-md-3 col-lg-3">
                    <h2 class="footer-heading">Liens rapides</h2>
                    <ul class="footer-links">
                        <li><a href="{{ route('front.welcome') }}">Accueil</a></li>
                        <li><a href="{{ route('front.notre-societe') }}">Notre Société</a></li>
                        <li><a href="{{ route('front.services') }}">Services</a></li>
                        <li><a href="{{ route('front.marches') }}">Marchés</a></li>
                        <li><a href="{{ route('front.actualites') }}">Actualités</a></li>
                        {{-- <li><a href="{{ route('front.documentation') }}">Ressources</a></li> --}}
                        <li><a href="{{ route('front.contact') }}">Contact</a></li>
                    </ul>
                </div>

                <div class="footer-column col-md-2 col-lg-2">
                    <h2 class="footer-heading">Accès rapide</h2>
                    <ul class="footer-links">
                        <li><a href="https://docuseal.com/d/4buk6GcKhzBLXb" target="_blank">Devenir client</a></li>
                        <li><a href="https://boursenligne.impaxis-securities.com/" target="_blank">Connexion</a></li>
                        <li><a href="{{ route('front.faq') }}">FAQ</a></li>
                        <li><a href="{{ route('front.contact') }}">Service client</a></li>
                    </ul>
                </div>

                <div class="footer-column col-md-2 col-lg-2">
                    <h2 class="footer-heading">Liens utiles</h2>
                    <ul class="footer-links">
                        <li><a href="https://www.brvm.org/" target="_blank" rel="noopener noreferrer">BRVM</a></li>
                        <li><a href="https://www.crepmf.org/" target="_blank" rel="noopener noreferrer">CREPMF</a></li>
                        <li><a href="https://www.bceao.int/" target="_blank" rel="noopener noreferrer">BCEAO</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container d-flex flex-column flex-md-row align-items-md-center justify-content-between">
                <p class="footer-legal mb-0">© Impaxis Securities 2026. Tous droits réservés.</p>
                <p class="footer-legal mb-0 mt-2 mt-md-0">
                    <a href="#mentions-legales">Mentions légales</a><span class="footer-legal-separator">|</span><a href="#confidentialite">Politique de confidentialité</a>
                </p>
                <nav class="footer-social" aria-label="Réseaux sociaux">
                    <a href="#facebook" aria-label="Facebook">f</a>
                    <a href="#linkedin" aria-label="LinkedIn">in</a>
                    <a href="#instagram" aria-label="Instagram">ig</a>
                    <a href="#tiktok" aria-label="TikTok">t</a>
                </nav>
            </div>
        </div>
    </footer>

    <script src="{{ asset('/front/js/jquery-4.js') }}"></script>

    <script>
        $(document).ready(function () {

            var localeRoute = "{{ route('front.language.switch') }}";

            $('#locale-select').on('change', function () {

                // var locale = $(this).val();
                // var $switcher = $(this).closest('[data-article-switcher]');

                // // Cas 1 : on est sur une page article avec des URLs de traduction connues
                // if ($switcher.length) {
                //     var directUrl = $switcher.data('locale-' + locale);

                //     if (directUrl) {
                //         window.location.href = directUrl;
                //         return;
                //     }

                //     // Pas de traduction disponible : on informe l'utilisateur
                //     // et on ne fait rien (ou on redirige vers la liste des articles)
                //     alert(
                //         locale === 'en'
                //             ? 'This article is not available in English yet.'
                //             : "Cet article n'est pas encore disponible en français."
                //     );
                //     // On remet le select sur la langue actuelle
                //     $(this).val('{{ app()->getLocale() }}');
                //     return;
                // }

                var locale = $(this).val();
                var currentPath = window.location.pathname;

                $.ajax({
                    // url: '/language/switch',
                    url: localeRoute,
                    method: 'POST',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        locale: locale,
                        current_path: currentPath
                    },
                    success: function (response) {
                        window.location.href = response.redirect;
                    },
                    error: function () {
                        alert("Une erreur est survenue lors du changement de langue.");
                    }
                });
            });
        });

    </script>