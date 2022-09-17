<?php

/**
 * @param array $notas
 * @return int|bool
 */
function mediaSimples(array $integers): int | bool
{
    if (sizeof($integers) < 3) {
        return false;
    }

    $med = 0;
    foreach ($integers as $value) {
        $med = $med + $value;
    }
    $med = $med/sizeof($integers);
    
    return $med;
}

$med = mediaSimples([4,6,8]);

print($med . PHP_EOL);

$med = mediaSimples([1,2]);

print($med . PHP_EOL);