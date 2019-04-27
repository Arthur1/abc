<?php
/**
 * ABC125 
 * B - Resale
 */
$n = trim(fgets(STDIN));
$v_arr = explode(' ', trim(fgets(STDIN)));
$c_arr = explode(' ', trim(fgets(STDIN)));

$total = 0;

foreach ($v_arr as $i => $v) {
    $diff = $v - $c_arr[$i];
    if ($diff > 0) {
        $total += $diff;
    }
}

echo $total, "\n";
