<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which contains the "web" middleware group. Now create something great!
|
*/
Route::middleware(['web'])->name('front.')->group(function () {
    require __DIR__.'/front/front.php';
});


require __DIR__.'/auth.php';
