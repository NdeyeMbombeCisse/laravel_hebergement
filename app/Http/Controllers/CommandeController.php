<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Commande;
use App\Models\Produit;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
public function commander(){
    $user = auth()->user();
    return view('Commandes.commander',compact('user'));
}
// public function sauvegarde_commande(Request $request){
//     $data = $request->all();
//     $data['user_id'] = auth()->id();  
//     $commande=Commande::create($data);
//     $commande->produits()->attach($request->product_ids);
//     return redirect('afficher_produit')->with('status','produit commande avec succes');
// }

public function sauvegarde_commande(Request $request) {
    // Récupérer toutes les données de la requête
    $data = $request->all();
    
    // Ajouter l'ID de l'utilisateur authentifié aux données
    $data['user_id'] = auth()->id();
    
    // Créer la commande avec les données
    $commande = Commande::create($data);
    
    // Attacher les produits à la commande
    $commande->produits()->attach($request->product_ids);
    
    // Vider et réinitialiser le panier de la session
    session()->forget('panier');
    session()->forget('nombreElementsPanier');
    
    // Vous pouvez aussi réinitialiser les valeurs du panier comme ceci
    session()->put('panier', []);
    session()->put('nombreElementsPanier', 0);
    
    // Rediriger vers la page d'affichage des produits avec un message de succès
    return redirect('afficher_produit')->with('status', 'Produit commandé avec succès');
}

public function dashbord(){
    // $commandes=Commande::all();
    $commandes = Commande::paginate(10);
    return view('Commandes.dashbord',compact('commandes'));
}

public function valider_commande(Request $request){
    
    
    // Récupérer l'utilisateur connecté
    $user = auth()->user();
    // Générer une référence unique pour la commande (exemple)
    $reference = 'CMD_' . uniqid();

    // Récupérer les détails de la commande depuis la session du panier
    $panier = session()->get('panier');

    // Calculer le montant total de la commande
    $montantTotal = 1;
    foreach ($panier as $item) {
        $montantTotal += $item['prix'] * $montantTotal;
    }

    // Enregistrer la commande dans la base de données
    $commande = new Commande();
    $commande->user_id = $user->id;
    $commande->montant_total = $montantTotal;
    $commande->reference = $reference;
    $commande->save();
    // $commande=Commande::create($request->all());
    // Enregistrer les détails des produits de la commande dans une table de liaison (si nécessaire)
    foreach ($panier as $item) {
        $commande->produits()->attach($item['id']);
    }

    // Effacer la session du panier une fois la commande validée
    session()->forget('panier');
     session(['nombreElementsPanier' => 0]);

    return redirect('panier')->with('status', 'Commande validée avec succès.');
}


    }

    
        
    






