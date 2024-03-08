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
    
    Route::get('receber/multiplicaçao', function (Request $request) {
        $primeiroNumero = $request->input('numero');
        $segundoNumero = $request->input('numerodois');
        $resultado = $primeiroNumero * $segundoNumero;
        return ' O resultado da multiplicação dos numeros: ' .
            $primeiroNumero . " * " . $segundoNumero . ' = ' . $resultado;
    });

    Route::get('receber/media', function (Request $request) {
        $primeiraNota = $request->input('nota1');
        $segundaNota = $request->input('nota2');
        $terceiraNota = $request->input('nota3');
        $quartaNota = $request->input('nota4');
        $quintaNota = $request->input('nota5');
        $resultado = $primeiraNota + $segundaNota + $terceiraNota + $quartaNota + $quintaNota / 5;
        return ' O resultado da media das notas é: ' .  $resultado;
    });

    Route::get('receber/divisao', function (Request $request) {
        $primeiroNumero = $request->input('numero1');
        $segundoNumero = $request->input('numero2');
        $resultado = $segundoNumero / $primeiroNumero;
        return 'O resultado da divisao é:' . $segundoNumero . ' / ' . $primeiroNumero . '=' . $resultado;
    });

    Route::get('receber/dobro', function (Request $request) {
        $primeiroNumero = $request->input('numero1');
        $resultado = $primeiroNumero * 2;
        return ' O dobro do numero ' . $primeiroNumero . ' é igual á:' . $resultado;
    });

    Route::get('receber/area', function (Request $request) {
        $comprimento = $request->input('numero1');
        $largura = $request->input('numero2');
        $resultado = $comprimento * $largura;
        return 'A area do triangulo é' . $resultado;
    });

    Route::get('receber/valor', function (Request $request) {
        $valororiginal = $request->input('valor');
        $porcentagem = $request->input('porcentagem');
        $desconto = $valororiginal * $porcentagem / 100;
        $resultado = $valororiginal  - $porcentagem;
        return 'o resultado é' . $resultado;
    });

    Route::get('receber/salario', function (Request $request) {
        $salario = $request->input('valor');
        $porcentagem = $request->input('porcentagem');
        $aumento = $salario * $porcentagem / 100;
        $resultado = $salario + $aumento;
        return 'O salario inicial é de ' . $salario . ' e receberá um aumento de ' . $aumento . ' e o salaro atual é ' . $resultado;
    });

    Route::get('receber/compra', function (Request $request) {
        $compra = $request->input('valor');
        $pontos = $compra / 10;
        return " A quantidade de pontos que ele terá é " . $pontos;
    });