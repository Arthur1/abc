<?php
fscanf(STDIN, "%d", $N);
if ($N % 1000 === 0) {
    echo 0, PHP_EOL;
} else {
    echo 1000 - ($N % 1000), PHP_EOL;
}
