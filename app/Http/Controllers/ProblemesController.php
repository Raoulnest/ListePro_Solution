<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Problemes;

class ProblemesController extends Controller
{
    //public $titre, $desription, $solutions_id, $types_id;
    //function  qui affiche la liste des problemes
     public function listeProblemes(){
        $pro = response()->json(Problemes::all(),200);

        return $pro;
    }
    //function pour ajouter des donnees dans la table Problemes 
    public function ajoutProblemes(Request $request){

        $request->validate([
            "description"=>"required",
            "solution_id"=>"required",
            "types_id"=>"required",
        ]);

        $problemes = new Problemes;
        $problemes->titre =$request->titre;
        $problemes->description = $request->description;
        $problemes->solution_id = $request->solution_id;
        $problemes->types_id = $request->types_id;
        $problemes->save();    
    return Response()->json(['message' => 'Problemes Added Successfully'], 200);

    //$pro =Problemes::create($request->all());
        //return response($pro);/**/

    }
    //functions de recuperations des Problemes par id
    public function problemesParID($id){
        $pro = Problemes::find($id);
        if (is_null($pro)) {
            return Response()->json(['message' => 'Problemes introuvables'], 404);
        }
        return $pro;
    }
    // function pour mettre a jour la table Problemes
    public function misAjourProblemes(Request $request){

        $pro = Problemes::find($id);
        if (is_null($pro)) {
            return Response()->json(['message' => 'Problemes introuvables'], 404);
        }
        $pro->update($request->all);
        return response($pro,201);
    }

    //Suppression de la solution par id
    public function supprimer_probleme($id){
        $pro = Problemes::find($id);
        if (is_null($pro)) {
            return Response()->json(['message' => 'Problemes introuvables'], 404);
        }
        $pro->delete();
        return response(Null, 204);
    }
}
