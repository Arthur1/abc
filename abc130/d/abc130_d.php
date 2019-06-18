<?php
/**
 * ABC130
 * D - Enough Array
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d %d", $n, $k);
$a = array_map('intval', explode(' ', trim(fgets(STDIN))));

$sum = 0;
$r = 0;
$answer = 0;

for ($i = 0; $i < $n; $i++) {
    while ($sum < $k and $r != $n) {
        $sum += $a[$r++];
    }
    if ($sum < $k) break;
    $answer += $n - $r + 1;
    $sum -= $a[$i];
}

echo $answer, PHP_EOL;
