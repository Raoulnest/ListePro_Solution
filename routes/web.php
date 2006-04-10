<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProblemesController;
use App\Models\Problemes;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test',[ProblemesController::class,'index']);
