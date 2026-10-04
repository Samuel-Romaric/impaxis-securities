<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Back\Articles\ActualityController;
use App\Http\Controllers\Back\Articles\CategoryController;
use App\Http\Controllers\Back\ManagerController;
use App\Http\Controllers\Back\Reference\ReferenceController;
use App\Http\Controllers\Back\Services\ServiceController;
use App\Http\Controllers\Back\SettingController;

Route::get('dashboard', [ManagerController::class, 'dashboard'])->name('dashboard');

// Route of Post for actuality
Route::get('actualities', [ManagerController::class, 'actualitiesAll'])->name('actualities.all');
Route::get('actuality/create', [ActualityController::class, 'actualityCreate'])->name('actuality.create');
Route::post('actuality/store', [ActualityController::class, 'actualityStore'])->name('actuality.store');
Route::get('actuality/{post_id}/edit/{slug}', [ActualityController::class, 'actualityEdit'])->name('actuality.edit');
Route::post('actuality/update', [ActualityController::class, 'actualityUpdate'])->name('actuality.update');
Route::get('actuality/{post_id}/translate/{slug}', [ActualityController::class, 'actualityTranslate'])->name('actuality.translate');
Route::post('actuality/{post_id}/translate/{slug}/add', [ActualityController::class, 'actualityTranslateAdd'])->name('actuality.translate-add');
Route::delete('actuality/delete', [ActualityController::class, 'actualityDelete'])->name('actuality.delete');

// Route Category Post 
Route::get('articles/categories', [CategoryController::class, 'categoriesAll'])->name('actuality.categories.all');
Route::get('articles/categories/create', [CategoryController::class, 'categoriesCreate'])->name('actuality.categories.create');
Route::post('actuality/categories/store', [CategoryController::class, 'categoryStore'])->name('actuality.categories.store');
Route::get('actuality/categories/{category_id}/edit', [CategoryController::class, 'categoryEdit'])->name('actuality.categories.edit');
Route::post('actuality/categories/update', [CategoryController::class, 'categoryUpdate'])->name('actuality.categories.update');
Route::delete('actuality/categories/delete', [CategoryController::class, 'categoryDelete'])->name('actuality.categories.delete');

// Route of services
Route::get('services', [ManagerController::class, 'servicesAll'])->name('services.all');
Route::get('services/create', [ServiceController::class, 'serviceCreate'])->name('service.create');
Route::post('services/store', [ServiceController::class, 'serviceStore'])->name('service.store');
Route::get('service/{service_id}/edit/{slug}', [ServiceController::class, 'serviceEdit'])->name('service.edit');
Route::post('service/update', [ServiceController::class, 'serviceUpdate'])->name('service.update');
Route::get('service/{service_id}/translate/{slug}', [ServiceController::class, 'serviceTranslate'])->name('service.translate');
Route::post('service/translate/add', [ServiceController::class, 'serviceTranslateAdd'])->name('service.translate-add');
Route::delete('service/delete', [ServiceController::class, 'serviceDelete'])->name('service.delete');

// Route of preferences
Route::get('references', [ManagerController::class, 'referencesAll'])->name('references.all');
Route::get('references/create', [ReferenceController::class, 'referenceCreate'])->name('reference.create');
Route::post('references/store', [ReferenceController::class, 'referenceStore'])->name('reference.store');
Route::get('reference/{ref_id}/edit/{slug}/', [ReferenceController::class, 'referenceEdit'])->name('reference.edit');
Route::post('reference/update', [ReferenceController::class, 'referenceUpdate'])->name('reference.update');
Route::get('reference/{ref_id}/translate/{slug}/', [ReferenceController::class, 'referenceTranslate'])->name('reference.translate');
Route::post('reference/translate/add', [ReferenceController::class, 'referenceTranslateAdd'])->name('reference.translate-add');
Route::delete('reference/delete', [ReferenceController::class, 'referenceDelete'])->name('reference.delete');

/* Route of users */
Route::get('users', [ManagerController::class, 'usersAll'])->name('users.all');

/* Route of profil settings */
Route::get('account/setting', [ManagerController::class, 'showAccountSetting'])->name('account.setting.show');
Route::post('account/update/setting', [SettingController::class, 'updateProfile'])->name('account.setting.update');

// Route of disconnection 
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');