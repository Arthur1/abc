<?php
/**
 * 連想配列のソート
 */
$array = [
    ['a' => 100, 'b' => 10],
    ['a' => 25, 'b' => 15],
    ['a' => 10, 'b' => 0],
    ['a' => 500, 'b' => 70],
    ['a' => 30, 'b' => 5],
];

array_multisort(array_column($array, 'a'), SORT_ASC, $array);

/**
 * テスト
 */
$sorted_array = [
    ['a' => 10, 'b' => 0],
    ['a' => 25, 'b' => 15],
    ['a' => 30, 'b' => 5],
    ['a' => 100, 'b' => 10],
    ['a' => 500, 'b' => 70],
];
foreach ($array as $key => $record) {
    if ($record['b'] !== $sorted_array[$key]['b']) throw new Exception;
}
echo 'Success!', PHP_EOL;
