<?php
/**
 * ABC132
 * A - Fifty-Fifty
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

$s = trim(fgets(STDIN));
for ($i = 0; $i < 4; $i++) {
    $sum[$s[$i]]++;
}

foreach ($sum as $type) {
    if ($type != 2) {
        echo 'No', PHP_EOL;
        exit;
    }
}

echo 'Yes', PHP_EOL;
