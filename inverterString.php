<?php

/**
 * The function should expect a string and return it backwards.
 * Ex: input: "foo" - output: "oof"
 *
 * A função deverá receber uma string e retornar a mesma invertida.
 * Ex: input: "bar" - output: "rab"
 *
 * @param string $string
 * @return string
 */

function inverterString(string $string):string
{
    return strrev($string);
}

$str = inverterString("bar");

print($str . PHP_EOL);