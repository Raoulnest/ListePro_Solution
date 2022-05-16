<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solutions;

class SolutionsController extends Controller
{

    //functions qui affiche la liste des solutions
    public function listeSolutions(){

        return response()->json(Solutions::all(),200);
    }
        //function pour ajouter des donnees dans la table solution 
        public function ajoutSolutions(Request $request){

        $request->validate([
            "description"=>"required",
            "respo_id"=>"required",
            "types_id"=>"required",
        ]);
        $solutions = new Solutions;
        $solutions->description = $request->description;
        $solutions->respo_id =$request->respo_id;
        $solutions->types_id =$request->types_id;
        $solutions->save();
        //session()->flash('message', 'Ajout avec succees');    
        return response()->json(['message' => 'Solutions Added Successfully'], 200);
        //$sol = Solutions::create($request->all());
       // return response($sol);
    }
    //Declarations des variables 
    public $titre, $desription, $agent_id, $types_id;
    //functions de recuperations des solutions par id
    public function solutionsParID($id){
        $sol = Solutions::find($id);
        if (is_null($sol)) {
            return Response()->json(['message' => 'Solutions introuvables'], 404);
        }
        return $sol;
    }
    //function pour mettre a jour la table solution
    public function misAjourSolutions(Request $request){

        $sol = Solutions::find($id);
        if (is_null($sol)) {
            return Response()->json(['message' => 'Solutions introuvables'], 404);
        }
        $sol->update($request->all);
        return response($sol,201);
    }
    //Suppression de la solution par id
    public function supprimer_solution($id){
        $sol = Solutions::find($id);
        if (is_null($sol)) {
            return Response()->json(['message' => 'Solutions introuvables'], 404);
        }
        $sol->delete();
        return response(Null, 204);
    }
}
