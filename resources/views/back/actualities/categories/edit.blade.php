@extends('layouts.back.office')

@section('title', 'Catégories')
@section('page-title', 'Catégories')
@section('page-subtitle', "Gérer les catégories de vos articles sur le site")

@section('content')
<div class="panel">
    <div class="panel-header">
        <h2>Ajouter nouvelle catégorie</h2>
        <a href="{{ route('admin.actuality.categories.all') }}" class="btn btn-outline-secondary btn-sm">Retour</a>
    </div>
    <div class="panel-body">
        <form method="POST" action="{{ route('admin.actuality.categories.update') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="postCategory_id" value="{{ $postCategory->id }}">
            <div class="row g-3">
                <div class="col-lg-8">
                    <div class="mb-3">
                        <label class="form-label" for="title">Titre</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ $postCategory->name }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="description">Description</label>
                        <textarea name="description" id="description" rows="6" class="form-control @error('description') is-invalid @enderror">{{ $postCategory->description }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3 mt-6 form-check form-switch">
                        <input type="hidden" name="is_active" value="0">
                        <input class="form-check-input" type="checkbox" role="switch" id="is_active" name="is_active" value="1" @checked($postCategory->is_active)>
                        <label class="form-check-label" for="is_active">Activer</label>
                    </div>
                </div>
            </div>
            <div class="d-flex gap-2 mt-3">
                <button type="submit" class="btn btn-accent">Enregistrer</button>
                <a href="{{ route('admin.actuality.categories.all') }}" class="btn btn-outline-secondary">Annuler</a>
            </div>
        </form>
    </div>
</div>
@endsection
