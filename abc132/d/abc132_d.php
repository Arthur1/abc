<?php
/**
 * ABC132
 * D - Blue and Red Balls
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

$mod = 1000000007;

fscanf(STDIN, "%d %d", $n, $k);

init_combination($n);

for ($i = 1; $i <= $k; $i++) {
    echo combination($n - $k + 1, $i) * combination($k - 1, $i - 1) % $mod, PHP_EOL;
}

function init_combination($n) {
    global $fac, $finv, $inv, $mod;
    $fac[0] = $fac[1] = 1;
    $finv[0] = $finv[1] = 1;
    $inv[1] = 1;
    for ($i = 2; $i < $n; $i++){
        $fac[$i] = $fac[$i - 1] * $i % $mod;
        $inv[$i] = $mod - $inv[$mod % $i] * (intdiv($mod, $i)) % $mod;
        $finv[$i] = $finv[$i - 1] * $inv[$i] % $mod;
    }
}

function combination($n, $r) {
    global $fac, $finv, $inv, $mod;
    if ($n < $r) return 0;
    if ($n < 0 || $r < 0) return 0;
    return $fac[$n] * ($finv[$r] * $finv[$n - $r] % $mod) % $mod;
}
