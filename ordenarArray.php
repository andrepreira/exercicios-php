<?php
/**
 * The function must expect an array of integers and sort it in ascending order
 * Ex: Input: [5,1,0,7,3,3] - Output: [0,1,3,3,5,7]
 *
 * A função deverá receber um array de inteiros como parâmetro e deverá retornar o mesmo array ordenado em ordem crescente.
 * Ex: Input: [5,1,0,7,3,3] - Output: [0,1,3,3,5,7]
 *
 * @param array $array - Array a ser ordenado
 * @return array
 */

function ordenarArray(array $array): array
{
    sort($array, SORT_NUMERIC);

    return $array;
}

var_dump([5,1,0,7,3,3]);

$array = ordenarArray([5,1,0,7,3,3]);

var_dump($array);
