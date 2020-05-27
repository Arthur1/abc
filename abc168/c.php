<?php
fscanf(STDIN, "%d %d %d %d", $A, $B, $H, $M);

$minutes = $H * 60 + $M;

$A_degree = (pi() * $minutes / 360);
$B_degree = (pi() * $minutes / 30);

$c_degree = $B_degree - $A_degree;

$C = sqrt($A * $A + $B * $B - 2 * $A * $B * cos($c_degree));
echo $C, "\n";
