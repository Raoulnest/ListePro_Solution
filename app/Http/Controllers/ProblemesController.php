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
    //function qui affiche la liste des problemes avec GUI
    public function index() {
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
    public function listeParOrdreLimites($attribut, $ordre, $debut, $limites){
        $pro = DB::table('problemes_problemes')->orderBy($attribut, $ordre)->offset($debut-1)->limit($limites)->get();
            return $pro;
    }
}
