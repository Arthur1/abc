<?php
/**
 * ABC123
 * D - Cake 123
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d %d %d %d", $x, $y, $z, $k);
$a_list = array_map('intval', explode(' ', trim(fgets(STDIN))));
$b_list = array_map('intval', explode(' ', trim(fgets(STDIN))));
$c_list = array_map('intval', explode(' ', trim(fgets(STDIN))));
$ab_list = [];
foreach ($a_list as $a) {
    foreach ($b_list as $b) {
        $ab_list[] = $a + $b;
    }
}

rsort($ab_list);
$ab_list = array_slice($ab_list, 0, $k, true);

$abc_list = [];
foreach ($ab_list as $key => $ab) {
    foreach ($c_list as $c) {
        $abc_list[] = $ab + $c;
    }
}

rsort($abc_list);
$abc_list = array_slice($abc_list, 0, $k, true);

foreach ($abc_list as $abc) {
    echo $abc, PHP_EOL;
}
