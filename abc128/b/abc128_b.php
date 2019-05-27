<?php
/**
 * ABC128
 * B - Guidebook
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d", $n);
$records = [];
for ($i = 0; $i < $n; $i++) {
    $records[$i]['i'] = $i + 1;
    fscanf(STDIN, "%s %d", $records[$i]['s'], $records[$i]['p']);
}

array_multisort(array_column($records, 's'), SORT_ASC, SORT_STRING, array_column($records, 'p'), SORT_DESC, SORT_NUMERIC, $records);

foreach ($records as $record) {
    echo $record['i'], PHP_EOL;
}

