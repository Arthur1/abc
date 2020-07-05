<?php
fscanf(STDIN, "%d", $N);
$A = array_map('intval', explode(' ', trim(fgets(STDIN))));
rsort($A);

$p = 0;
$l = [$A[0]];
for ($i = 1; $i <= $N / 2; $i++) {
    $p += $l[$i - 1];
    // echo $l[$i - 1], PHP_EOL;
    $l[] = $A[$i];
}
// echo "end\n";
if (count($l) <= 2) {
    $min = min($l);
    for ($j = $i; $j < $N; $j++) {
        $p += $min;
    }
} else {
    for ($j = $i; $j < $N; $j++) {
        // echo $l[$j - $i + 1] ?? $l[$j - $i], PHP_EOL;
        $p += $l[$j - $i + 1] ?? $l[$j - $i];
    }
}

echo $p, PHP_EOL;
