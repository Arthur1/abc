<?php
/**
 * ABC121
 * D - XOR World
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d %d", $A, $B);

echo F($A - 1) ^ F($B), PHP_EOL;

function F($a) {
    $pair_num = intdiv($a + 1, 2);
    $is_odd = ($a + 1) % 2;
    $result = $pair_num % 2 ? 1 : 0;
    if ($is_odd) {
        $result ^= $a;
    }
    return $result;
}
