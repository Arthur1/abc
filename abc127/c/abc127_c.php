<?php
/**
 * ABC127
 * C - Prison
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d %d", $n, $m);

$l = [];
$r = [];

for ($i = 0; $i < $m; $i++) {
    fscanf(STDIN, "%d %d", $l[$i], $r[$i]);
}

$maxL = 1;
$minR = $n;

for ($i = 0; $i < $m; $i++) {
    if ($maxL < $l[$i]) {
        $maxL = $l[$i];
    }
    if ($minR > $r[$i]) {
        $minR = $r[$i];
    }
    if ($minR < $maxL) {
        echo 0, PHP_EOL;
        return;
    }
}

$result = $minR - $maxL + 1;
if ($result < 0) {
    $result = 0;
}

echo $result, PHP_EOL;
