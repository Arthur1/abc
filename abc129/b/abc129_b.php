<?php
/**
 * ABC129
 * B - Balance
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d", $n);
$w = array_map('intval', explode(' ', trim(fgets(STDIN))));

$diff_min = 99999999999;

for ($i = 0; $i < $n - 1; $i++) {
    $sum1 = 0;
    $sum2 = 0;
    for ($j = 0; $j <= $i; $j++) {
        $sum1 += $w[$j];
    }
    for ($j = $i + 1; $j < $n; $j++) {
        $sum2 += $w[$j];
    }
    $diff_min = min($diff_min, abs($sum1 - $sum2)); 
}

echo $diff_min, PHP_EOL;
