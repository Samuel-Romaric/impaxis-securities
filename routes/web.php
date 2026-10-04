<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;


/* 
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which contains the "web" middleware group. Now create something great!
|
*/
/* Front office Route */
Route::prefix('{locale}')
    ->where(['locale' => 'fr|en'])
    ->middleware(['web', 'setLocale'])
    ->name('front.')->group(function () {
        require __DIR__.'/front/front.php';
});

// Redirection de la racine vers la langue active (session ou défaut)
Route::get('/', function () {
    $locale = session('locale', config('app.fallback_locale'));
    return redirect("/{$locale}");
});

// Route pour changer la langue (appelée en AJAX/jQuery)
Route::post('/language/switch', [LanguageController::class, 'switch'])->name('front.language.switch');

/* Backoffice Route */
// $appUrl = parse_url(config('app.url'), PHP_URL_HOST);
// Route::domain('admin.' . $appUrl)->name('admin.')->group(function () {
Route::name('admin.')->group(function () {

    Route::middleware(['guest'])->group(function () {
        require __DIR__.'/auth.php';
    });
    
    Route::middleware(['auth'])->group(function () {
        require __DIR__.'/back/backoffice.php';
    });
});

