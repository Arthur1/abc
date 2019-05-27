<?php
/**
 * ABC127
 * D - Integer Cards
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d %d", $n, $m);
$a = explode(' ', trim(fgets(STDIN)));
for ($i = 0; $i < $m; $i++) {
    fscanf(STDIN, "%d %d", $b_list[$i], $c_list[$i]);
}

sort($a);
arsort($c_list);
$k = 0;
foreach ($c_list as $i => $c) {
    for ($j = 0; $j < $b_list[$i]; $j++) {
        if ($k == $n) {
            break;
        }
        $tasks[$k] = $c;
        $k++;
    }
}

for ($i = 0; $i < $k; $i++) {
    if ($a[$i] > $tasks[$i]) {
        break;
    }
    $a[$i] = $tasks[$i];
}

echo array_sum($a), PHP_EOL;
