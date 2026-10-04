            <header class="admin-topbar">
                <button type="button" class="btn btn-icon sidebar-toggle" id="sidebarToggle" aria-label="Menu">
                    <i class="bi bi-list"></i>
                </button>
                <div class="topbar-title">
                    <h1>@yield('page-title')</h1>
                    <p>@yield('page-subtitle')</p>
                </div>
                <div class="topbar-actions">
                    <div class="dropdown">
                        <button class="user-chip dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            <span class="avatar">A</span>
                            <span class="user-meta">
                                <strong>{{ Auth::user()->name }}</strong>
                                <small>{{ Auth::user()->email }}</small>
                            </span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('admin.account.setting.show') }}">
                                <i class="bi bi-person me-2"></i>Mon compte</a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form method="POST" action="{{ route('admin.logout') }}">
                                    @csrf                                   
                                    <button type="submit" class="dropdown-item text-danger">
                                        <i class="bi bi-box-arrow-right me-2"></i>Déconnexion
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </header>