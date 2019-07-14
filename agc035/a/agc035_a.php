<?php
/**
 * AGC035
 * A - XOR Circle
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d", $N);
$a = array_map('intval', explode(' ', trim(fgets(STDIN))));

$sum = 0;
for ($i = 0; $i < $N; $i++) {
    $sum ^= $a[$i];
}

if ($sum === 0) {
    echo 'Yes', PHP_EOL;
} else {
    echo 'No', PHP_EOL;
}

