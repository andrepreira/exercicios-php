<?php

/**
 * The function must return the full credit card number. The card number is a multiple of 123457 and the Luhn check digit is valid.
 * The Card Number must have the following pattern: 543210******1234
 *
 * Descubra o número do cartão de crédito abaixo sabendo que o mesmo é um multiplo de 123457 e o digito de luhn é válido.
 * O Número do cartão deve ter o seguinte padrão: 543210******1234
 *
 * @return string
 */

function encontrarNumeroCartao(): string
{   $cont = 0;
    while ($a = true) {
        $cont+=1;
        if ($cont % 123457 == 0) {
            // echo $cont;
            $string = '543210'.strval($cont).'1234';
            $array = str_split($string);
            $array = array_map('intval', $array);

            for ($i=0; $i < sizeof($array); $i++) { 
                if($i % 2 == 0){
                    $array[$i] = 2*$array[$i];
                }
            }

            if (array_sum($array) % 10 == 0) {
                echo print($cont) . PHP_EOL;
                break;
            }
        }
    }

    return '543210'.$cont .'1234';
}


$numeroCartao = encontrarNumeroCartao();

print('numero cartao: ' . $numeroCartao) . PHP_EOL;