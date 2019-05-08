<?php
/**
 * ABC124
 * D - Handstand
 */

fscanf(STDIN, "%d %d", $n, $k);
$s = trim(fgets(STDIN));

$number_list = [];
$length = strlen($s);

if ($s[0] === '0') {
    $number_list[] = 0;
}
$j = 0;
for ($i = 0; $i < $length;) {
    while ($j < $length and $s[$i] === $s[$j]) {
        $j++;
    }
    $number_list[] = $j - $i;
    $i = $j;
}
if ($s[$length - 1] === '0') {
    $number_list[] = 0;
}

// 累積和
$cumulative_sum_list = [0];
foreach ($number_list as $key => $number) {
    $cumulative_sum_list[$key + 1] = $cumulative_sum_list[$key] + $number;
}

$cumulative_sum_list_length = count($cumulative_sum_list);

$result = 0;

for ($left = 0; $left < $cumulative_sum_list_length; $left += 2) {
    $right = min($left + $k * 2 + 1, $cumulative_sum_list_length - 1);
    $total = $cumulative_sum_list[$right] - $cumulative_sum_list[$left];
    if ($result < $total) {
        $result = $total;
    }
}
 
echo $result, PHP_EOL;
