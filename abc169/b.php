<?php

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));


fscanf(STDIN, "%d", $N);
$A = array_map('intval', explode(' ', trim(fgets(STDIN))));

sort($A);

$answer = 1;
foreach ($A as $A_i) {
    $answer *= $A_i;
    if ($answer == 0) {
        echo 0, PHP_EOL;
        exit;
    }
    if ($answer > 1000000000000000000) {
        echo -1, PHP_EOL;
        exit;
    }
}

echo $answer, PHP_EOL;

