<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Back\Articles\ActualityController;
use App\Http\Controllers\Back\Articles\CategoryController;
use App\Http\Controllers\Back\ManagerController;
use App\Http\Controllers\Back\Reference\ReferenceController;
use App\Http\Controllers\Back\Services\ServiceController;
use App\Http\Controllers\Back\SettingController;
use App\Http\Controllers\Back\User\UserController;

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
Route::get('services/create', [ServiceController::class, 'serviceCreate'])->name('services.create');
Route::post('services/store', [ServiceController::class, 'serviceStore'])->name('services.store');
Route::get('services/{service_id}/edit/{slug}', [ServiceController::class, 'serviceEdit'])->name('services.edit');
Route::post('services/update', [ServiceController::class, 'serviceUpdate'])->name('services.update');
Route::get('services/{service_id}/translate/{slug}', [ServiceController::class, 'serviceTranslate'])->name('services.translate');
Route::post('services/translate/add', [ServiceController::class, 'serviceTranslateAdd'])->name('services.translate-add');
Route::delete('services/delete', [ServiceController::class, 'serviceDelete'])->name('services.delete');

// Route of preferences
Route::get('references', [ManagerController::class, 'referencesAll'])->name('references.all');
Route::get('references/create', [ReferenceController::class, 'referenceCreate'])->name('references.create');
Route::post('references/store', [ReferenceController::class, 'referenceStore'])->name('references.store');
Route::get('references/{ref_id}/edit/{slug}/', [ReferenceController::class, 'referenceEdit'])->name('references.edit');
Route::post('references/update', [ReferenceController::class, 'referenceUpdate'])->name('references.update');
Route::get('references/{ref_id}/translate/{slug}/', [ReferenceController::class, 'referenceTranslate'])->name('references.translate');
Route::post('references/translate/add', [ReferenceController::class, 'referenceTranslateAdd'])->name('references.translate-add');
Route::delete('references/delete', [ReferenceController::class, 'referenceDelete'])->name('references.delete');

/* Route of profil settings */
Route::get('account/setting', [ManagerController::class, 'showAccountSetting'])->name('account.setting.show');
Route::post('account/update/setting', [SettingController::class, 'updateProfile'])->name('account.setting.update');

/* Route of users */
Route::get('users', [ManagerController::class, 'usersAll'])->name('users.all');
Route::get('users/create', [UserController::class, 'userCreate'])->name('users.create');
Route::post('users/store', [UserController::class, 'userStore'])->name('users.store');
Route::get('users/{user_id}/edit', [UserController::class, 'userEdit'])->name('users.edit');
Route::post('users/update', [UserController::class, 'userUpdate'])->name('users.update');
Route::get('users/{user_id}/blocked', [UserController::class, 'userBlocked'])->name('users.blocked');
Route::get('users/{user_id}/reset', [UserController::class, 'userResetPassword'])->name('users.reset');
Route::delete('users/delete', [UserController::class, 'userDelete'])->name('users.delete');

// Route of disconnection 
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');