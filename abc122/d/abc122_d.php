<?php
/**
 * ABC122
 * D - We Like AGC
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));
$mod = 1000000007;
fscanf(STDIN, "%d", $n);
$bases = ['A', 'G', 'C', 'T'];
$ng_pattern = ['AGC', 'ACG', 'GAC'];

foreach ($bases as $base1) {
    foreach ($bases as $base2) {
        foreach ($bases as $base3) {
            $key = $base1 . $base2 . $base3;
            $dp[0][$key] = 0;
            $dp[1][$key] = 0;
            $dp[2][$key] = 0;
            $dp[3][$key] = in_array($key, $ng_pattern) ? 0 : 1;
        }
    }
}

for ($i = 4; $i <= $n; $i++) {
    foreach ($bases as $base1) {
        foreach ($bases as $base2) {
            foreach ($bases as $base3) {
                $key = $base1 . $base2 . $base3;
                $dp[$i][$key] = 0;
                foreach ($bases as $base) {
                    if (in_array($key, $ng_pattern)) continue;
                    if ($base . $base1 . $base3 === 'AGC') continue;
                    if ($base . $base2 . $base3 === 'AGC') continue;
                    $dp[$i][$key] += $dp[$i - 1][$base . $base1 . $base2];
                    $dp[$i][$key] %= $mod;
                }
            }
        }
    }
}

echo array_sum($dp[$n]) % $mod, PHP_EOL;
