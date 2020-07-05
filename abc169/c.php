<?php

fscanf(STDIN, "%d %f", $a, $b);
$b_int = (int) ($b * 100);
echo sprintf("%d", intdiv($a * $b_int, 100)), PHP_EOL;
