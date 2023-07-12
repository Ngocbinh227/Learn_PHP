<?php
abstract class Vehicle {
    abstract public function start();
}
    class Car extends Vehicle {
        public function start() {
          echo "Starting car!";
        }
    }
    class Motorcycle extends Vehicle {
        public function start() {
            echo "Starting motorcycle!";
        }
    }
$less4_1 = new Car();
$less4_2 = new Motorcycle();
echo $less4_1->start()."<br>";
echo $less4_2->start()."<br>";