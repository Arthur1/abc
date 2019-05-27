<?php
/**
 * ABC127
 * A - Ferris Wheel
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d %d", $a, $b);

if ($a <= 5) {
    $result = 0;
} elseif ($a <= 12) {
    $result = $b / 2;
} else {
    $result = $b;
}

echo $result, PHP_EOL;
