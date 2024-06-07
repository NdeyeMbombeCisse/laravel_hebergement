<?php

use App\Http\Controllers\CathegorieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('ajouter_cathegorie',[CathegorieController::class,'ajouter_cathegorie']);
Route::post('sauvegarder_categorie',[CathegorieController::class, 'sauvegarder_categorie']);
Route::get('afficher_cathegorie',[CathegorieController::class, 'afficher_cathegorie']);
Route::get('supprimer/{id}',[CathegorieController::class, 'supprimer_cathegorie']);
Route::get('modifier/{id}',[CathegorieController::class, 'modifer_cathegorie']);
Route::post('sauvegarder_categorie_modification/{id}',[CathegorieController::class, 'sauvegarder_categorie_modification']);

