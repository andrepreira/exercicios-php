<?php

/**
 * Your function need to read the file data.dat and return how many lines there are where the number of 0's is a multiple of 3 or the numbers of 1s is a multiple of 2.
 *
 * A função deverá ler o arquivo data.dat e retornar o número de linhas que atende pelo menos uma das condições abaixo:
 * 1 - A quantidade de números zeros na linha é um multiplo de 3
 * 2 - A quantidade de números 1 é um multiplo de 2
 *
 * @return int
 */

function manipulacaoArquivo(): int
{
    $myfile = fopen("data.dat", "r") or die("Unable to open file!");
    $cont_zero = 0;
    $cont_um = 0;
    $conta_resultado = 0;
    while(!feof($myfile)) {
        if(fgetc($myfile) == 0){
            $cont_zero+=1;
            if($cont_zero % 3 == 0){
                $conta_resultado+=1;
            }
        } elseif (fgetc($myfile) == 1) {
            $cont_um+=1;
            if($cont_um % 2 == 0){
                $conta_resultado+=1;
            }
        }
    }
    
    fclose($myfile);
    return $conta_resultado;
}   


$res = manipulacaoArquivo();

print($res . PHP_EOL);