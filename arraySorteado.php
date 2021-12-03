<?php

function popularArray(array $array, int $total = 20){
    for ($i = 0; $i <= $total; $i++){
        $array[] = rand(1, 9);
    }
    return $array;
}

/**
 * Função para imprimir o número mais repetido de um array
 */
function verificarNumerosArray(): void {

    $array = array();
    $array = popularArray($array, 5);

    $res = array_count_values($array);
    asort($res);
    $res = array_reverse($res, true);

    $num = array_key_first($res);
    $ocorrencias = $res[$num];

    echo implode(' - ', $array) . PHP_EOL;
    echo "O número que mais se repete é ${num} com ${ocorrencias} ocorrências";
}

verificarNumerosArray();