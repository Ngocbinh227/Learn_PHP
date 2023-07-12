<?php
abstract class Animal {
    abstract public function makeSound();
}
    class Dog extends Animal {
        public function makeSound() {
          echo "Go!";
        }
    }
    class Cat extends Animal {
        public function makeSound() {
            echo "Meo!";
        }
    }
$less2_1 = new Dog();
$less2_2 = new Cat();
echo $less2_1->makeSound()."<br>";
echo $less2_2->makeSound()."<br>";
?>