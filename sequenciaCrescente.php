<?php

/**
 * Função para checar se o array tem uma sequência válida
 *
 * @param array $array
 * @return bool
 */
function checarArray(array $array): bool
{
//    sort($array);
    for ($i = 0; $i < count($array) - 1; $i++) {
        if ($array[$i] >= $array[$i + 1]) return false;
    }
    return true;
}

/**
 * Função para verificar uma sequência crescente em um array
 *
 * @param array $array
 * @return bool
 */
function sequenciaCrescente(array $array): bool
{

    // verifica se o array tem números iguais e retorna true
    if (array_count_values($array)[$array[0]] == count($array)) return true;

    // percorre o array
    foreach ($array as $key => $value) {

        // cria um novo array retirando um item do array original a cada iteração
        $novoArray = $array;
        unset($novoArray[$key]);

        // verifica se o novo array existe uma sequência válida, se achar pelo menos uma sequencia válida, retorna true
        if (checarArray(array_values($novoArray))) return true;
    }

    // se não achar nenhuma sequencia retorna false
    return false;
}

// lista de arrays para teste
$arrays = [
    [1, 3, 2, 1],
    [1, 3, 2],
    [1, 2, 1, 2],
    [3, 6, 5, 8, 10, 20, 15],
    [1, 1, 2, 3, 4, 4],
    [1, 4, 10, 4, 2],
    [10, 1, 2, 3, 4, 5],
    [1, 1, 1, 2, 3],
    [0, -2, 5, 6],
    [1, 2, 3, 4, 5, 3, 5, 6],
    [40, 50, 60, 10, 20, 30],
    [1, 1],
    [1, 2, 5, 3, 5],
    [1, 2, 5, 5, 5],
    [10, 1, 2, 3, 4, 5, 6, 1],
    [1, 2, 3, 4, 3, 6],
    [1, 2, 3, 4, 99, 5, 6],
    [123, -17, -5, 1, 2, 3, 12, 43, 45],
    [3, 5, 67, 98, 3]
];

echo "<div style='width:600px; margin: 0 auto; display: flex; justify-content: space-around'><div style='display: block; width: 45%; font-family: monospace; margin: 1em 0;'>
<p>Resultado Algoritmo</p><br>";

foreach ($arrays as $array){
    echo '<p style="margin: 0; padding: 0; text-align: left;">
            <span>' .
                json_encode($array) .
            '</span><strong style="float: right">' . (sequenciaCrescente($array) ? 'true' : 'false') . '</strong></p>';
}

echo "</div>
<pre>
<p>Resultado esperado</p>
[1,3,2,1]                     <strong>false</strong>
[1,3,2]                       <strong>true</strong>
[1,2,1,2]                     <strong>false</strong>
[3,6,5,8,10,20,15]            <strong>false</strong>
[1,1,2,3,4,4]                 <strong>false</strong>
[1,4,10,4,2]                  <strong>false</strong>
[10,1,2,3,4,5]                <strong>true</strong>
[1,1,1,2,3]                   <strong>false</strong>
[0,-2,5,6]                    <strong>true</strong>
[1,2,3,4,5,3,5,6]             <strong>false</strong>
[40,50,60,10,20,30]           <strong>false</strong>
[1,1]                         <strong>true</strong>
[1,2,5,3,5]                   <strong>true</strong>
[1,2,5,5,5]                   <strong>false</strong>
[10,1,2,3,4,5,6,1]            <strong>false</strong>
[1,2,3,4,3,6]                 <strong>true</strong>
[1,2,3,4,99,5,6]              <strong>true</strong>
[123,-17,-5,1,2,3,12,43,45]   <strong>true</strong>
[3,5,67,98,3]                 <strong>true</strong>
</pre></div>";

