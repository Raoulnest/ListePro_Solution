<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProblemesController;
use App\Http\Controllers\SolutionsController;
use App\Http\Controllers\TypesController;
use App\Http\Controllers\ResponsablesController;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('problemes',[ProblemesController::class,'listeProblemes']);
Route::post ('ajout_problemes',[ProblemesController::class,'ajoutProblemes']);
Route::get('problemes/{id}',[ProblemesController::class,'problemesParID']);
Route::post('delete_problemes/{id}',[ProblemesController::class,'supprimer_probleme']);
Route::post('update_problemes/{id}',[ProblemesController::class,'misAjourProblemes']);

Route::get('solutions',[SolutionsController::class,'listeSolutions']);
Route::post ('ajout_solutions',[SolutionsController::class,'ajoutSolutions']);
Route::get('solutions/{id}',[SolutionsController::class,'solutionsParID']);
Route::post('delete_solutions/{id}',[SolutionsController::class,'supprimer_solution']);
Route::post('update_solutions/{id}',[SolutionsController::class,'misAjourSolutions']);


Route::get('types',[TypesController::class,'listeTypes']);
Route::post('ajout_types',[TypesController::class,'ajoutTypes']);
Route::get('types/{id}',[TypesController::class,'typesParID']);
Route::post('delete_types/{id}',[TypesController::class,'supprimer_type']);
Route::post('update_types/{id}',[TypesController::class,'misAjourTypes']);

Route::get('agents',[ResponsablesController::class,'listeAgents']);
Route::post('ajout_agents',[ResponsablesController::class,'ajoutAgents']);
Route::get('agents/{id}',[ResponsablesController::class,'agentParID']);
Route::post('delete_agents/{id}',[ResponsablesController::class,'supprimer_agent']);
Route::post('update_agents/{id}',[ResponsablesController::class,'misAjourAgents']);

