@extends('layouts.back.office')

@section('title', 'Catégories')
@section('page-title', 'Catégories')
@section('page-subtitle', "Gérer les catégories de vos articles sur le site")

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

        .icon-r {
            margin-right: 8px;
        }
    </style>
@endpush

@section('content')
<div class="panel">
    <div class="panel-header">
        <h2>Liste des catégories</h2>
        <a href="{{ route('admin.actuality.categories.create') }}" class="btn btn-accent">
            <i class="bi bi-plus-lg"></i> Ajouter
        </a>
    </div>
    <div class="panel-body">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-triangle me-2"></i>{{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
            </div>
        @endif

        {{-- <form method="GET" class="filters-bar">
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
        </form> --}}

        <div class="table-responsive">
            <table class="table table-admin">
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Statut</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $item)
                    <tr>
                        <td>
                            <strong>{{ $item->name }}</strong>
                        </td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <span class="badge {{ $item->status === 'is_active' ? 'badge-pub' : 'badge-draft' }} badge-pub">{{ $item->getStatus() }}</span>
                        </td>
                        <td class="text-muted">{{ $item->created_at->format('d M Y') }}</td>
                        <td class="text-end text-nowrap">

                            <div class="btn-group">
                                <div class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </div>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('admin.actuality.categories.edit', ['category_id' => $item->id]) }}" class="dropdown-item text-muted"><i class="bi bi-pen icon-r"></i> Modifier</a>
                                    </li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><form action="{{ route('admin.actuality.categories.delete') }}" method="POST" class="d-inline" onsubmit="return confirm('Supprimer cett catégorie ?')">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="postCategory_id" value="{{ $item->id }}">
                                            <button class="dropdown-item text-danger" type="submit"><i class="bi bi-trash icon-r"></i> Supprimer</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>

                            {{-- <a href="{{ route('admin.actuality.categories.edit', ['category_id' => $item->id]) }}" class="btn btn-sm btn-outline-secondary"><i class="bi bi-pen"></i></a>
                            <form action="{{ route('admin.actuality.categories.delete') }}" method="POST" class="d-inline" onsubmit="return confirm('Supprimer cett catégorie ?')">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="postCategory_id" value="{{ $item->id }}">
                                <button class="btn btn-sm btn-outline-danger" type="submit"><i class="bi bi-trash"></i></button>
                            </form> --}}
                        </td>
                    </tr>
                    @empty
                        <div><p>Aucune donnée trouvée</p></div>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-3"></div>
    </div>
</div>
@endsection