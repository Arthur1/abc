<?php
/**
 * ABC121
 * C - Energy Drink Collector
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d %d", $N, $M);
for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%d %d", $stores[$i]['price'], $stores[$i]['number']);
}

array_multisort(array_column($stores, 'price'), SORT_ASC, $stores);

$total_number = 0;
$total_price = 0;
foreach ($stores as $store) {
    if ($store['number'] + $total_number >= $M) {
        $total_price += $store['price'] * ($M - $total_number);
        break;
    }
    $total_number += $store['number'];
    $total_price += $store['price'] * $store['number'];
}

echo $total_price, PHP_EOL;
