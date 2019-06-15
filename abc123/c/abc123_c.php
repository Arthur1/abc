<?php
/**
 * ABC123
 * C - Five Transportations
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d", $n);
for ($i = 0; $i < 5; $i++) {
    fscanf(STDIN, "%d", $d[$i]);
}

echo 4 + (int) ceil($n / min($d)), PHP_EOL;
