@extends('layouts.back.office')

@section('title', 'Utilisateurs')
@section('page-title', 'Utilisateurs')
@section('page-subtitle', "Gérer vos différents utilisateurs sur le site")

@section('content')
<div class="panel">
    <div class="panel-header">
        <h2>Modifier un service</h2>
        <a href="{{ route('admin.services.all') }}" class="btn btn-outline-secondary btn-sm">Retour</a>
    </div>
    <div class="panel-body">
        <form method="POST" action="{{ route('admin.account.setting.update') }}" class="row g-3">
            @csrf
            <div class="col-md-6">
                <label class="form-label" for="name">Nom</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user->name) }}" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label class="form-label" for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user->email) }}" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12"><hr></div>

            <div class="col-md-12">
                <p class="text-muted small mb-0">Changer le mot de passe (optionnel)</p>
            </div>

            <div class="col-md-4">
                <label class="form-label" for="current_password">Mot de passe actuel</label>
                <input type="password" name="current_password" id="current_password" class="form-control @error('current_password') is-invalid @enderror" autocomplete="current-password" placeholder="**************************">
                @error('current_password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-4">
                <label class="form-label" for="password">Nouveau mot de passe</label>
                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" autocomplete="new-password" placeholder="**************************">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-4">
                <label class="form-label" for="password_confirmation">Confirmation</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password') is-invalid @enderror" autocomplete="new-password" placeholder="**************************">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-accent">Enregistrer les modifications</button>
            </div>
        </form>

        <div class="mt-3"></div>
    </div>
</div>

@endsection