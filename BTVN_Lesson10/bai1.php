<?php
abstract class Shape {
    abstract public function calculateArea();
}
class Circle extends Shape {
    protected $radius;
    public function __construct($radius) {
      $this->radius = $radius;
    }
    public function calculateArea() {
    return 3.14 * pow($this->radius, 2);
        }
  }
class Rectangle extends Shape {
    protected $length;
    protected $width;
 public function __construct($length, $width) {
    $this->length = $length;
    $this->width = $width;
}
public function calculateArea() {
return ($this->length + $this->width) * 2;
    }
}
$less1 = new Circle(10);
$less2 = new Rectangle(3, 4);
echo $less1->calculateArea()."<br>";
echo $less2->calculateArea();