<?php
/**
 * ABC133
 * C - Remainder Minimization 2019
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d %d", $L, $R);

$result = PHP_INT_MAX - 1;
for ($l = $L; $l <= $R; $l++) {
    for ($r = $l; $r <= $R; $r++) {
        $result = min($result, $l * $r % 2019);
        if ($result === 0) break 2;
    }
}

echo $result, PHP_EOL;
