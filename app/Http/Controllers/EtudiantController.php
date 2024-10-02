<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index()
    {
        $nom='Guermazi'; $prenom='Rayen';
        return view('etudiant',compact('nom', 'prenom'));
        // return view('etudiant', ['nom'=>$nom, 'prenom'=>$prenom,])
    }
}
