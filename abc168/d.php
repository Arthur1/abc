<?php

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d %d", $N, $M);
$adj_rooms = [];
for ($i = 0; $i < $M; $i++) {
    fscanf(STDIN, "%d %d", $A_i, $B_i);
    $adj_rooms[$A_i][] = $B_i;
    $adj_rooms[$B_i][] = $A_i;
}

$dist_t[1] = 0;
$way_t = [];

searchChild(1);

if (count($dist_t) < $N) {
    echo "No\n";
    exit;
}

echo "Yes\n";
for ($i = 2; $i <= $N; $i++) {
    echo $way_t[$i], "\n";
}

function searchChild (int $target_room) {
    global $dist_t, $way_t, $adj_rooms;
    foreach ($adj_rooms[$target_room] as $adj_room) {
        if (! isset($dist_t[$adj_room]) or $dist_t[$adj_room] > $dist_t[$target_room] + 1) {
            $dist_t[$adj_room] = $dist_t[$target_room] + 1;
            $way_t[$adj_room] = $target_room;
            searchChild($adj_room);
        }
    }
}
