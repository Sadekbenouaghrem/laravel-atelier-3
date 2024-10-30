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
Route::get('/', function (){
    return view('welcome');
});
//Route::resource('etudiant','App\Controllers\EtudiantController');
Route::get('/etudiant', [EtudiantController::class,"index"])->name('etudiant');
Route::get('/create', [EtudiantController::class,"create"])->name('etudiant.create');
Route::get('/create', [EtudiantController::class,"store"])->name('etudiant.ajouter');


Route::put('/etudiant/{etudiant}', [EtudiantController::class,"edit"])->name('etudiant.edit');
Route::put('/etudiant/{etudiant}', [EtudiantController::class,"update"])->name('etudiant.update');

Route::get('/show/{etudiant}', [EtudiantController::class,"show"])->name('etudiant.show');
Route::delete('/delete/{etudiant}',[EtudiantController::class,"delete"])->name('etudiant.delete');



