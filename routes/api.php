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

    return 'Meu nome é' . $nome . ' Meu nascimento é ' . $nascimento . 'Na cidade de' . $cidade;
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

Route::get('receber/comissao', function (Request $request) {
    $vendas = $request->input('valor');
    $porcentagem = $request->input('porcentagem');
    $comissao = $vendas * $porcentagem / 100;
    return " A comissão dele é" . $comissao;
});

Route::get('receber/horas', function (Request $request) {
    $numerodeDias = $request->input('valor');
    $horas = $numerodeDias * 24;
    $minutos = $horas * 60;
    $segundos = $minutos * 60;
    return ' Em ' . $numerodeDias . ' dias' . ' há ' . $horas . ' horas ' . $minutos . ' minutos ' . ' e ' . $segundos . ' segundos .';
});

Route::get('receber/produto', function (Request $request) {
    $preço = $request->input('valor');
    $compra = $request->input('valor2');
    $totalcompra = $preço * $compra;
    return ' o total da compra é ' .  $totalcompra;
});

Route::get('exemplo/condicao', function (Request $request) {
    $idade = $request->input('idade');
    $retorno = ";";
    if ($idade >= 18) {
        $retorno = " Maior de idade";
    } else {
        $retorno = "Menor de idade";
    }
    return $retorno;
});

Route::get('verifica/idade', function (Request $request) {
    $idade = $request->input('idade');
    if ($idade > 18) {
        return "maior de idade";
    } else {
        return " maior de idade";
    }
});

Route::get('verificar/par', function (Request $request) {
    $numero = $request->input('numero');

    if ($numero % 2 == 0) {
        return 'par';
    } else {
        return 'impar';
    }
});

Route::get('verificar/mensagem', function (Request $request){
 $numero = $request->input('numero');
if($numero > 10) {
    return " maior que 10 ";
} else {
    return ' menor que 10';
}
});

Route::get('verificar/temperatura', function (Request $request){
$numero= $request->input('numero');
 if ($numero > 30) {
    return 'A temperatura é de ' . $numero . " °C, está quente ";
 } else {
    return ' A temperatura é de' . $numero . ' °C';
 }

}) ;

Route::get('verificar/numero', function (Request $request){
    $numero=$request->input('numero');
    if ($numero > 0) {
        return ' Positivo ';
       } else if ( $numero == 0) {
        return " Igual a zero";
    } else {
        return ' Negativo ';
    }
});

Route::get('verificar/dois/numeros', function (Request $request){
    $numero01=$request->input('numero01');
    $numero02=$request->input('numero02');
     if ($numero01 > $numero02) {
        return ' O maior numero é ' . $numero01 ;
     } else {
        return ' o maior numero é ' . $numero02;
     }
});

 Route::get('divisivel', function(Request $request){
    $numero=$request->input('numero');
    if ($numero % 3  ==  0){
        return ' É dividisivel por três ';
    } else {
        return ' Nâo é divisivel por três ';
    }
 });