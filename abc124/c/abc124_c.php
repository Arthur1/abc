<?php
/**
 * ABC124
 * C - Coloring Colorfully
 */

$s = trim(fgets(STDIN));
$length = strlen($s);

$count0 = 0;
$count1 = 0;

// 0101010..
for ($i = 0; $i < $length; $i++) {
    if (($i % 2 === 0) and ($s[$i] !== '0')) {
        $count0++;
    } elseif (($i % 2 === 1) and ($s[$i] !== '1')) {
        $count0++;
    }
}

// 1010101..
for ($i = 0; $i < $length; $i++) {
    if (($i % 2 === 0) and ($s[$i] === '0')) {
        $count1++;
    } elseif (($i % 2 === 1) and ($s[$i] === '1')) {
        $count1++;
    }
}
 
echo min($count0, $count1), PHP_EOL;
