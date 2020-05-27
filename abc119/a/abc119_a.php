<?php
/**
 * ABC119
 * A - Still TBD
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

$s = trim(fgets(STDIN));
if (strtotime($s) <= strtotime('2019/04/30')) {
    echo 'Heisei', PHP_EOL;
} else {
    echo 'TBD', PHP_EOL;
}
