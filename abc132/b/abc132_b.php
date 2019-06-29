<?php
/**
 * ABC132
 * B - Ordinary Number
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d", $n);
$p = array_map('intval', explode(' ', trim(fgets(STDIN))));

$count = 0;
for ($i = 0; $i < $n - 2; $i++) {
    if ($p[$i] < $p[$i + 1] and $p[$i + 1] < $p[$i + 2]) {
        $count++;
    } elseif ($p[$i + 2] < $p[$i + 1] and $p[$i + 1] < $p[$i]) {
        $count++;
    }
}

echo $count, PHP_EOL;
