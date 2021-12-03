<?php

/**
 * Função para verificar se é primo
 *
 * @param int $num
 * @return bool
 */
function ePrimo(int $num): bool {
    $count = 0;
    for ($i = 1; $i <= $num; $i++){
        if (($num % $i) == 0) $count += 1;
    }
    return $count === 2;
}

/**
 * Função para retornar o maior primo inferior de um número
 *
 * @param int $num
 * @return int
 */
function primoInferior(int $num): int {

    if ($num <= 0) return 0;

    $num -= 1;
    if (ePrimo($num)) return $num;
    return primoInferior($num);
}

echo primoInferior(30);