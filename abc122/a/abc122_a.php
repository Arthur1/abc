<?php
/**
 * ABC122
 * A - Double Helix
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

$b = trim(fgets(STDIN));
switch ($b) {
    case 'A':
        $result = 'T';
        break;
    case 'T':
        $result = 'A';
        break;
    case 'G':
        $result = 'C';
        break;
    case 'C':
        $result = 'G';
        break;
}

echo $result, PHP_EOL;
