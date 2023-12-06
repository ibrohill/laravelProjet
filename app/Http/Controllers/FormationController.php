<?php

namespace App\Http\Controllers;

use App\Models\formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    
    public function liste(){
        $formations = Formation::all();
        return view('formations.formations',compact('formations'));
      }
      public function ajouter(){
        return view('formations.ajouter');
      }
  
      public function ajouter_formation(Request $request){
        $request->validate([
          'nom' => 'required',
          'ecole' => 'required',
          'filiere'=>'required',
          
        ]);
        $formation = new formation();
        $formation->nom=$request->nom;
        $formation->ecole=$request->ecole;
        $formation->filiere=$request->filiere;
        $formation->save();
  
        return redirect('/ajouter')->with('status', 'la formation a bien ete ajouter avec succes');
      }
}
