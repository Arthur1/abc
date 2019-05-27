<?php
/**
 * ABC128
 * D - equeue
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d %d", $n, $k);
$v = array_map('intval', explode(' ', trim(fgets(STDIN))));

$r = min($n, $k);
$point_max = 0;
for ($a = 0; $a <= $r; $a++) { // Aの数
    for ($b = 0; $b <= $r - $a; $b++) { // Bの数
        $hands = [];
        // Aの操作
        for ($i = 0; $i < $a; $i++) {
            $hands[] = $v[$i];
        }
        // Bの操作
        for ($i = 0; $i < $b; $i++) {
            $hands[] = $v[$n - 1 - $i];
        }
        // C・Dの操作
        sort($hands);
        $s = min($k - $a - $b, $a + $b);
        for ($i = 0; $i < $s; $i++) {
            if ($hands[$i] >= 0) {
                break;
            }
            unset($hands[$i]);
        }
        $point_max = max(array_sum($hands), $point_max);
    }
}

echo $point_max, PHP_EOL;
