<?php

namespace App\Http\Controllers;

use App\Models\Cathegorie;
use App\Models\Produit;
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
        return redirect()->back()->with('status','produit ajoute avec succes');
    
    }

    public function afficher_produit(){
        $produits=Produit::all();
        return view('Produits.afficher',compact('produits'));
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
}
