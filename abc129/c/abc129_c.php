<?php
/**
 * ABC129
 * C - Typical Stairs
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d %d", $n, $m);

for ($i = 0; $i < $m; $i++) {
    fscanf(STDIN, "%d", $a[$i]);
}

$dp[-1] = 0;
$dp[0] = 1;

foreach ($a as $ai) {
    $dp[$ai] = 0;
}
$i_list = array_diff(range(1, $n), $a);

foreach ($i_list as $i) {
    $dp[$i] = ($dp[$i - 1] + $dp[$i - 2]) % 1000000007;
    if ($dp[$i] < 0) {
        $dp[$i] += 1000000007;
    }
}

echo $dp[$n], PHP_EOL;


