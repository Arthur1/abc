<?php
/**
 * ABC129
 * D - Lamp
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d %d", $h, $w);

for ($i = 0; $i < $h; $i++) {
    $s[$i] = trim(fgets(STDIN));
}
$max = 0;

for ($i = 0; $i < $h; $i++) {
    for ($j = 0; $j < $w; $j++) {
        if ($s[$i][$j] === '#') {
            continue;    
        }
        $count = 0;
        for ($k = $i; $k < $h; $k++) {
            if ($s[$k][$j] === '#') {
                break;
            }
            $count++;
        }
        for ($k = 0; $k <= $count; $k++) {
            $table_i[$i + $k][$j] = $count - 1;
        }
        $count = 0;
        for ($k = $j; $j < $w; $k++) {
            if ($s[$i][$k] === '#') {
                break;
            }
            $count++;
        }
        for ($k = 0; $k <= $count; $k++) {
            $table_j[$i][$j + $k] = $count - 1;
        }
        $max = max($max, $table_i[$i][$j] + $table_j[$i][$j]);
    }
}

echo $max, PHP_EOL;
