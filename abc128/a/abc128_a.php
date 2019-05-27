<?php
/**
 * ABC128
 * A - Apple Pie
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d %d", $a, $p);

$p = $p + $a * 3;

echo intdiv($p, 2), PHP_EOL;
