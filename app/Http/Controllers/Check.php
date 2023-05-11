<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class Check extends Controller
{
    public function checkout(){
        return view('checkout');
    }

    public function login(){
        return view('login');
    }

//     public function register(Request $request)
// {
//     // récupérez les données du formulaire
//     $nom = $request->input('nom');
//     $prenom = $request->input('prenom');
//     $email = $request->input('email');
//     $role = $request->input('role');
//     $contact = $request->input('contact');
//     $password = $request->input('password');

//     // créez une nouvelle instance du modèle utilisateur
//     $utilisateur = new user;

//     // définissez les propriétés de l'utilisateur
//     $utilisateur->nom = $nom;
//     $utilisateur->prenom = $prenom;
//     $utilisateur->email = $email;
//     $utilisateur->role = $role;
//     $utilisateur->contact = $contact;
//     $utilisateur->password = bcrypt($password);

//     // enregistrez l'utilisateur dans la base de données
//     $utilisateur->save();

//     // redirigez l'utilisateur vers une page de confirmation
//     return redirect('/');
// }

}


?>