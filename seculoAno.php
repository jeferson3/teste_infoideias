<?php

/**
 * Função para retornar o século do ano
 *
 * @param int|null $ano
 * @return string
 */
function seculoAno(?int $ano): string {

    if (is_null($ano) || strlen($ano) !== 4) return "Informe um ano válido";
    return "Século: " . ceil($ano / 100);
}
echo seculoAno(2021);