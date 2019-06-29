<?php
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
 * テスト
 */
$combination = new Combination(500);
if ($combination->get(1, 0) !== 1) throw new Exception;
if ($combination->get(10, 3) !== 120) throw new Exception;
if ($combination->get(500, 30) !== 563514256) throw new Exception;

echo 'Success!', PHP_EOL;
