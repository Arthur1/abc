<?php
/**
 * ABC124
 * A - Buttons
 */

fscanf(STDIN, "%d %d", $a, $b);

if ($a - $b >= 2) {
    $result = $a * 2 - 1;
} elseif ($b - $a >= 2) {
    $result = $b * 2 - 1;
} else {
    $result = $a + $b;
}
 
echo $result, PHP_EOL;
