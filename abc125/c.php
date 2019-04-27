<?php
/**
 * ABC125 
 * C - GCD on Blackboard
 */

$n = trim(fgets(STDIN));
$a = array_map('intval', explode(' ', trim(fgets(STDIN))));

// 累積GCDを計算
$gcd_list_left = [$a[0]];
$gcd_list_right = [$a[$n - 1]];
$gcd_memo = [];
for ($i = 1; $i < $n - 1; $i++) {
    $gcd_list_left[$i] = gcd($gcd_list_left[$i - 1], $a[$i]);
    $gcd_list_right[$i] = gcd($gcd_list_right[$i - 1], $a[$n - 1 - $i]);
}

// gcd((左累積GCD), (右累積GCD))
$gcd[0] = $gcd_list_right[$n - 2];
$gcd[$n - 1] = $gcd_list_left[$n - 2];
for ($i = 1; $i < $n - 1; $i++) {
    $gcd[$i] = gcd($gcd_list_left[$i - 1], $gcd_list_right[$n - 1 - $i - 1]);
}

echo max($gcd), "\n";

function gcd($a, $b): int {
    return $gcd_memo[$a][$b] ?? ($b == 0 ? $a : gcd($b, $a % $b));
}
