@extends('layouts.back.office')

@section('title', 'Services')
@section('page-title', 'Services')
@section('page-subtitle', "Gérer vos différents services sur le site")

@section('content')
<div class="panel">
    <div class="panel-header">
        <h2>Créer un service</h2>
        <a href="{{ route('admin.services.all') }}" class="btn btn-outline-secondary btn-sm">Retour</a>
    </div>
    <div class="panel-body">
        <form method="POST" action="{{ route('admin.service.translate-add') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="service_id" value="{{ $service->id }}">
            <div class="row g-3">
                <div class="col-lg-8">
                    <div class="mb-3">
                        <label class="form-label" for="title">Titre</label>
                        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="description">Description</label>
                        <textarea name="description" id="description" rows="12" class="form-control @error('description') is-invalid @enderror" required>{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
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

                    <div class="mb-3">
                        <label class="form-label" for="short_description">Short descripton</label>
                        <textarea name="short_description" id="short_description" rows="3" class="form-control @error('short_description') is-invalid @enderror" required>{{ old('short_description') }}</textarea>
                        @error('short_description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="class">Ajouter fond blue</label>
                        <select name="class" id="class" class="form-select @error('class') is-invalid @enderror" >
                            <option value="" @selected($service->class === '')>Aucun background</option>
                            <option value="service-card--blue" @selected($service->class === 'service-card--blue')>Backgound blue</option>
                        </select>
                        @error('class')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 form-check form-switch">
                        <input type="hidden" name="is_published" value="0">
                        <input class="form-check-input" type="checkbox" role="switch" id="is_published" name="is_published" value="1" @checked('is_published')>
                        <label class="form-check-label" for="is_published" @checked('is_published')>Publier sur le site</label>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="post_cover">Image de couverture</label>
                        <input type="file" name="service_cover" id="service_cover" class="form-control " accept="image/*">
                    </div>
                </div>
            </div>
            <div class="d-flex gap-2 mt-3">
                <button type="submit" class="btn btn-accent">Enregistrer</button>
                <a href="{{ route('admin.services.all') }}" class="btn btn-outline-secondary">Annuler</a>
            </div>
        </form>
    </div>
</div>
@endsection