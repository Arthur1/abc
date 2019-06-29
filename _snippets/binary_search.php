<?php
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

/**
 * テスト
 */
$list = [14, 12, 10, 8, 6, 4, 2];
sort($list);
$key = binary_search($list, 0, count($list), 6, function($a, $b) {
    return $a <=> $b;
});
if ($key !== 2) throw new Exception;
$key = binary_search($list, 0, count($list), 7, function($a, $b) {
    return $a <=> $b;
});
if ($key !== -4) throw new Exception;
echo 'Success!', PHP_EOL;
