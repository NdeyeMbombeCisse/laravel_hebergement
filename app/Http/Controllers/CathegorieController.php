<?php

namespace App\Http\Controllers;

use App\Models\Cathegorie;
use Illuminate\Http\Request;

class CathegorieController extends Controller
{
    public function ajouter_cathegorie(){
        return view('Cathegories.ajouter');
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
    public function supprimer_cathegorie($id){
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
