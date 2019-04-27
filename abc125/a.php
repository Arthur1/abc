<?php
/**
 * ABC125 
 * A - Biscuit Generator
 */

fscanf(STDIN, "%d %d %d", $a, $b, $t);
 
$biscuit = 0;
 
for ($i = $a; $i <= $t; $i+= $a) {
    $biscuit += $b;
}
 
echo $biscuit, "\n";
