<?php
/**
 * ABC132
 * C - Divide the Problems
 */

fscanf(STDIN, "%d", $n);
$d = array_map('intval', explode(' ', trim(fgets(STDIN))));
sort($d);
echo $d[intdiv($n, 2)] - $d[intdiv($n, 2) - 1], PHP_EOL;
