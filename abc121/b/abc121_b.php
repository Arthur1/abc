<?php
/**
 * ABC121
 * B - Can you solve this?
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d %d %d", $N, $M, $C);
$B = array_map('intval', explode(' ', trim(fgets(STDIN))));

$count = 0;

for ($i = 0; $i < $N; $i++) {
    $A = array_map('intval', explode(' ', trim(fgets(STDIN))));
    $sum = $C;
    for ($j = 0; $j < $M; $j++) {
        $sum += $A[$j] * $B[$j];
    }
    if ($sum > 0) $count++;
}

echo $count, PHP_EOL;
