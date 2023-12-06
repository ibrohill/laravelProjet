<?php

namespace App\Http\Controllers;

use App\Models\apprenant;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{

    public function liste(){
      $apprenants = Apprenant::all();
      return view('apprenants.apprenants',compact('apprenants'));
    }
    public function ajouter(){
      return view('apprenants.ajouter');
    }

    public function ajouter_apprenant(Request $request){
      $request->validate([
        'nom' => 'required',
        'prenom'=>'required',
        'classe' => 'required',
      ]);
      $apprenant = new apprenant();
      $apprenant->nom=$request->nom;
      $apprenant->prenom=$request->prenom;
      $apprenant->classe=$request->classe;
      $apprenant->save();

      return redirect('/Ajouter')->with('status', 'l\'apprenant a bien ete ajouter avec succes');
    }
}
