<?php
interface Drawable {
    public function draw();
}
class Circle1 implements Drawable {
    public function draw() {
        return "Drawing a circle:";
    }
}
class Square1 implements Drawable {
    public function draw() {
        return "Drawing a square:";
    }
}
$less8_1 = new Circle1();
$less8_2 = new Square1();
$draws = [$less8_1, $less8_2];
foreach($draws as $draw)
echo $draw->draw(). "<br>";