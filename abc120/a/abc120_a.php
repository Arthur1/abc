<?php
/**
 * ABC120
 * A - Favorite Sound
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d %d %d", $A, $B, $C);

echo min(intdiv($B, $A), $C), PHP_EOL;
