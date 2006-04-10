<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Problemes_problemes;
use Illuminate\Support\Facades\DB;

class ProblemesController extends Controller
{
    //function  qui affiche la liste des problemes
     public function listeProblemes(){
        $pro = response()->json(Problemes_problemes::all(),200);
        return $pro;
    }

     function index() {
        $pro =DB::table('problemes')->get();
        dump($pro);
        return view('InterfaceLara',
            [
                'pro' =>$pro,
            ]
                        );
    }


    //function pour ajouter des donnees dans la table Problemes_problemes 
    public function ajoutProblemes(Request $request){

        /*$request->validate([
            "description"=>"required",
            "solution_id"=>"required",
            "types_id"=>"required",
        ]);
        $problemes = new Problemes_problemesProblemes_problemes;
        $problemes->description = $request->description;
        $problemes->solution_id = $request->solution_id;
        $problemes->types_id = $request->types_id;
        $problemes->save();
        return Response()->json(['message' => 'Problemes_problemesProblemes_problemes Added Successfully'], 200);*/ 
    $pro =Problemes_problemesProblemes_problemes::create($request->all());
    return response($pro);/**/
    }
    //functions de recuperations des Problemes_problemesProblemes_problemes par id
    public function problemesParID($id){
        $pro = Problemes_problemesProblemes_problemes::find($id);
        if (is_null($pro)) {
            return Response()->json(['message' => 'Problemes_problemes introuvables'], 404);
        }
        return $pro;
    }
    // function pour mettre a jour la table Problemes_problemes
    public function misAjourProblemes(Request $request,$id){

        /*
        $probleme = Problemes_problemes::where('id',$id)->exists();
        if ($probleme) {
            $request->validate([
            "description"=>"required",
            "solution_id"=>"required",
            "types_id"=>"required",
        ]);
        $pro = Problemes_problemes::find($id);
        $pro = new Problemes_problemes;
        $pro->description = $request->description;
        $pro->solution_id = $request->solution_id;
        $pro->types_id = $request->types_id;
        $pro->save();  
        return Response()->json(['message' => 'Mis a jour effectues'], 200);
        }else{
             return Response()->json(['message' => 'Problemes_problemes introuvables'], 404);
        }
        */
       $pro->update($request->all);
        return response($pro,201);
    }

    //Suppression de la solution par id
    public function supprimer_probleme($id){
        $pro = Problemes_problemes::find($id);
        if (is_null($pro)) {
            return Response()->json(['message' => 'Problemes_problemes introuvables'], 404);
        }
        $pro->delete();
        return Response()->json(['message' => 'Suppression avec succes'], 404);
    }
}
