<?php

namespace App\Http\Controllers;

use App\Models\Commande;
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
    // $commande->notify(new NouvelleCommandeNotification());
    return redirect('afficher_produit')->with('status','produit commande avec succes');
}
public function dashbord(){
    return view('Commandes.dashbord');
}

}