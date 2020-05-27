<?php
/**
 * ABC119
 * B - Digital Gifts
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++) {
    fscanf(STDIN, "%f %s", $x[$i], $u[$i]);
    if ($u[$i] === 'BTC') {
        $x[$i] *= 380000;
    }
}

echo array_sum($x), PHP_EOL;
