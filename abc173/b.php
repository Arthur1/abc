<?php
$count = [0, 0, 0, 0];
fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++) {
    $result = trim(fgets(STDIN));
    switch ($result) {
        case 'AC':
            $count[0]++;
            break;
        case 'WA':
            $count[1]++;
            break;
        case 'TLE':
            $count[2]++;
            break;
        case 'RE':
            $count[3]++;
            break;
        default:
    }
}
echo 'AC x ', $count[0], PHP_EOL;
echo 'WA x ', $count[1], PHP_EOL;
echo 'TLE x ', $count[2], PHP_EOL;
echo 'RE x ', $count[3], PHP_EOL;
