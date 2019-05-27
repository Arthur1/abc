<?php
/**
 * ABC127
 * D - Integer Cards
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d %d", $n, $m);

$a = array_map('intval', explode(' ', trim(fgets(STDIN))));

$b_list = [];
$c_list = [];
for ($i = 0; $i < $m; $i++) {
    fscanf(STDIN, "%d %d", $b_list[$i], $c_list[$i]);
}

sort($a);
arsort($c_list);
$tasks = [];
foreach ($c_list as $i => $c) {
    for ($j = 0; $j < $b_list[$i]; $j++) {
        $tasks[] = $c;
    }
}

$task_num = min(count($tasks), $n);

for ($i = 0; $i < $task_num; $i++) {
    if ($a[$i] > $tasks[$i]) {
        break;
    }
    $a[$i] = $tasks[$i];
}

echo array_sum($a), PHP_EOL;
