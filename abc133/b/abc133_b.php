<?php
/**
 * ABC133
 * B - Good Distance
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d %d", $N, $D);
for ($i = 0; $i < $N; $i++) {
    $X[$i] = array_map('intval', explode(' ', trim(fgets(STDIN))));
}

$count = 0;
for ($i = 0; $i < $N - 1; $i++) {
    for ($j = $i + 1; $j < $N; $j++) {
        $distance = 0;
        for ($k = 0; $k < $D; $k++) {
            $distance += pow(abs($X[$i][$k] - $X[$j][$k]), 2);
        }
        if (is_pythagoras($distance)) $count++;
    }
}

echo $count, PHP_EOL;

function is_pythagoras($number) {
    for ($i = 0; pow($i, 2) <= $number; $i++) {
        if (pow($i, 2) === $number) return true;
    }
    return false;
}
