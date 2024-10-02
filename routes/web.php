<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', action: function()
{
    return 'Rayen Guermazi';
});
Route::get('/etudiant', [EtudiantController::class, "index"]);
//2eme method: Route::resource('etudiant', 'App\Http\Controllers\EtudiantController');