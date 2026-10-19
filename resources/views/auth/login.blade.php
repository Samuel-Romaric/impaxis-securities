@extends('layouts.back.app')

@section('title', 'Connexion')

@push('style')
    <style>
        .invalid-feedback {
            display: block;
        }

        .invalid-feedback {
            color: #dc3545; /* Couleur rouge pour les messages d'erreur */
            font-size: 0.875rem; /* Taille de police légèrement plus petite */
            margin-top: 0.25rem; /* Espacement au-dessus du message d'erreur */
        }
        /* .invalid-feedback::before {
            content: "⚠ "; // Ajoute un symbole d'avertissement avant le message 
        } */
    </style>
@endpush


@section('content')

    <div class="mb-4">
        <h1 class="h2 fw-bold mb-1">Espace de connexion</h1>
        <p class="text-muted">Accédez à la gestion de votre site web.</p>
    </div>

    <form {{--id="loginForm" --}} method="POST" action="{{ route('admin.login.store') }}">
        @csrf
        <!-- Champ Email -->
        <!-- Champ Email -->
        <div class="form-floating mb-3">
            <input type="email" name="email"
                class="form-control @error('email') is-invalid @enderror"
                id="floatingInput" placeholder="Adresse email"
                value="{{ old('email') }}" required>
            <label for="floatingInput">Adresse email</label>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Champ Mot de passe -->
        <div class="form-floating mb-3">
            <input type="password" name="password"
                class="form-control @error('password') is-invalid @enderror"
                id="floatingPassword" placeholder="Mot de passe" required>
            <label for="floatingPassword">Mot de passe</label>
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <!-- Options supplémentaires -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="form-check">
                <input class="form-check-input" name="remember" type="checkbox" value="true" id="rememberMe">
                <label class="form-check-input-label" for="rememberMe">
                    Se souvenir de moi
                </label>
            </div>
            <a href="#" class="text-decoration-none small">Mot de passe oublié ?</a>
        </div>

        <!-- Bouton de connexion -->
        <button class="w-100 btn btn-accent mb-3" type="submit">Se connecter</button>
                            
        <!-- Lien d'inscription -->
        <p class="text-center text-muted small">Vous n'avez pas de compte ? <a href="#" class="text-decoration-none">S'inscrire</a></p>
    </form>
@endsection

@push('script')
    
@endpush 