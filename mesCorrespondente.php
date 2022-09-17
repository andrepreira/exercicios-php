<?php

/**
 *
 * @param int $month
 * @return string
 */
function mesCorrespondente(int $mes): string 
{
    switch ($mes) {
        case $mes == 1:
            return "Janeiro";
        case $mes == 2:
            return "Fevereiro";
        case $mes == 3:
            return "Março";
        case $mes == 4:
            return "Abril";
        case $mes == 5:
            return "Maio";
        case $mes == 6:
            return "Julho";
        case $mes == 6:
            return "Junho";
        case $mes == 7:
            return "Julho";
        case $mes == 8:
            return "Agosto";
        case $mes == 9:
            return "Setembro";
        case $mes == 10:
            return "Outubro";
        case $mes == 11:
            return "Novembro";
        case $mes == 12:
            return "Dezembro";
        case !in_array($mes, array(1,2,3,4,5,6,7,8,9,10,11,12)):
            return "Mês Desconhecido";

        default:
            return "Essa função aceita apenas números inteiros!";
      }
  }


$resp1 = mesCorrespondente(1);

print($resp1 . PHP_EOL);

$resp2 = mesCorrespondente(13);

print($resp2 . PHP_EOL);

$resp2 = mesCorrespondente(-1);

print($resp2 . PHP_EOL);