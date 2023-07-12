<?php
abstract class Employee {
    abstract public function name();
    abstract public function salary();
}
class Manager extends Employee {
    protected $name;
    protected $salary;
    public function __construct($name, $salary) {
      $this->name = $name;
      $this->salary = $salary;
    }
    public function name() {
    // echo $this->name;
        }
    public function salary() {
        // echo $this->salary;
        }
    public function getInf() {
        echo $this->name;
        echo $this->salary;
        }
  }
class Staff extends Employee {
 public function __construct($name, $salary) {
    $this->name = $name;
    $this->salary = $salary;
}
    public function name() {
        // echo $this->name;
            }
    public function salary() {
        // echo $this->salary;
    }
    public function getInf() {
        echo $this->name;
        echo $this->salary;
        }
}
$less3_1 = new Manager("Piu",  "8000$");
$less3_2 = new Staff("Piu",  "8000$");
echo $less3_1->getInf()."<br>";
echo $less3_2->getInf()."<br>";
