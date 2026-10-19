@extends('layouts.back.office')

@section('title', 'Utilisateurs')
@section('page-title', 'Utilisateurs')
@section('page-subtitle', "Gérer vos différents utilisateurs sur le site")

@push('style')
    <style>
        .dropdown-toggle:after {
            border: 0;
            content: "\e92e";
            float: right;
            font-family: Feather !important;
            margin-left: .255em;
            vertical-align: .255em 3.672px;
            display: none;
        }

        .dropdown-toggle {
            cursor: pointer;
        }

        .dropdown-menu {
            max-height: calc(100vh - 100px);
            overflow-y: auto;
            overflow-x: hidden;
            z-index: 9999;
        }

        .icon-r {
            margin-right: 8px;
        }
    </style>
@endpush

@section('content')
<div class="panel">
    <div class="panel-header">
        <h2>Liste des utilisateurs</h2>
        <a href="{{ route('admin.users.create') }}" class="btn btn-accent">
            <i class="bi bi-plus-lg"></i> Ajouter un utilisateur
        </a>
    </div>
    <div class="panel-body">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
            </div>
        @endif

        <form method="GET" class="filters-bar">
            <input type="text" name="q" value="{{ request('q') }}" class="form-control" placeholder="Rechercher…" style="max-width:220px">
            <select name="lang" class="form-select" style="max-width:140px">
                <option value="">Toutes langues</option>
                <option value="fr" @selected(request('lang') === 'fr')>FR</option>
                <option value="en" @selected(request('lang') === 'en')>EN</option>
            </select>
            <select name="status" class="form-select" style="max-width:160px">
                <option value="">Tous statuts</option>
                <option value="published" @selected(request('status') === 'published')>Publiés</option>
                <option value="draft" @selected(request('status') === 'draft')>Brouillons</option>
            </select>
            <button class="btn btn-impaxis" type="submit">Filtrer</button>
        </form>

        <div class="">
            <table class="table table-admin table-responsive">
                <thead>
                    <tr>
                        <th>Profil</th>
                        <th>Rôle</th>
                        <th>Statut</th>
                        <th>Date d'ajoute</th>
                        <th>Mise à jour</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $item)
                    <tr>
                        <td style="display: flex; align-items: center;">
                            <div>
                                <img src="{{ $item->getCoverFullUrl() }}" alt="" width="40" height="40" style="object-fit:cover;border-radius:.4rem; border-radius: 50%;">
                            </div>
                            <div class="ms-2">
                                <strong>{{ $item->name }}</strong>
                                <p class="text-muted small mb-0">{{ $item->email }}</p>
                            </div>
                        </td>
                        <td>
                            <span class="badge {{ $item->isAdmin() ? 'badge-pub' : 'badge-draft' }} badge-pub">{{ $item->getRole() }}</span>
                        </td>
                        <td>
                            <span class="badge {{ $item->isBlocked() ? 'badge-pub' : 'badge-lang' }} badge-pub">{{ $item->getStatus() }}</span>
                        </td>
                        <td class="text-muted small">{{ $item->created_at->format('d M Y') }}</td>
                        <td class="text-muted small">{{ $item->updated_at->format('d M Y') }}</td>
                        <td class="text-end text-nowrap">
                            <div class="btn-group" style="cursor: pointer;">
                                <div class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </div>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a href="{{ route('admin.users.edit', ['user_id' => $item->id]) }}" class="dropdown-item text-muted"><i class="bi bi-pen icon-r"></i> Modifier</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.users.blocked', ['user_id' => $item->id]) }}" class="dropdown-item text-warning"><i class="bi bi-lock icon-r"></i> Bloquer</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.users.reset', ['user_id' => $item->id]) }}" class="dropdown-item text-warning"><i class="bi bi-arrow-clockwise icon-r"></i> Réinitialiser</a>
                                    </li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><form action="{{ route('admin.users.delete') }}" method="POST" class="d-inline" onsubmit="return confirm('Supprimer cet utilisateur ?')">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="user_id" value="{{ $item->id }}">
                                            <button class="dropdown-item text-danger" type="submit"><i class="bi bi-trash icon-r"></i> Supprimer</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted">Aucun resultat trouvé</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-end mt-3">
            {{ $users->links('pagination::bootstrap-5') }}
        </div>

        <div class="mt-3"></div>
    </div>
</div>
@endsection