<?php
fscanf(STDIN, "%d", $N);
$A = array_map('intval', explode(' ', trim(fgets(STDIN))));

sort($A);

$count = 0;
for ($i = 0; $i < $N; $i++) {
    $flag = true;
    for ($j = 0; $j < $N and $A[$j] <= $A[$i]; $j++) {
        if ($i === $j) continue;
        if ($A[$i] % $A[$j] === 0) {
            $flag = false;
            break;
        }
    }
    if ($flag) $count++;
}

echo $count, PHP_EOL;
