<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{ public function ajout_user(){
    return view('Users.inscription');
}

public function sauvegarde_user(Request $request){
    $request->validate([
        'name'=>'required',
        'password'=>'required|min:6',
        'email'=>'required|email'

    ],[
        'name.required'=>'le champ prenom et nom est requis',
        'email.required'=>'le champ email est requis',
        'password.required'=>'le champ password est requis',
    ]);
    User::create($request->all());
    return redirect()->back()->with('status','utilisateur ajoute avec sucees');
}

    public function connexion(){
        return view('Users.connexion');
    }
    public function verification_connexion(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' =>'required'
        ],
        [
            'email.required'=>'veuillez bien saisir un email valide',
            'password.required'=>'veuillez bien saisir un password valide',
        ]
    );

        if(auth()->attempt($request->only('email','password')))
        {
            return redirect('afficher_produit');
        }else{
            return redirect()->back()->withErrors('vous n\'etes pas autorisée à vous  connecter');
        }
    }


    public function deconnexion(){
        auth()->logout();
        return redirect('afficher_produit');
    }
}




