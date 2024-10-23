<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', function () {
    return 'sadek ben ouaghrem';
});
Route::get('/etudiant', function () {
    return view('etudiant');
});
Route::get('/etudiant', function () {
    $nom ='Ben Ouaghrem ';
    $prenom='sadek';
    return view('etudiant',compact('nom','prenom'));
});
atelier 1
*/
Route::get('/', function (){
    return view('welcome');

});
Route::get('/etudiant', [EtudiantController::class,"index"]);
Route::get('/',function(){
    return view('welcome');
});
Route::resource('etudiant','App\Http\Controllers\EtudiantController');
