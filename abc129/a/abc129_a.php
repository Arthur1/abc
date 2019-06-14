<?php
/**
 * ABC129
 * A - Airplane
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d %d %d", $p, $q, $r);

echo min($p + $q, $q + $r, $r + $p), PHP_EOL;
