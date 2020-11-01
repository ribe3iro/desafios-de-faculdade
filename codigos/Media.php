<?php

// Variáveis
$notas = $argv;
$quantidadeNotas = $argc;
$soma = 0;

// Cálculo da média
for($i=1; $i < $quantidadeNotas; $i++){
    $soma += $notas[$i];
}

$media = $soma/($quantidadeNotas-1);  // descontando o nome do arquivo (primeiro argumento)
print("Média -> $media\n");
