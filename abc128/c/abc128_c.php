<?php
/**
 * ABC128
 * C - Switches
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d %d", $n, $m);
for ($i = 0; $i < $m; $i++) {
    $line = array_map('intval', explode(' ', trim(fgets(STDIN))));
    $k[$i] = array_shift($line);
    $s[$i] = $line;
}
$p = array_map('intval', explode(' ', trim(fgets(STDIN))));
$count = 0;
for ($i = 0; $i < 2 ** $n; $i++) {
    $bit = decbin($i);
    $bit = str_pad($bit, $n, '0', STR_PAD_LEFT);
    for ($j = 0; $j < $m; $j++) {
        $total = 0;
        for ($l = 0; $l < $k[$j]; $l++) {
            $total += (int) $bit[$s[$j][$l] - 1];
        }
        if ($total % 2 != $p[$j]) {
            continue 2;
        }
    }
    $count++;
}

echo $count, PHP_EOL;
