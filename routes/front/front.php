<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\ManagerController;
use App\Http\Controllers\Front\ServiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which contains the "web" middleware group. Now create something great!
|
*/
 
Route::get('/', [ManagerController::class, 'index'])->name('welcome');
Route::get('/notre-societe', [ManagerController::class, 'notreSociete'])->name('notre-societe');
Route::get('/services', [ManagerController::class, 'services'])->name('services');
Route::get('/service/{slug}', [ServiceController::class, 'serviceDetails'])->name('service.details');
Route::get('/marches', [ManagerController::class, 'marches'])->name('marches');
Route::get('/actualites', [ManagerController::class, 'actualites'])->name('actualites');
Route::get('/documentation', [ManagerController::class, 'documentation'])->name('documentation');
Route::get('/faq', [ManagerController::class, 'faq'])->name('faq');
Route::get('/contact', [ManagerController::class, 'contact'])->name('contact');