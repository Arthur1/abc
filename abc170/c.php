<?php

fscanf(STDIN, "%d %d", $X, $N);
if ($N === 0) {
    echo $X, PHP_EOL;
    exit;
}

$p = array_map('intval', explode(' ', trim(fgets(STDIN))));

sort($p);

$i_c = array_search($X, $p, true);
if ($i_c === false) {
    echo $X, PHP_EOL;
    exit;
}

for ($j = 1; ; $j++) {
    $i_l = $i_c - $j;
    $i_r = $i_c + $j;
    if (! isset($p[$i_l])) {
        echo $X - $j, PHP_EOL;
        break;
    } elseif ($p[$i_l] !== $X - $j) {
        echo $X - $j, PHP_EOL;
        break;
    }
    if (! isset($p[$i_r])) {
        echo $X + $j, PHP_EOL;
        break;
    } elseif ($p[$i_r] !== $X + $j) {
        echo $X + $j, PHP_EOL;
        break;
    }
}


