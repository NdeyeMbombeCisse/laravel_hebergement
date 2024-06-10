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
public function sauvegarde_commande(Request $request){
    $data = $request->all();
    $data['user_id'] = auth()->id();  
    $commande=Commande::create($data);
    $commande->produits()->attach($request->product_ids);
    return redirect('afficher_produit')->with('status','produit commande avec succes');
}
public function dashbord(){
    $commandes=Commande::all();
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

        return redirect('panier')->with('success', 'Commande validée avec succès.');
    }

}




