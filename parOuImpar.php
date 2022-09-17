<?php

/**
 * The function should expect an array containing integers greater than zero and return the amount of even values contained in it.
 * Ex: input: [1,2,3,4,5] - output: 2
 *
 * Recebe um array de inteiros maiores que zero e retorna a quantidade de números pares existentes no array
 * Ex: input: [1,2,3,4,5] - output: 2
 *
 * @param array $array
 * @return int
 */
function parOuImpar(array $arrNumero): int 
{
    $cont_par = 0;
    foreach ($arrNumero as $value) {
        if($value % 2 == 0){
            $cont_par += 1;
        }
    }
    return $cont_par;
}


$n = parOuImpar([1,2,3,4,5]);

print($n . PHP_EOL);