<?php
/**
 * 最大公約数
 */
function gcd(int $a, int $b): int {
    if ($a < $b) list($a, $b) = array($b, $a);
    while ($b !== 0) {
        $r = $a % $b;
        $a = $b;
        $b = $r;
    }
    return $a;
}

/**
 * 最小公倍数
 */
function lcm(int $a, int $b): int {
    return intdiv($a * $b, gcd($a, $b));
}

/**
 * テスト
 */
if (gcd(100, 1) !== 1) throw new Exception;
if (gcd(5, 10) !== 5) throw new Exception;
if (gcd(6, 9) !== 3) throw new Exception;

if (lcm(3, 4) !== 12) throw new Exception;
if (lcm(3, 9) !== 9) throw new Exception;
if (lcm(4, 6) !== 12) throw new Exception;

echo 'Success!', PHP_EOL;
