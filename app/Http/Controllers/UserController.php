<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View{
        $name = ["Jean NGO", "Léopold JACQUET", "Joris Rabilloud", "John Doe", "毛泽东"];
        $desc = ["Etudiant", "Professeur", "Directeur", "Inconnu", "Président"];
        return view('list', ["name"=>$name, "desc"=>$desc]);
    }
}
