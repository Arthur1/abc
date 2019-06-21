<?php
/**
 * ABC122
 * B - ATCoder
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

$S = trim(fgets(STDIN));
$max = 0;
$length = strlen($S);
for ($left = 0; $left < $length; $left++) {
    for ($right = $left; $right < $length; $right++) {
        for ($i = $left; $i <= $right; $i++) {
            if (! in_array($S[$i], ['A', 'G', 'C', 'T'], true)) {
                continue 2;
            }
        }
        $max = max($max, $right - $left + 1);
    }
}
echo $max, PHP_EOL;
