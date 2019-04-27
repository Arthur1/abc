<?php
/**
 * ABC125 
 * D - Flipping Signs
 */

$n = trim(fgets(STDIN));
$a = array_map('intval', explode(' ', trim(fgets(STDIN))));

$abs_list = [];
$minus_num = 0;
foreach ($a as $value) {
    if ($value >= 0) {
        $abs_list[] = $value;
    } else {
        $abs_list[] = -1 * $value;
        $minus_num++;
    }
}

if ($minus_num % 2 == 0) {
    // 負の数が偶数個のとき、すべての数を正にできる
    $answer = array_sum($abs_list);
} else {
    // 負の数が奇数個のとき、1つだけ負の数になる
    $answer = array_sum($abs_list) - 2 * min($abs_list);
}

echo $answer, "\n";
