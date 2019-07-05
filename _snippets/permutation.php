<?php
/**
 * 順列
 */
function next_permutation(array $elements) {
    if (count($elements) <= 1) {
        yield $elements;
    } else {
        foreach (next_permutation(array_slice($elements, 1)) as $permutation) {
            foreach (range(0, count($elements) - 1) as $i) {
                yield array_merge(
                    array_slice($permutation, 0, $i),
                    [$elements[0]],
                    array_slice($permutation, $i)
                );
            }
        }
    }
}

/**
 * テスト
 */
$count = 0;
foreach (next_permutation(range(1, 5)) as $permutation) {
    $count++;
}
if ($count !== 5 * 4 * 3 * 2 * 1) throw new Exception;

$count = 0;
foreach (next_permutation(range(1, 10)) as $permutation) {
    $count++;
}
if ($count !== 10 * 9 * 8 * 7 * 6 * 5 * 4 * 3 * 2 * 1) throw new Exception;

echo 'Success!', PHP_EOL;
