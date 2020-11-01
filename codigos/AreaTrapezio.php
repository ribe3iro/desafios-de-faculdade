<?php

// Variáveis
$trapezio = array("baseMaior" => 0,
                  "baseMenor" => 0,
                  "altura" => 0);

// Leitura dos dados
$argumentos_invalidos = true;
if( $argc == count($trapezio)+1 ){

    $argumentos_invalidos = false;
    reset($trapezio);
    for($i = 1; $i <= count($trapezio); $i++){  // lendo os dados passados por argumento
        $argumento = $argv[$i];
        if( !is_numeric($argumento) || $argumento <= 0){
            $argumentos_invalidos = true;
            break;
        }
        $dado = key($trapezio);  // key do elemento a ser salvo
        $trapezio[$dado] = $argumento;
        next($trapezio);
    }
}

if($argumentos_invalidos){  // lendo dados pelo console

    print("Argumentos inválidos!\n");
    reset($trapezio);
    for($i = 0; $i < 3; $i++){
        $dado = key($trapezio);  // key do elemento a ser lido
        $numero = readline("Digite o valor da $dado: ");
        if( !is_numeric($numero) || $numero <= 0 ){
            print("Valor inválido! Redigite\n");
            $i--;
            continue;
        }
        $trapezio[$dado] = $numero;
        next($trapezio);
    }
}

// Cálculo da área
$baseMaior = $trapezio["baseMaior"];
$baseMenor = $trapezio["baseMenor"];
$altura = $trapezio["altura"];

$area = ($baseMaior + $baseMenor) * $altura / 2;
print("A área do trapézio é: $area\n");
