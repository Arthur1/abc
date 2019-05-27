<?php
/**
 * ABC127
 * B - Algae
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d %d %d", $r, $d, $x);

for ($i = 1; $i <= 10; $i++) {
    $x = $r * $x - $d;
    echo $x, PHP_EOL;
}
