<?php

class HashSet {
    protected $values = [];

    public function add ($key) {
        $this->values[$key] = true;
    }

    public function remove ($key) {
        if (isset($this->values[$key])) {
            unset($this->values[$key]);
        }
    }

    public function contains ($key) {
        return $this->values[$key] ?? false;
    }
}

$hashset = new HashSet();
$hashset->add(2);
$hashset->add(1);
$hashset->add(4);
echo $hashset->contains(2);
$hashset->remove(2);
echo $hashset->contains(2);
