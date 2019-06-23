<?php
/**
 * ABC131
 * C - Anti-Division
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d %d %d %d", $a, $b, $c, $d);

$result = $b + 1;
$result -= intdiv($b, $c);
$result -= intdiv($b, $d);
$result += intdiv($b, lcm($c, $d));

$result2 = $a;
$result2 -= intdiv($a - 1, $c);
$result2 -= intdiv($a - 1, $d);
$result2 += intdiv($a - 1, lcm($c, $d));


echo $result - $result2, PHP_EOL;

function lcm($a, $b) {
    $x = $a * $b;
    if ($a < $b) {
        $tmp = $a;
        $a = $b;
        $b = $tmp;
    }
    $r = $a % $b;
    while ($r != 0) {
        $a = $b;
        $b = $r;
        $r = $a % $b;
    }
    return intdiv($x, $b);
}
