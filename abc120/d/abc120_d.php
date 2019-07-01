<?php
/**
 * ABC120
 * D - Decayed Bridges
 */

// $s = trim(fgets(STDIN));
// fscanf(STDIN, "%d %d", $a, $b);
// $n = array_map('intval', explode(' ', trim(fgets(STDIN))));

fscanf(STDIN, "%d %d", $N, $M);
for ($i = 0; $i < $M; $i++) {
    fscanf(STDIN, "%d %d", $A[$i], $B[$i]); 
}

echo $result, PHP_EOL;

class Node
{
    private $parent_index;
    private $rank;
    public function __construct(int $parent_index, int $rank) {
        $this->parent_index = $parent_index;
        $this->rank = $rank;
    }
    public function get_parent_index(): int {
        return $this->parent_index;
    }
    public function get_rank(): int {
        return $this->rank;
    }
    public function set_parent_index(int $parent_index) {
        $this->parent_index = $parent_index;
    }
    public function set_rank($rank) {
        $this->rank = $rank;
    }
    public function increment_rank() {
        $this->rank++;
    }
}

class Union_Find_Tree
{
    private $nodes = [];
    public function __construct(int $node_number) {
        for ($i = 0; $i < $node_number; $i++) {
            $this->nodes[$i] = new Nodes($i, 0);
        }
    }

    /**
     * 親のインデックスを取得して、縮約も行う
     * @param int $target
     * @return int 親のインデックス
     */
    public function find_root(int $target): int {
        $parent_index = $this->nodes[$target]->get_parent_index();
        // 親が自分自身のとき
        if ($parent_index === $target) {
            return $target;
        }
        $root_index = $this->find_root($parent_index);
        $this->nodes[$target]->set_parent_index($root_index);
        return $root_index;
    }

    /**
     * インデックスxとyのグループを併合する
     */
    public function unite(int $x, int $y) {
        // 同じグループなら何もしない
        $x_root_index = $this->find_root($x);
        $y_root_index = $this->find_root($y);
        if ($x_root_index === $y_root_index) return;

        // xのrankのほうが小さいなら、xの親をyにする
        // そうでないなら、yの親をxにしてランクを増やす
        $x_root_node = $this->nodes[$x_root_index];
        $y_root_node = $this->nodes[$y_root_index];
        if ($x_root_node->get_rank() < $y_root_node->get_rank()) {
            $this->nodes[$x]->set_parent_index($y);
        } else {
            $this->nodes[$y]->set_parent_index($x);
            if ($x_root_node->get_rank() === $y_root_node->get_rank()) {
                $x_root_node->increment_rank();
            }
        }
    }

    /**
     * インデックスxとyが同じ集合に所属するか否かを返す
     * @param integer $x
     * @param integer $y
     * @return boolean 同じ集合にいるか否か
     */
    public function is_same_group(int $x, int $y): bool {
        return $this->find_root($x) === $this->find_root($y);
    }
}

