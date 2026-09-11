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
                        <li><a href="{{ route('front.documentation') }}">Ressources</a></li>
                        <li><a href="{{ route('front.contact') }}">Contact</a></li>
                    </ul>
                </div>

                <div class="footer-column col-md-2 col-lg-2">
                    <h2 class="footer-heading">Accès rapide</h2>
                    <ul class="footer-links">
                        <li><a href="https://docuseal.com/d/4buk6GcKhzBLXb" target="_blank">Devenir client</a></li>
                        <li><a href="{{ route('front.contact') }}">Accès client</a></li>
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