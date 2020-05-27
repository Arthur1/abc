<?php
/**
 * ABC119
 * D - Lazy Faith
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, '%d %d %d', $A, $B, $Q);
for ($i = 0; $i < $A; $i++) {
    fscanf(STDIN, '%d', $s[$i]);
}
for ($i = 0; $i < $B; $i++) {
    fscanf(STDIN, '%d', $t[$i]);
}

for ($i = 0; $i < $Q; $i++) {
    fscanf(STDIN, '%d', $x);
    $b = binary_search($s, 0, $A - 1, $x, function($a, $b) {
        return $a <=> $b;
    });
    if ($b < 0) $b = $b * (-1) + 1;
    $d = binary_search($t, 0, $B - 1, $x, function($a, $b) {
        return $a <=> $b;
    });
    if ($d < 0) $d = $d * (-1) + 1;
    $result = PHP_INT_MAX - 1;
    for ($j = $b - 1; $j <= $b; $j++) {
        for ($k = $d - 1; $j <= $d; $j++) {
            $d1 = abs($s[$j] - $x) + abs($t[$k] - $s[$j]);
            $d2 = abs($t[$k] - $x) + abs($s[$j] - $t[$k]);
            $result = min($result, $d1, $d2);
        }
    }
    echo $result, PHP_EOL;
}

/**
 * 二分探索
 * @param array $haystack ソートされた配列
 * @param int $start_index 検索対象の配列のfirst index
 * @param int $end_index 検索対象の配列のlast index
 * @param $needle 検索したい値
 * @param callable $value_compare_func ユーザー定義の比較関数
 * @return int 見つかったneedleのindex or  -(needleより大きい最小の要素のindex + 1)
 */
function binary_search(array $haystack, int $start_index, int $end_index, $needle, callable $value_compare_func): int {
    $low = $start_index;
    $hi = $end_index - 1;

    while ($low <= $hi) {
        $mid = intdiv($hi - $low, 2) + $low;
        $compare = call_user_func($value_compare_func, $haystack[$mid], $needle);

        if ($compare < 0) {
            $low = $mid + 1;
        } elseif ($compare > 0) {
            $hi = $mid - 1;
        } else {
            return $mid;
        }
    }
    return -($low + 1);
}
