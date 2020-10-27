<?php

$numero = $argv[1];  // $argv[0] é o nome do arquivo, então $argv[1] é o argumento que queremos
for($i = 1; $i <= $numero; $i++){
    print("A tabuada do número $i é:\n");
    for($j = 1; $j <= 10; $j++){
        $resultado = $i*$j;
        print("$i*$j = $resultado\n");
    }
    print("------------\n");
}
