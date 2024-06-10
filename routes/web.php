<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CathegorieController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
// partie cathegorie
Route::get('ajouter_cathegorie',[CathegorieController::class,'ajouter_cathegorie']);
Route::post('sauvegarder_categorie',[CathegorieController::class, 'sauvegarder_categorie']);
Route::get('afficher_cathegorie',[CathegorieController::class, 'afficher_cathegorie']);
Route::get('supprimer/{id}',[CathegorieController::class, 'supprimer_cathegorie'])  ;
Route::get('modifier/{id}',[CathegorieController::class, 'modifer_cathegorie']);
Route::post('sauvegarder_categorie_modification/{id}',[CathegorieController::class, 'sauvegarder_categorie_modification']);
// partie produit
Route::get('ajouter_produit',[ProduitController::class,'ajouter_produit']);
Route::post('sauvegarder_produit',[ProduitController::class, 'sauvegarder_produit']);
Route::get('afficher_produit',[ProduitController::class, 'afficher_produit']);
Route::get('detail/{id}',[ProduitController::class, 'detail_produit']);
Route::get('supprimer/{id}',[ProduitController::class, 'supprmier_produit']);
Route::get('modifier_produit/{id}',[ProduitController::class, 'modifier_produit']);
Route::post('sauvegarder_produit_modification/{id}',[ProduitController::class, 'sauvegarder_produit_modification']);

// partie user
Route::get('inscription',[AuthController::class, 'ajout_user']);
Route::post('sauvegarde_user',[AuthController::class, 'sauvegarde_user']);
Route::get('connexion',[AuthController::class, 'connexion']);
Route::post('verification_connexion',[AuthController::class,'verification_connexion']);
Route::post('deconnexion',[AuthController::class,'deconnexion']);

// passer une commande
Route::get('commander',[CommandeController::class, 'commander']);
Route::post('sauvegarde_commande',[CommandeController::class,'sauvegarde_commande']);
Route::get('liste_commande',[CommandeController::class, 'dashbord']);
Route::get('dashbord',[CommandeController::class, 'dashbord']);


// gestion panier
Route::post('ajouterpanier/{produitId}', [ProduitController::class,'ajouterAuPanier']);
Route::get('panier', [ProduitController::class, 'afficherPanier']);
Route::post('valider',[CommandeController::class,'valider_commande']);
Route::post('supprimerDuPanier/{id}',[ProduitController::class,'annuler']);









