<?php
/**
 * ABC123
 * B - Five Dishes
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

$last_i = 0;
$last_1 = 9;

for ($i = 0; $i < 5; $i++) {
    fscanf(STDIN, "%d", $d[$i]);
    $d_1 = $d[$i] % 10;
    if ($d_1 !== 0 and $d_1 < $last_1 ) {
        $last_i = $i;
        $last_1 = $d_1;
    }
}

$time = 0;

for ($i = 0; $i < 5; $i++) {
    if ($i === $last_i) {
        $time += $d[$i];
    } else {
        $time += ceil($d[$i] / 10) * 10;
    }
}

echo $time, PHP_EOL;
