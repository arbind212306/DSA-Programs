<?php

class HashMap {
    protected $values = [];

    public function put ($key, $val = null) {
        $this->values[$key] = $val;
    }

    public function remove ($key) {
        if (isset($this->values[$key])) {
            unset($this->values[$key]);
        }
    }

    public function get ($key) {
        return $this->values[$key] ?? -1;
    }
}

$myHashMap = new HashMap();
$myHashMap->put(1, 1); // The map is now [[1,1]]
$myHashMap->put(2, 2); // The map is now [[1,1], [2,2]]
echo $myHashMap->get(1);    // return 1, The map is now [[1,1], [2,2]]
echo $myHashMap->get(3);    // return -1 (i.e., not found), The map is now [[1,1], [2,2]]
$myHashMap->put(2, 1); // The map is now [[1,1], [2,1]] (i.e., update the existing value)
echo $myHashMap->get(2);    // return 1, The map is now [[1,1], [2,1]]
$myHashMap->remove(2); // remove the mapping for 2, The map is now [[1,1]]
echo $myHashMap->get(2);    // return -1 (i.e., not found), The map is now [[1,1]]