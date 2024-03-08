<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/frase', function () {
    return 'Minha cidade é Presidente Epitácio';
});

Route::get('/variavel', function () {
    $nome = 'Ana';
    $sobrenome = ' Hipólito';
    return $nome . ' ' . $sobrenome;
});