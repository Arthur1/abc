<?php
/**
 * テスト
 */
if (gcd(100, 1) !== 1) throw new Exception;
if (gcd(5, 10) !== 5) throw new Exception;
if (gcd(6, 9) !== 3) throw new Exception;

if (lcm(3, 4) !== 12) throw new Exception;
if (lcm(3, 9) !== 9) throw new Exception;
if (lcm(4, 6) !== 12) throw new Exception;

$combination = new Combination(500);
if ($combination->get(1, 0) !== 1) throw new Exception;
if ($combination->get(10, 3) !== 120) throw new Exception;
if ($combination->get(500, 30) !== 563514256) throw new Exception;

$list = [14, 12, 10, 8, 6, 4, 2];
sort($list);
$key = binary_search($list, 0, count($list), 6, function($a, $b) {
    return $a <=> $b;
});
if ($key !== 2) throw new Exception;
$key = binary_search($list, 0, count($list), 7, function($a, $b) {
    return $a <=> $b;
});
if ($key !== -4) throw new Exception;

echo 'Success!', PHP_EOL;

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
 * 二項係数
 */
class Combination {
    const MOD = 1000000007;
    private $fac;
    private $finv;
    private $inv;

    public function __construct($n) {
        $this->fac[0] = $this->fac[1] = 1;
        $this->finv[0] = $this->finv[1] = 1;
        $this->inv[1] = 1;
        for ($i = 2; $i <= $n; $i++) {
            $this->fac[$i] = $this->fac[$i - 1] * $i % self::MOD;
            $this->inv[$i] = self::MOD - $this->inv[self::MOD % $i] * (intdiv(self::MOD, $i)) % self::MOD;
            $this->finv[$i] = $this->finv[$i - 1] * $this->inv[$i] % self::MOD;
        }
    }

    public function get(int $n, int $r): int {
        if ($n < $r) return 0;
        if ($n < 0 || $r < 0) return 0;
        return $this->fac[$n] * ($this->finv[$r] * $this->finv[$n - $r] % self::MOD) % self::MOD;
    }
}

/**
 * 二分探索
 * @param array $haystack ソートされた配列
 * @param int $start_index 検索対象の配列のfirst index
 * @param int $end_index 検索対象の配列のlast index
 * @param $needle 検索したい値
 * @param callable $value_compare_func ユーザー定義の比較関数
 * @return int 見つかったneedleのindex or  -(needleより大きい最小の要素のindex + 1)
 */
function binary_search(array $haystack, int $start_index, int $end_index, $needle, callable $value_compare_func): int {
    $low = $start_index;
    $hi = $end_index - 1;

    while ($low <= $hi) {
        $mid = intdiv($hi - $low, 2) + $low;
        $compare = call_user_func($value_compare_func, $haystack[$mid], $needle);

        if ($compare < 0) {
            $low = $mid + 1;
        } elseif ($compare > 0) {
            $hi = $mid - 1;
        } else {
            return $mid;
        }
    }
    return -($low + 1);
}


