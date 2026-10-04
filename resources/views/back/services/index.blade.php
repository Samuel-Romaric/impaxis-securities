@extends('layouts.back.office')

@section('title', 'Services')
@section('page-title', 'Services')
@section('page-subtitle', "Gérer vos différents services sur le site")

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
        <h2>Liste des articles</h2>
        <a href="{{ route('admin.service.create') }}" class="btn btn-accent">
            <i class="bi bi-plus-lg"></i> Ajouter un service
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

        <div class="table-responsive">
            <table class="table table-admin">
                <thead>
                    <tr>
                        <th>Couverture</th>
                        <th>Titre</th>
                        <th>Short descript.</th>
                        <th>Langue</th>
                        <th>Statut</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($services as $item)
                    <tr>
                        <td>
                            <img src="{{ $item->getCoverFullUrl() }}" alt="" width="56" height="40" style="object-fit:cover;border-radius:.4rem;">
                        </td>
                        <td>
                            <strong>{{ Str::limit($item->title, 20, '...') }}</strong>
                        </td>
                        <td>{{ Str::limit($item->short_description, 30, '...') }}</td>
                        <td><span class="badge badge-lang">{{ $item->lang }}</span></td>
                        <td>
                            <span class="badge {{ $item->status === 'published' ? 'badge-pub' : 'badge-draft' }} badge-pub">{{ $item->getStatus() }}</span>
                        </td>
                        <td class="text-muted small">{{ $item->created_at->format('d M Y') }}</td>
                        <td class="text-end text-nowrap">
                            <div class="btn-group">
                                <div class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </div>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('admin.service.edit', ['service_id' => $item->id, 'slug' => $item->slug]) }}" class="dropdown-item text-muted"><i class="bi bi-pen icon-r"></i> Modifier</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.service.translate', ['service_id' => $item->id, 'slug' => $item->slug]) }}" class="dropdown-item text-muted"><i class="bi bi-translate icon-r"></i> Traduire</a>
                                    </li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><form action="{{ route('admin.service.delete') }}" method="POST" class="d-inline" onsubmit="return confirm('Supprimer cett catégorie ?')">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="service_id" value="{{ $item->id }}">
                                            <button class="dropdown-item text-danger" type="submit"><i class="bi bi-trash icon-r"></i> Supprimer</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            
                            {{-- <a href="{{ route('admin.service.edit', ['service_id' => $item->id, 'slug' => $item->slug]) }}" class="btn btn-sm btn-outline-secondary"><i class="bi bi-pen"></i></a>
                            <form action="{{ route('admin.service.delete') }}" method="POST" class="d-inline" onsubmit="return confirm('Supprimer cet service ?')">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="service_id" value="{{ $item->id }}">
                                <button class="btn btn-sm btn-outline-danger" type="submit"><i class="bi bi-trash"></i></button>
                            </form>
                            <a href="{{ route('admin.service.translate', ['service_id' => $item->id, 'slug' => $item->slug]) }}" class="btn btn-sm btn-outline-warning"><i class="bi bi-translate"></i></a> --}}
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
            {{ $services->links('pagination::bootstrap-5') }}
        </div>

        <div class="mt-3"></div>
    </div>
</div>
@endsection