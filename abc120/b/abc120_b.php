<?php
/**
 * ABC120
 * B - K-th Common Divisor
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d %d %d", $A, $B, $K);
$min = min($A, $B);
for ($i = $min; $i > 0; $i--) {
    if ($A % $i === 0 and $B % $i === 0) {
        $list[] = $i;
    }
}

echo $list[$K - 1], PHP_EOL;
