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

Route::get('/multiplicar', function () {
    $primeiroNumero = 10;
    $segundoNumero = 20;
    $resultado = $primeiroNumero * $segundoNumero;
    return ' O resultado da multiplicação dos numeros: ' .
        $primeiroNumero . ' x ' . $segundoNumero . ' = ' . $resultado;
    });

    Route::get('/alterar', function () {
        $nome = 'gatinha';
        $nome = 'Minha gatinha';
        return $nome;
    });

    Route::get('receber/nome', function (Request $request) {
        $nome = $request->input('name');
        return $nome;
    });

    Route::get('receber/nome/idade', function (Request $request) {
        $nome = $request->input('name');
        $idade = $request->input('idade');
        return 'Meu nome é Ana ' . $nome . ' Minha idade é ' . $idade;
    });