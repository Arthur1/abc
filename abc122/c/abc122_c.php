<?php
/**
 * ABC122
 * C - GeT AC
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d %d", $n, $q);
$s = trim(fgets(STDIN));

$sums[0] = 0;
for ($i = 1; $i <= $n; $i++) {
    $sums[$i] = $sums[$i - 1];
    if ($s[$i - 1] === 'A' and $s[$i] === 'C') {
        $sums[$i]++;
    }
}

for ($i = 0; $i < $q; $i++) {
    fscanf(STDIN, "%d %d", $l, $r);
    echo $sums[$r - 1] - $sums[$l - 1], PHP_EOL;
}
