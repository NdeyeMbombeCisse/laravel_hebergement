<?php

namespace App\Http\Controllers;

use App\Models\Cathegorie;
use App\Models\Produit;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function ajouter_produit(){
        $cathegories=Cathegorie::all(); 
        return view('Produits.ajouter',compact('cathegories'));
    }
    public function sauvegarder_produit(Request $request){
        $request -> validate([
            'reference'=>'required',
            'designation'=>'required',
            'etat'=>'required',
            'prix_unitaire'=>'required',
            'url_img'=>'required',
            
            
        ],
        // affichage des ereurs en francais 
         [
            'reference.required' =>'veuillez bien mettre une reference pour ce produit',
            'designation.required'=>'veuillez bien mettre une designation pour ce produit',
            'etat.required'=>'veuillez bien mettre une etat pour ce produit',
            'prix_unitaire.required'=>'veuillez bien mettre une prix_unitaire pour ce produit',
            'url_img.required'=>'veuillez bien mettre une url_img pour ce produit',

        ]

    );
        Produit::create($request->all());
        return redirect('afficher_produit')->with('status','produit ajoute avec succes');
    
    }

    public function afficher_produit(){
        $users=User::all();
        $produits=Produit::all();
        return view('Produits.afficher',compact('produits','users'));
    }

    public function detail_produit($id){
        $produit=Produit::find($id);
        return view('Produits.detail',compact('produit'));
    }
    public function supprmier_produit($id){
        $produit=Produit::find($id);
        $produit->delete();
        return redirect()->back();
    }
    public function modifier_produit($id){
        $cathegories=Cathegorie::all();
        $produit=Produit::find($id);
        return view('Produits.modifier',compact('produit','cathegories'));
    }

    public function sauvegarder_produit_modification(Request $request,$id){
        $produit=Produit::find($id);
        $produit->update($request->all());
        return redirect('afficher_produit')->with('status','produit modifie avec succes');
    }
    // page pour le user simple
    public function user_simple(){
        $users=User::all();
        $produits=Produit::all();
        return view('Produits.user_simple',compact('produits','users'));
    }


   // gestion de panier

   public function ajouterAuPanier(Request $request, $produitId)
   {
       $produit = Produit::find($produitId);

       if (!$produit) {
           return redirect()->back()->with('error', 'Produit non trouvé.');
       }

       $panier = session()->get('panier');

       // Ajouter le produit au panier
       $panier[] = [
           'id' => $produit->id,
           'nom' => $produit->reference,
           'prix' => $produit->prix_unitaire,
           // Vous pouvez ajuster la quantité selon vos besoins
       ];

       session()->put('panier', $panier);

       return redirect()->back()->with('success', 'Produit ajouté au panier avec succès.');
   }

   public function afficherPanier()
   {


       $panier = session()->get('panier', []);

       return view('panier')->with('panier', $panier);
   }

   public function annuler($produitId)
    {
        $panier = session()->get('panier', []);

        foreach ($panier as $index => $item) {
            if ($item['id'] == $produitId) {
                unset($panier[$index]);
                break;
            }
        }

        session()->put('panier', $panier);

        return redirect()->back()->with('success', 'Produit supprimé du panier avec succès.');
    }
}
