<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cathegorie;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CathegorieController extends Controller
{
    public function ajouter_cathegorie(){
        // return view('Cathegories.ajouter');
        return view('Cathegories.afficher');
    }

    public function sauvegarder_categorie(Request $request){
        $request->validate([
            'libelle'=>'required'

        ],
    [
        'libelle.required' =>'le libelle de la categorie est acquis'
    ]);

    $categorie=Cathegorie::create($request->all());
    return redirect()->back()->with('status','cathegorie ajoutee avec succes');

    }
    public function afficher_cathegorie(){
        $cathegories=Cathegorie::all();
        return view('Cathegories.afficher',compact('cathegories'));

    }

    public function afficher_cathegorie_acceuil(){
        $cathegories=Cathegorie::all();
        return view('Produits.afficher',compact('cathegories'));
        return view('Produits.user_simple',compact('cathegories'));


    }

    public function detail_cathegorie($id){
         $categorie = Cathegorie::findOrFail($id);
    $produits = Produit::where('cathegorie_id', $id)->get();
    return view('Cathegories.fruit', compact('categorie','produits'));
       
    }
    public function detail_cathegoriepersonnel($id)
    {
        $categorie = Cathegorie::findOrFail($id);
        $produits = Produit::where('cathegorie_id', $id)->get();
        return view('Cathegories.detailperso', compact('categorie', 'produits'));
    }
    public function supprimer_cathegorie($id){
        DB::table('produit_commandes')->where('produit_id', $id)->delete();

        $cathegorie=Cathegorie::find($id);
        $cathegorie->delete();
        return redirect()->back()->with('status');
    }
    public function modifer_cathegorie($id){
        $cathegorie=Cathegorie::find($id);
        return view('Cathegories.modifier',compact('cathegorie'));
        
    }

    public function sauvegarder_categorie_modification(Request $request,$id){
        $cathegorie=Cathegorie::find($id);
        $cathegorie->update($request->all());
        return redirect('afficher_cathegorie');
        
    }
}
