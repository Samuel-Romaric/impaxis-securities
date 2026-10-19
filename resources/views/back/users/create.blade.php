@extends('layouts.back.office')

@section('title', 'Utilisateurs')
@section('page-title', 'Utilisateurs')
@section('page-subtitle', "Gérer vos différents utilisateurs sur le site")

@section('content')
<div class="panel" style="max-width:720px">
    <div class="panel-header">
        <h2>Ajouter un nouvel utilisateur</h2>
        <a href="{{ route('admin.users.all') }}" class="btn btn-outline-secondary btn-sm">Retour</a>
    </div>
    <div class="panel-body">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <div class="fw-semibold mb-1"><i class="bi bi-exclamation-triangle me-2"></i>Veuillez corriger les erreurs suivantes :</div>
                <ul class="mb-0 ps-4">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.users.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label class="form-label" for="name">Nom</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-12"><hr></div>

                {{-- <div class="col-md-12">
                    <p class="text-muted small mb-0">Changer le mot de passe (optionnel)</p>
                </div> --}}

                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-accent">Enregistrer les modifications</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection