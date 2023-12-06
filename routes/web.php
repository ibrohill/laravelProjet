<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApprenantController;
use App\Http\Controllers\FormationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/apprenants',[ApprenantController::class,'liste']);
Route::get('/Ajouter',[ApprenantController::class,'ajouter']);
Route::post('/Ajouter/traitement',[ApprenantController::class,'ajouter_apprenant']);


Route::get('/formations',[FormationController::class,'liste']);
Route::get('/ajouter',[FormationController::class,'ajouter']);
Route::post('/ajouter/traitement',[FormationController::class,'ajouter_formation']);