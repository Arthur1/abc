<?php
/**
 * ABC123
 * A - Five Antennas
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

for ($i = 0; $i < 5; $i++) {
    fscanf(STDIN, "%d", $d[$i]);
}
fscanf(STDIN, "%d", $k);

if ($d[4] - $d[0] > $k) {
    echo ':(', PHP_EOL;
    exit;
}
echo 'Yay!', PHP_EOL;
