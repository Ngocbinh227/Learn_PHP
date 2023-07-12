<?php
interface Resizable {
    public function resize();
}
class Rectangle1 implements Resizable {
    protected $length, $width;
    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }
    public function resize() {
        echo "Resize length is: ". $this->length. "<br>";
        echo " Resize width is: ". $this->width. "<br>";
    }
}
$less6_1 = new Rectangle1(3, 5);
echo $less6_1->resize();