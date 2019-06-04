<?php
/**
 * AGC034
 * A - Kenken Race
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d %d %d %d %d", $n, $a, $b, $c, $d);
$s = trim(fgets(STDIN));

$dp_funuke[$b - 1] = true;
$dp_funuke[$b] = true;
for ($i = $b + 1; $i <= $d; $i++) {
    if (($s[$i - 1] ?? '#') !== '.') {
        $dp_funuke[$i] = false;
        continue;
    }
    $dp_funuke[$i] = ($dp_funuke[$i - 1] or $dp_funuke[$i - 2]);
}

if (! $dp_funuke[$d]) {
    echo 'No', PHP_EOL;
    exit;
}

$dp_sunuke[$a - 1] = true;
$dp_sunuke[$a] = true;
for ($i = $a + 1; $i <= $c; $i++) {
    if (($s[$i - 1] ?? '#') !== '.') {
        $dp_sunuke[$i] = false;
        continue;
    }
    $dp_sunuke[$i] = ($dp_sunuke[$i - 1] or $dp_sunuke[$i - 2]);
}

if (! $dp_sunuke[$c]) {
    echo 'No', PHP_EOL;
    exit;
}

if ($c > $d) {
    $no_flag = true;
    for ($i = max($a, $b); $i <= min($c, $d); $i++) {
        if (($s[$i - 2] ?? '#') === '.' and $s[$i - 1] === '.' and ($s[$i] ?? '#') === '.') {
            $no_flag = false;
            break;
        }
    }
    if ($no_flag) {
        echo 'No', PHP_EOL;
        exit;
    } 
}

echo 'Yes', PHP_EOL;
