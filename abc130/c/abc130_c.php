<?php
/**
 * ABC130
 * C - Rectangle Cutting
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d %d %d %d", $W, $H, $x, $y);

echo $W * $H / 2, ' ', ($x * 2 == $W and $y * 2 == $H) ? '1' : '0', PHP_EOL;
