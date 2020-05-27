<?php
/**
 * ABC133
 * A - T or T
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d %d %d", $N, $A, $B);

echo min($N * $A, $B), PHP_EOL;
