<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Types_types;

class TypesController extends Controller
{
    public $libelle;
    //functions qui affiche la liste des types
    public function listeTypes(){
        return response()->json(Types_types::all(),200);
    }
    //function pour ajouter des donnees dans la table types 
    public function ajoutTypes(Request $request){

        //validation
       /* $request->validate([
            "libelle"=>"required",
        ]);

        //$tp = DB::insert('insert into types (id, libelle,created_at,updated_at) values (?, ?, ?, ?)', ['', '$request->libelle'],'', '');
        //return $tp;
        $tp = new Types_types;
        $tp->libelle =$request->libelle;
        $tp->save();   
        return response()->json(['message' => 'Types_types Added Successfully'], 200);
        */
        $tp = Types_types::create($request->all());
        return response($tp,201);
    }
    // function pour mettre a jour la table types
    public function misAjourTypes(Request $request){

        $tp = Types_types::find($id);
        if (is_null($tp)) {
            return Response()->json(['message' => 'Types_types introuvables'], 404);
        }
        $tp->update($request->all);
        return response($tp,201);
    }
    //functions de recuperations des types par id
    public function typesParID($id){
        $tp = Types_types::find($id);
        if (is_null($tp)) {
            return Response()->json(['message' => 'Types_types introuvables'], 404);
        }
        return $tp;
    }

    public function supprimer_type($id){
        $tp = Types_types::find($id);
        if (is_null($tp)) {
            return Response()->json(['message' => 'Types_types introuvables'], 404);
        }
        $tp->delete();
        return response(Null, 204);
    }
}