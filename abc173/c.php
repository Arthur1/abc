<?php
fscanf(STDIN, "%d %d %d", $H, $W, $K);
for ($i = 0; $i < $H; $i++) {
    $table[$i] = trim(fgets(STDIN));
}

$x = pow(2, $H);
$y = pow(2, $W);
$count = 0;

for ($i = 0; $i < $x; $i++) {
    $i_str = str_pad(decbin($i), $H, 0, STR_PAD_LEFT);
    for ($j = 0; $j < $y; $j++) {
        $black = 0;
        $j_str = str_pad(decbin($j), $W, 0, STR_PAD_LEFT);
        for ($k = 0; $k < $H; $k++) {
            for ($l = 0; $l < $W; $l++) {
                if ($table[$k][$l] !== '#') continue;
                if ($i_str[$k] === '1' or $j_str[$l] === '1') continue;
                $black++;
            }
        }
        if ($black === $K) {
            $count++;
        }
    }
}

echo $count, PHP_EOL;