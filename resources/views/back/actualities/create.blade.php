@extends('layouts.back.office')

@section('title', 'Actualités')
@section('page-title', 'Actualités')
@section('page-subtitle', "Gérer vos actualités sur le site")

@section('content')
<div class="panel">
    <div class="panel-header">
        <h2>Créer un article</h2>
        <a href="{{ route('admin.actualities.all') }}" class="btn btn-outline-secondary btn-sm">Retour</a>
    </div>
    <div class="panel-body">
        <form method="POST" action="{{ route('admin.actuality.store') }}" enctype="multipart/form-data">
            @csrf
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
                        <label class="form-label" for="content">Contenu</label>
                        <textarea name="content" id="content" rows="12" class="form-control @error('content') is-invalid @enderror" required>{{ old('content') }}</textarea>
                        @error('content')
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
                        <label class="form-label" for="category_id">Catégorie</label>
                        <select name="category_id" id="category_id" class="form-select @error('category_id') is-invalid @enderror" required>
                            <option value="">— Sélectionner —</option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}" @selected(old('category_id') == $item->id)>{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 form-check form-switch">
                        <input type="hidden" name="is_published" value="0">
                        <input class="form-check-input" type="checkbox" role="switch" id="is_published" name="is_published" value="1" @checked(old('is_published'))>
                        <label class="form-check-label" for="is_published">Publier sur le site</label>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="post_cover">Image de couverture</label>
                        <input type="file" name="post_cover" id="post_cover" class="form-control " accept="image/*">
                    </div>
                </div>
            </div>
            <div class="d-flex gap-2 mt-3">
                <button type="submit" class="btn btn-accent">Enregistrer</button>
                <a href="{{ route('admin.actualities.all') }}" class="btn btn-outline-secondary">Annuler</a>
            </div>
        </form>
    </div>
</div>
@endsection


