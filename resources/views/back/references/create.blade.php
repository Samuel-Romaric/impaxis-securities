@extends('layouts.back.office')

@section('title', 'Réferences')
@section('page-title', 'Réferences')
@section('page-subtitle', "Gérer vos différents références sur le site")

@section('content')
<div class="panel">
    <div class="panel-header">
        <h2>Créer une référence</h2>
        <a href="{{ route('admin.references.all') }}" class="btn btn-outline-secondary btn-sm">Retour</a>
    </div>
    <div class="panel-body">
        <form method="POST" action="{{ route('admin.reference.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <div class="col-lg-8">
                    <div class="mb-3">
                        <label class="form-label" for="projet_title">Titre du projet</label>
                        <input type="text" name="projet_title" id="projet_title" class="form-control @error('projet_title') is-invalid @enderror" value="{{ old('projet_title') }}" required>
                        @error('projet_title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="projet_chef">Chef du projet</label>
                        <input type="text" name="projet_chef" id="projet_chef" class="form-control @error('projet_chef') is-invalid @enderror" value="{{ old('projet_chef') }}" required>
                        @error('projet_chef')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="mb-3 col-lg-4">
                            <label class="form-label" for="amount">Montant du projet</label>
                            <input type="text" name="amount" id="amount" class="form-control @error('amount') is-invalid @enderror" value="{{ old('amount') }}">
                            @error('amount')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3 col-lg-4">
                            <label class="form-label" for="devise">Devis du projet</label>
                            <select name="devise" id="devise" class="form-select @error('devise') is-invalid @enderror" >
                                <option value="milliards F CFA" @selected(old('devise') === 'milliards F CFA')>milliards F CFA</option>
                                <option value="millions F CFA" @selected(old('devise') === 'millions F CFA')>millions de F CFA</option>
                            </select>
                            @error('devise')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3 col-lg-4">
                            <label class="form-label" for="periode">Periode</label>
                            <input type="text" name="periode" id="periode" class="form-control @error('periode') is-invalid @enderror" value="{{ old('periode') }}">
                            @error('periode')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="mb-3">
                        <label class="form-label" for="lang">Langue</label>
                        <select name="lang" id="lang" class="form-select @error('lang') is-invalid @enderror" required>
                            <option value="fr" @selected(old('lang', 'fr') === 'fr')>Français</option>
                            <option value="en" @selected(old('lang') === 'en')>English</option>
                        </select>
                        @error('lang')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4 mt-7 form-check form-switch" style="padding-top: 6px">
                        <input type="hidden" name="is_published" value="0">
                        <input class="form-check-input" type="checkbox" role="switch" id="is_published" name="is_published" value="1" @checked(old('is_published'))>
                        <label class="form-check-label" for="is_published">Publier sur le site</label>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="logo_ref">Image de couverture</label>
                        <input type="file" name="logo_ref" id="logo_ref" class="form-control " accept="image/*">
                    </div>
                </div>
            </div>
            
            <div class="d-flex gap-2 mt-3">
                <button type="submit" class="btn btn-accent">Enregistrer</button>
                <a href="{{ route('admin.references.all') }}" class="btn btn-outline-secondary">Annuler</a>
            </div>
        </form>
    </div>
</div>
@endsection