<?php
/**
 * ABC126
 * C - Dice and Coin
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d %d", $n, $k);

$total = 0;

for ($i = 1; $i <= $n; $i++) {
    $point = $i;
    $probability = 1 / $n;
    while ($k > $point) {
        $point *= 2;
        $probability *= 1 / 2;
    }
    $total += $probability;
}

echo sprintf('%.12f', $total), PHP_EOL;
