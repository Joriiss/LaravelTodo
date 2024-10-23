<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/list', function (){
    $name = ["Jean NGO", "Léopold JACQUET", "Joris Rabilloud", "John Doe", "毛泽东"];
    $desc = ["Etudiant", "Professeur", "Directeur", "Inconnu", "Président"];
    return view('list', ["name"=>$name, "desc"=>$desc]);
})->name('list');
