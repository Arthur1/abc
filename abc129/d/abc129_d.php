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

for ($i = 0; $i < $h; $i++) {
    $l[$i][0] = $s[$i][0] === '#' ? 0 : 1;
    $r[$i][$w - 1] = $s[$i][$w - 1] === '#' ? 0 : 1;
    for ($j = 1; $j < $w; $j++) {
        $l[$i][$j] = $s[$i][$j] === '#' ? 0 : $l[$i][$j - 1] + 1;
        $r[$i][$w - 1 - $j] = $s[$i][$w - 1 - $j] === '#' ? 0 : $r[$i][$w - $j] + 1;
    }
}

for ($j = 0; $j < $w; $j++) {
    $d[0][$j] = $s[0][$j] === '#' ? 0 : 1;
    $u[$h - 1][$j] = $s[$h - 1][$j] === '#' ? 0 : 1;
    for ($i = 1; $i < $h; $i++) {
        $d[$i][$j] = $s[$i][$j] === '#' ? 0 : $d[$i - 1][$j] + 1;
        $u[$h - 1 - $i][$j] = $s[$h - 1 - $i][$j] === '#' ? 0 : $u[$h - $i][$j] + 1;
    }
}

$max = 0;
for ($i = 0; $i < $h; $i++) {
    for ($j = 0; $j < $w; $j++) {
        $max = max($max, $l[$i][$j] + $r[$i][$j] + $d[$i][$j] + $u[$i][$j] - 3);
    }
}

echo $max, PHP_EOL;
