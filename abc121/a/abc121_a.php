<?php
/**
 * ABC121
 * A - White Cells
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d %d", $H, $W);
fscanf(STDIN, "%d %d", $h, $w);

echo ($H - $h) * ($W - $w), PHP_EOL;
