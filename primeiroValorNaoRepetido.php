<?php

/**
 * The function must expect an array of integers and return the first non-repeated value.
 * Ex: input: [2,2,3,1,1,6] - output: 3
 *
 * A função irá receber um array de inteiros e retornar o primeiro elemento não repetido.
 * Ex: input: [2,2,3,1,1,6] - output: 3
 *
 * @param array $array - Array contendo inteiros
 * @return int
 */

function primeiroValorNaoRepetido(array $array): int
{   
    $array = array_count_values($array);
    foreach ($array as $key => $value) {
        if ($value == 1) {
            return $key;
        }
    }
}

$n = primeiroValorNaoRepetido([2,2,3,1,1,6]);

print($n . PHP_EOL);