<?php
/**
 * ABC131
 * D - Megalomania
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++) {
    fscanf(STDIN, "%d %d", $works[$i]['cost'], $works[$i]['limit']);
    $sort[$i] = $works[$i]['limit'];
}

array_multisort($sort, SORT_ASC, $works);

$time = 0;
foreach ($works as $work) {
    $time += $work['cost'];
    if ($work['limit'] < $time) {
        echo 'No', PHP_EOL;
        exit;
    }
}
echo 'Yes', PHP_EOL;
