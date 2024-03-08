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

    Route::get('receber/nascimento/cidade', function (Request $request) {
        $nome = $request->input('name');
        $cidade = $request->input('cidade');
        $nascimento = $request->input('nascimento');
    
        return 'Meu nome é' . $nome . ' Minha idade é ' . $nascimento . 'Na cidade de' . $cidade;
    });

    Route::get('receber/soma', function (Request $request) {
        $primeironumero = $request->input('numero');
        $segundonumero = $request->input('numerodois');
        $resultado = $primeironumero + $segundonumero;
        return ' O resultado da soma dos numeros: ' .
            $primeironumero . ' + ' . $segundonumero . ' = ' . $resultado;
    });

    Route::get('receber/subtracao', function (Request $request) {
        $primeiroNumero = $request->input('numero');
        $segundoNumero = $request->input('numerodois');
        $resultado = $primeiroNumero - $segundoNumero;
        return 'O resultado da subtrcao dos numeros: ' .
            $primeiroNumero . ' - ' . $segundoNumero . ' = ' . $resultado;
    });

    Route::get('receber/divisao', function (Request $request) {
        $primeiroNumero = $request->input('numero');
        $segundoNumero = $request->input('numerodois');
        $resultado = $primeiroNumero / $segundoNumero;
        return ' O resultado da divisão dos numeros: ' .
            $primeiroNumero . '/' . $segundoNumero . '=' . $resultado;
    });
    