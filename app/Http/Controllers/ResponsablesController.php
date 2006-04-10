<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Responsables_responsables;

class ResponsablesController extends Controller
{
    public $nom, $lieu;
     public function listeAgents(){
        return response()->json(Responsables_responsables::all(),200);
    }

    //function pour ajouter des donnees dans la table Responsables_responsablesResponsables_responsables 
    public function ajoutAgents(Request $request){
        //validation
       /* $request->validate([
            "nom"=>"required",
            "codeIn"=>"required",
        ]);
        $ag = new Responsables_responsablesResponsables_responsables;
        $ag->nom =$request->nom;
        $ag->codeIn =$request->codeIn;
        $ag->save();
        //session()->flash('message', 'Ajout avec succees');    
        return response()->json(['message' => 'New responsable Added Successfully'], 200);*/
        $ag = Responsables_responsablesResponsables_responsables::create($request->all());
        return response($ag,201);
    }
    // function pour mettre a jour la table Agents_respo
    public function misAjourAgents(Request $request){

        $ag = Responsables_responsables::find($id);
        if (is_null($ag)) {
            return Response()->json(['message' => 'Agents_respo introuvables'], 404);
        }
        $ag->update($request->all);
        return response($ag,201);
    }
    //functions de recuperations des Agents_respo par id
    public function agentParID($id){
        $ag = Responsables_responsables::find($id);
        if (is_null($ag)) {
            return Response()->json(['message' => 'Agents_respo introuvables'], 404);
        }
        return $ag;
    }
    // Suppression d'un agent responsable dans la table agent_respo
    public function supprimer_agent($id){
        $ag = Responsables_responsables::find($id);
        if (is_null($ag)) {
            return Response()->json(['message' => 'Agents_respo introuvables'], 404);
        }
        $ag->delete();
        return response(Null, 204);
    }
}
