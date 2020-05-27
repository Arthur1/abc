<?php
/**
 * ABC133
 * A - T or T
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d", $N);

switch ($N % 10) {
    case 2:
    case 4:
    case 5:
    case 7:
    case 9:
        echo "hon\n";
        break;
    case 0:
    case 1:
    case 6:
    case 8:
        echo "pon\n";
        break;
    case 3:
        echo "bon\n";
        break;
}
