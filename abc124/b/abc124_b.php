<?php
/**
 * ABC124
 * B - Great Ocean View
 */

$n = trim(fgets(STDIN));
$h_list = array_map('intval', explode(' ', trim(fgets(STDIN))));
$last_h = $h_list[0];
$result = 0;

foreach ($h_list as $h) {
    if ($h >= $last_h) {
        $last_h = $h;
        $result++;
    }
}
 
echo $result, PHP_EOL;
