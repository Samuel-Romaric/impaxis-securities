    <header>
        <div class="topbar">
            <div class="container d-flex justify-content-between align-items-center">
                <a class="topbar-link topbar-link--client" href="{{ route('front.devenir-client') }}">Devenir client</a>
                <div class="d-flex align-items-center gap-3">
                    {{-- <form action="">
                        <select class="topbar-link" id="language-select" class="form-select form-select-sm" aria-label="Choisir la langue">
                            <option value="fr" selected>Français</option>
                            <option value="en">English</option>
                        </select>
                    </form> --}}
                    <a class="topbar-link" href="#" aria-label="Choisir la langue">Français <span class="ms-1" aria-hidden="true">&#9662;</span></a>
                    <a class="topbar-link topbar-link--login" href="#">Accès client</a>
                </div>
            </div>
        </div>

        <nav class="mainnav navbar navbar-light navbar-expand-lg" aria-label="Navigation principale">
            <div class="container">
                <a class="brand navbar-brand m-0" href="{{ url('/') }}" aria-label="Impaxis Securities - Accueil">
                    <img class="img-fluid brand-img logo" src="{{ asset('front/assets/images/logo-impaxis.png') }}" alt="Impaxis Securities" srcset="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-navigation" aria-controls="main-navigation" aria-expanded="false" aria-label="Ouvrir le menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="main-navigation">
                    <ul class="navbar-nav align-items-lg-center"> 
                        <li class="nav-item"><a class="nav-link  {{ activeRoute('front.welcome') }}" aria-current="page" href="{{ url('/') }}">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link {{ activeRoute('front.notre-societe') }}" href="{{ route('front.notre-societe') }}">Notre Société</a></li>
                        <li class="nav-item"><a class="nav-link {{ activeRoute('front.services') }}" href="{{ route('front.services') }}">Services</a></li>
                        <li class="nav-item"><a class="nav-link {{-- activeRoute('front.marches') --}}" href="javascript:void(0){{-- route('front.marches') --}}">Marchés</a></li>
                        <li class="nav-item"><a class="nav-link {{ activeRoute('front.actualites') }}" href="{{ route('front.actualites') }}">Actualités</a></li>
                        <li class="nav-item"><a class="nav-link {{ activeRoute('front.documentation') }}" href="{{ route('front.documentation') }}">Documentation</a></li>
                        <li class="nav-item"><a class="nav-link {{ activeRoute('front.faq') }}" href="{{ route('front.faq') }}">FAQ</a></li>
                        <li class="nav-item"><a class="nav-link nav-link--contact {{ activeRoute('front.contact') }}" href="{{ route('front.contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>