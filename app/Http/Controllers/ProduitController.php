<?php

namespace App\Http\Controllers;

use App\Models\Cathegorie;
use App\Models\Produit;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProduitController extends Controller
{
    public function ajouter_produit(){
        $cathegories=Cathegorie::all(); 
        return view('Produits.ajouter',compact('cathegories'));
    }
    // public function sauvegarder_produit(Request $request){
    //     $request -> validate([
    //         'reference'=>'required',
    //         'designation'=>'required',
    //         'etat'=>'required',
    //         'prix_unitaire'=>'required',
    //         'url_img'=>'required',
            
            
    //     ],
    //     // affichage des ereurs en francais 
    //      [
    //         'reference.required' =>'veuillez bien mettre une reference pour ce produit',
    //         'designation.required'=>'veuillez bien mettre une designation pour ce produit',
    //         'etat.required'=>'veuillez bien mettre une etat pour ce produit',
    //         'prix_unitaire.required'=>'veuillez bien mettre une prix_unitaire pour ce produit',
    //         'url_img.required'=>'veuillez bien mettre une url_img pour ce produit',

    //     ]

    // );
    //     Produit::create($request->all());
    //     return redirect('afficher_produit')->with('status','produit ajoute avec succes');
    
    // }

    public function sauvegarder_produit(Request $request)
    {
        $request->validate([
            'reference' => 'required|string',
            'designation' => 'required|string',
            'cathegorie_id' => 'required|exists:cathegories,id',
            'prix_unitaire' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'etat' => 'required|string',
        ]);
    
        // Upload de l'image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $imageUrl = Storage::url($imagePath);
        } else {
            $imageUrl = null;
        }
    
        // Création du produit avec l'image
        Produit::create([
            'user_id' => $request->user_id,
            'reference' => $request->reference,
            'designation' => $request->designation,
            'cathegorie_id' => $request->cathegorie_id,
            'prix_unitaire' => $request->prix_unitaire,
            'url_img' => $imageUrl,
            'etat' => $request->etat,
        ]);
    
        return redirect('afficher_produit')->with('status', 'Produit ajouté avec succès.');
    }

    public function afficher_produit(){
        $users=User::all();
        $categories=Cathegorie::take(4)->get();
        $produits = Produit::take(8)->get();
        // $produits = Produit::all();
        return view('Produits.afficher',compact('produits','users','categories'));
    }

    public function detail_produit($id){
        $produit=Produit::find($id);
        return view('Produits.detail',compact('produit'));
    }
    public function supprmier_produit($id) {
        // Supprimer les références dans la table de liaison produit_commandes
        DB::table('produit_commandes')->where('produit_id', $id)->delete();
    
        // Trouver le produit par son ID
        $produit = Produit::find($id);
    
        // Vérifier si le produit existe
        if ($produit) {
            // Supprimer le produit
            $produit->delete();
        }
    
        // Rediriger vers la page précédente (back)
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
        // $produits=Produit::all();
        $produits = Produit::take(8)->get();
        $cathegories=Cathegorie::all();

        return view('Produits.user_simple',compact('produits','users','cathegories'));
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
       $totalPrix = array_sum(array_column($panier, 'prix'));

    // Mettre à jour la session avec le total des prix
    session()->put('totalPrix', $totalPrix);
        // Compter le nombre d'éléments dans le panier
    $nombreElementsPanier = count($panier);

    // Mettre à jour la session avec le nombre d'éléments dans le panier
    session()->put('nombreElementsPanier', $nombreElementsPanier);

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

    // Réindexer le tableau pour éviter les trous dans les clés du tableau
    $panier = array_values($panier);

    // Mettre à jour la session avec le nouveau panier
    session()->put('panier', $panier);

    // Calculer le total des prix
    $totalPrix = array_sum(array_column($panier, 'prix'));

    // Mettre à jour la session avec le total des prix
    session()->put('totalPrix', $totalPrix);

    // Mettre à jour le nombre d'éléments dans le panier
    session()->put('nombreElementsPanier', count($panier));

    return redirect()->back()->with('success', 'Produit supprimé du panier avec succès.');
}

}
