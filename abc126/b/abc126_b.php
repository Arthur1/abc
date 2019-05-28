<?php
/**
 * ABC126
 * B - YYMM or MMYY
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

$s = trim(fgets(STDIN));

$s1 = substr($s, 0, 2);
$s2 = substr($s, 2, 4);

$s1_is_month = is_month($s1);
$s2_is_month = is_month($s2);

$result = solver($s1_is_month, $s2_is_month);

echo $result, PHP_EOL;

function is_month($s) {
    $months = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];
    return in_array($s, $months);
}

function solver($s1_is_month, $s2_is_month) {
    if ($s1_is_month and $s2_is_month) {
        return 'AMBIGUOUS';
    }
    if ($s1_is_month) {
        return 'MMYY';
    }
    if ($s2_is_month) {
        return 'YYMM';
    }
    return 'NA';
}
