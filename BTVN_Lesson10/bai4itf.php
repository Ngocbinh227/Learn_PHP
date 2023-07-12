<?php
interface Sortable {
    public function getSort();
}
class ArraySorter implements Sortable {
    protected $arr;
    public function __construct($arr) {
        $this->arr = $arr;
    }
    public function getSort() {
        sort($this->arr);
        return $this->arr;
    }
}
class LinkedListSorter implements Sortable {
    protected $arr;
    public function __construct($arr) {
        $this->arr = $arr;
    }
    public function getSort() {
        sort($this->arr);
        return $this->arr;
    }
}
$arr1 = [6,8,3,7];
$arr2 = ["Volvo", "BMW", "Toyota"];
$less9_1 = new ArraySorter($arr1);
$less9_2 = new LinkedListSorter($arr2);
$result1 = $less9_1->getSort();
$result2 = $less9_2->getSort();
echo implode(", ", $result1). "<br>";
echo implode(", ", $result2). "<br>";
?>