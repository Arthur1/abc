<?php
/**
 * ABC126
 * A - Changing a Character
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d %d", $n, $k);
$s = trim(fgets(STDIN));

$s[$k - 1] = strtolower($s[$k - 1]);

echo $s, PHP_EOL;
