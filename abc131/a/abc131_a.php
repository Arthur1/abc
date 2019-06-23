<?php
/**
 * ABC131
 * A - Security
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

$s = trim(fgets(STDIN));

for ($i = 1; $i < 4; $i++) {
    if ($s[$i] === $s[$i - 1]) {
        echo 'Bad', PHP_EOL;
        exit;
    }
}

echo 'Good', PHP_EOL;
