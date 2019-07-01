<?php
/**
 * ABC120
 * C - Unification
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

$S = trim(fgets(STDIN));

$strlen = strlen($S);
$count_0 = $count_1 = 0;
for ($i = 0; $i < $strlen; $i++) {
    if ($S[$i] === '0') $count_0++;
    else $count_1++;
}

echo min($count_0, $count_1) * 2, PHP_EOL;
