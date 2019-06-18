<?php
/**
 * ABC130
 * B - Bounding
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d %d", $n, $x);
$l = array_map('intval', explode(' ', trim(fgets(STDIN))));

$X = 0;
$count = 1;
for ($i = 0; $i < $n; $i++) {
    $X += $l[$i];
    if ($X > $x) {
        break;
    }
    $count++;
}

echo $count, PHP_EOL;
