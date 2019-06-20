<?php
/**
 * ABC126
 * D - Even Relation
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d", $n);

for ($i = 0; $i < $n - 1; $i++) {
    fscanf(STDIN, "%d %d %d", $u, $v, $w);
    $tree[--$u][--$v] = $w;
    $tree[$v][$u] = $w;
}

$map = array_fill(0, $n, false);

dfs(0, 0);

foreach ($map as $m) {
    echo $m, PHP_EOL;
}

function dfs($parent, $color) {
    global $map, $tree;
    $map[$parent] = $color;
    foreach ($tree[$parent] as $child => $length) {
        if ($map[$child] !== false) continue;
        if ($length % 2 == 1) {
            dfs($child, 1 - $color);
        } else {
            dfs($child, $color);
        }
    }
}

