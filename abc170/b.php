<?php

fscanf(STDIN, "%d %d", $X, $Y);

if (($Y - 2 * $X) % 2 !== 0) {
    echo 'No', PHP_EOL;
    exit;
}

$b = intdiv($Y - 2 * $X, 2);
$a = $X - $b;
if ($a < 0 or $b < 0) {
    echo 'No', PHP_EOL;
    exit;
}

echo 'Yes', PHP_EOL;
