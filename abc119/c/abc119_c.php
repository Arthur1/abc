<?php
/**
 * ABC119
 * C - Synthetic Kadomatsu
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, '%d %d %d %d', $N, $A, $B, $C);
for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, '%d', $l[$i]);
}


echo dfs(0, 0, 0, 0), PHP_EOL;

function dfs($current, $a, $b, $c) {
    global $N, $A, $B, $C, $l;
    if ($current === $N) {
        if (min($a, $b, $c) > 0) {
            return abs($a - $A) + abs($b - $B) + abs($c - $C) - 30;
        } else {
            return 10000000;
        }
    }
    $ret = [
        dfs($current + 1, $a, $b, $c),
        dfs($current + 1, $a + $l[$current], $b, $c) + 10,
        dfs($current + 1, $a, $b + $l[$current], $c) + 10,
        dfs($current + 1, $a, $b, $c + $l[$current]) + 10,
    ];
    return min($ret);
}
