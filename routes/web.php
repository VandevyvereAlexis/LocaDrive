<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// DEFINIT LES ROUTES D'AUTHENTIFICATION
Auth::routes();


// ROUTE PAGE D'ACCUEIL (pour accès au site, si pas inscrit)
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// ROUTE PAGE D'ACCUEIL
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// RESSOURCE POUR LA GESTION DES UTILISATEURS (à l'exception de index, create et store)
Route::resource('/user', App\Http\Controllers\UserController::class)->except('index', 'create', 'store');


