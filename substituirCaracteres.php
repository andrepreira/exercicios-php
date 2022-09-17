<?php

/**
 * The function must replace all the vowels with '?' and return the result string
 * Ex: input: 'Foo' - output: 'F??'
 *
 * A função deverá receber uma string e substituir todas as vogais da mesma pelo sinal '?'
 * Ex: input: 'Bar' - output: 'B?r'
 *
 * @param string $string
 * @return string
 */

function substituirCaracteres(string $string): string
{
    $vogais = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");

    $string = str_replace($vogais,"?", $string);

    return $string;
}

$str = substituirCaracteres("Bar");

print($str . PHP_EOL);