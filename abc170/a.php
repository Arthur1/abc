<?php

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

$x = array_map('intval', explode(' ', trim(fgets(STDIN))));

foreach ($x as $i => $x_i) {
    if ($x_i === 0) {
        echo ($i + 1), PHP_EOL;
        break;
    }
}
