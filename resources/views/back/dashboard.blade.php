@extends('layouts.back.office')

@section('title', 'Tableau de bord')
@section('page-title', 'Tableau de bord')
@section('page-subtitle', "Vue d'ensemble du site vitrine Impaxis")

@section('content')
                {{-- <div class="stat-grid">
                    <div class="stat-card">
                        <div class="label">Articles publiés</div>
                        <div class="value">8</div>
                        <div class="hint">0 brouillon(s)</div>
                    </div>
                    <div class="stat-card">
                        <div class="label">Articles au total</div>
                        <div class="value">8</div>
                        <div class="hint">Visibles côté site vitrine</div>
                    </div>
                    <div class="stat-card">
                        <div class="label">Membres d’équipe</div>
                        <div class="value">6</div>
                        <div class="hint">Page À propos</div>
                    </div>
                    <div class="stat-card">
                        <div class="label">Comptes admin</div>
                        <div class="value">1</div>
                        <div class="hint">3 catégories</div>
                    </div>
                </div>

                <div class="row g-3">
                    <div class="col-lg-7">
                        <div class="panel h-100">
                            <div class="panel-header">
                                <h2>Derniers articles</h2>
                                <a href="http://impaxis.test/admin/actualities/create" class="btn btn-sm btn-accent">Ajouter</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-admin align-middle mb-0">
                                    <thead>
                                        <tr>
                                            <th>Titre</th>
                                            <th>Langue</th>
                                            <th>Statut</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <strong>Quelques-unes de nos références</strong>
                                                <div class="text-muted small">Sans catégorie</div>
                                            </td>
                                            <td><span class="badge badge-lang">FR</span></td>
                                            <td>
                                                <span class="badge badge-pub">Publié</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="http://impaxis.test/admin/actualities/1/edit" class="btn btn-sm btn-outline-secondary">Modifier</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Première obligation sociale dédiée au logemen...</strong>
                                                <div class="text-muted small">Sans catégorie</div>
                                            </td>
                                            <td><span class="badge badge-lang">FR</span></td>
                                            <td>
                                                <span class="badge badge-pub">Publié</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="http://impaxis.test/admin/actualities/2/edit" class="btn btn-sm btn-outline-secondary">Modifier</a>
                                            </td>
                                            </tr>
                                                                    <tr>
                                                <td>
                                                    <strong>1st Basket Bond related financing in the Regi...</strong>
                                                    <div class="text-muted small">Sans catégorie</div>
                                                </td>
                                                <td><span class="badge badge-lang">FR</span></td>
                                                <td>
                                                                                            <span class="badge badge-pub">Publié</span>
                                                                                    </td>
                                                <td class="text-end">
                                                    <a href="http://impaxis.test/admin/actualities/3/edit" class="btn btn-sm btn-outline-secondary">Modifier</a>
                                                </td>
                                            </tr>
                                                                    <tr>
                                                <td>
                                                    <strong>Titrisation de créances souveraines pour opti...</strong>
                                                    <div class="text-muted small">Sans catégorie</div>
                                                </td>
                                                <td><span class="badge badge-lang">FR</span></td>
                                                <td>
                                                                                            <span class="badge badge-pub">Publié</span>
                                                                                    </td>
                                                <td class="text-end">
                                                    <a href="http://impaxis.test/admin/actualities/4/edit" class="btn btn-sm btn-outline-secondary">Modifier</a>
                                                </td>
                                            </tr>
                                                                    <tr>
                                                <td>
                                                    <strong>Some of our references</strong>
                                                    <div class="text-muted small">Sans catégorie</div>
                                                </td>
                                                <td><span class="badge badge-lang">EN</span></td>
                                                <td>
                                                                                            <span class="badge badge-pub">Publié</span>
                                                                                    </td>
                                                <td class="text-end">
                                                    <a href="http://impaxis.test/admin/actualities/5/edit" class="btn btn-sm btn-outline-secondary">Modifier</a>
                                                </td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="panel h-100">
                            <div class="panel-header">
                                <h2>Équipe récente</h2>
                                <a href="http://impaxis.test/admin/team/create" class="btn btn-sm btn-accent">Ajouter</a>
                            </div>
                            <div class="panel-body">
                                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <img src="http://impaxis.test/assets/image/equipes/momar-ndour.png" alt="Momar NDOUR" width="44" height="44" class="rounded-circle object-fit-cover" style="object-fit:cover;">
                                        <div class="flex-grow-1">
                                            <strong>Momar NDOUR</strong>
                                            <div class="text-muted small">Président Directeur Général · FR</div>
                                        </div>
                                        <a href="http://impaxis.test/admin/team/1/edit" class="btn btn-sm btn-outline-secondary">Éditer</a>
                                    </div>
                                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <img src="http://impaxis.test/assets/image/equipes/ababacar-diaw.png" alt="Ababacar DIAW" width="44" height="44" class="rounded-circle object-fit-cover" style="object-fit:cover;">
                                        <div class="flex-grow-1">
                                            <strong>Ababacar DIAW</strong>
                                            <div class="text-muted small">Administrateur Directeur Général d&#039;Impaxis Securities · FR</div>
                                        </div>
                                        <a href="http://impaxis.test/admin/team/2/edit" class="btn btn-sm btn-outline-secondary">Éditer</a>
                                    </div>
                                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <img src="http://impaxis.test/assets/image/equipes/babacar-ndoye.png" alt="Babacar Ndoye" width="44" height="44" class="rounded-circle object-fit-cover" style="object-fit:cover;">
                                        <div class="flex-grow-1">
                                            <strong>Babacar Ndoye</strong>
                                            <div class="text-muted small">Directeur Général d’Impaxis Asset Management · FR</div>
                                        </div>
                                        <a href="http://impaxis.test/admin/team/3/edit" class="btn btn-sm btn-outline-secondary">Éditer</a>
                                    </div>
                                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <img src="http://impaxis.test/assets/image/equipes/momar-ndour.png" alt="Momar NDOUR" width="44" height="44" class="rounded-circle object-fit-cover" style="object-fit:cover;">
                                        <div class="flex-grow-1">
                                            <strong>Momar NDOUR</strong>
                                            <div class="text-muted small">Chairman and CEO · EN</div>
                                        </div>
                                        <a href="http://impaxis.test/admin/team/4/edit" class="btn btn-sm btn-outline-secondary">Éditer</a>
                                    </div>
                                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <img src="http://impaxis.test/assets/image/equipes/ababacar-diaw.png" alt="Ababacar DIAW" width="44" height="44" class="rounded-circle object-fit-cover" style="object-fit:cover;">
                                        <div class="flex-grow-1">
                                            <strong>Ababacar DIAW</strong>
                                            <div class="text-muted small">Managing Director of Impaxis Securities · EN</div>
                                        </div>
                                        <a href="http://impaxis.test/admin/team/5/edit" class="btn btn-sm btn-outline-secondary">Éditer</a>
                                    </div>
                                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel mt-3">
                    <div class="panel-header">
                        <h2>Accès rapide — site visiteur</h2>
                    </div>
                    <div class="panel-body d-flex flex-wrap gap-2">
                        <a href="http://impaxis.test/fr" target="_blank" class="btn btn-impaxis">Accueil FR</a>
                        <a href="http://impaxis.test/fr/actualities" target="_blank" class="btn btn-outline-secondary">Actualités</a>
                        <a href="http://impaxis.test/fr/a-propos" target="_blank" class="btn btn-outline-secondary">Équipe / À propos</a>
                        <a href="http://impaxis.test/fr/contact" target="_blank" class="btn btn-outline-secondary">Contact</a>
                    </div>
                </div> --}}
@endsection