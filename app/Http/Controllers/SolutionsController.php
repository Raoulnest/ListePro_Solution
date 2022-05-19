<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solutions_solutions;

class SolutionsController extends Controller
{
    public $titre, $desription, $agent_id, $types_id;

    //functions qui affiche la liste des solutions
    public function listeSolutions(){
        return response()->json(Solutions_solutions::all(),200);
    }

    //function pour ajouter des donnees dans la table solution 
    public function ajoutSolutions(Request $request){
    $sol = Solutions_solutions::create($request->all());
        return response($sol);
    }

    //Declarations des variables 

    //functions de recuperations des solutions par id
    public function solutionsParID($id){
        $sol = Solutions_solutions::find($id);
            if (is_null($sol)) {
                return Response()->json(['message' => 'Solutions_solutions introuvables'], 404);
            }
        return $sol;
    }

    //function pour mettre a jour la table solution
    public function misAjourSolutions(Request $request,$id){
        $sol = Solutions_solutions::find($id);
        if (is_null($sol)) {
            return Response()->json(['message' => 'Solutions_solutions introuvables'], 404);
        }
        $sol->update($request->all);
        return response($sol,201);
    }
    
    //Suppression de la solution par id
    public function supprimer_solution($id){
        $sol = Solutions_solutions::find($id);
        if (is_null($sol)) {
            return Response()->json(['message' => 'Solutions_solutions introuvables'], 404);
        }
        $sol->delete();
        return response(Null, 204);
    }
    public function listeParOrdreLimites($attribut, $ordre, $debut, $limites){
        $sol = DB::table('solutions_solutions')->orderBy($attribut, $ordre)->offset($debut-1)->limit($limites)->get();
            return $sol;
    }
}
