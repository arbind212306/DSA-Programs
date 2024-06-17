<?php

class FindDuplicatesByHashSet {
    
    protected $values = [];

    public function add($key) {
        $this->values[$key] = true;
    }

    public function contains($key) {
        return $this->values[$key] ?? false;
    }
}

$hashSet = new FindDuplicatesByHashSet();

$arr = [1,4,5,2,4,6,3,1,7];

foreach($arr as $val) {
    if ($hashSet->contains($val)) {
        echo $val;
    } else {
        $hashSet->add($val);
    }
}