        <aside class="admin-sidebar" id="adminSidebar">
            <div class="admin-brand">
                <a href="{{ route('admin.dashboard') }}">
                    <img src="http://impaxis.test/assets/logos.png" alt="Impaxis">
                    
                </a>
            </div>

            <nav class="admin-nav">
                <p class="nav-label">Vue d'ensemble</p>
                <a href="{{ route('admin.dashboard') }}" class="nav-item {{ activeRoute('admin.dashboard') }}">
                    <i class="bi bi-speedometer2"></i> Tableau de bord
                </a>

                <p class="nav-label">Contenu du site</p>
                <a href="{{ route('admin.actualities.all') }}" class="nav-item {{ activeRoute('admin.actualities.all') }}">
                    <i class="bi bi-newspaper"></i> Articles
                </a>
                <a href="{{ route('admin.actuality.categories.all') }}" class="nav-item {{ activeRoute('admin.actuality.categories.all') }}">
                    <i class="bi bi-diagram-2"></i> Catégories
                </a>
                <a href="{{ route('admin.services.all') }}" class="nav-item {{ activeRoute('admin.services.all') }}">
                    <i class="bi bi-briefcase"></i> Services
                </a>
                <a href="{{ route('admin.references.all') }}" class="nav-item {{ activeRoute('admin.references.all') }}">
                    <i class="bi bi-flag"></i> Références
                </a>

                {{-- <p class="nav-label">Administration</p>
                <a href="{{ route('admin.users.all') }}" class="nav-item activeRoute('admin.users.all') ">
                    <i class="bi bi-people"></i> Utilisateurs
                </a> --}}
                {{-- <a href="#" class="nav-item ">
                    <i class="bi bi-gear"></i> Mon compte
                </a> --}}
            </nav>

            {{-- <div class="admin-sidebar-footer">
                <a href="{{ route('front.welcome', ['locale' => app()->getLocale()]) }}" target="_blank" class="nav-item">
                    <i class="bi bi-box-arrow-up-right"></i> Voir le site
                </a>
            </div> --}}
        </aside>