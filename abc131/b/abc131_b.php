<?php
/**
 * ABC131
 * B - Bite Eating
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d %d", $N, $L);

$tastes = [];

for ($i = 1; $i <= $N; $i++) {
    $tastes[$i] = $L + $i - 1;
}

$min = PHP_INT_MAX;
$min_key = 0;
foreach ($tastes as $key => $taste) {
    if ($min > abs($taste)) {
        $min = abs($taste);
        $min_key = $key;
    }
}

unset($tastes[$min_key]);
echo array_sum($tastes), PHP_EOL;
