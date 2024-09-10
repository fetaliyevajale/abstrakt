<?php

abstract class Employee {
    protected $name;
    protected $salary;

     public function __construct($name,$salary)
     {
        $this->name=$name;
        $this->salary=$salary;
     }

     public function info(){
        echo "Name: " . $this->name . "<br>";
        echo "Salary: " . $this->salary . "<br>";
     }

     abstract protected function calculateSalary();
    
}

class FullTimeEmployee extends Employee {
  
    public function calculateSalary() {
 
        echo "Hesablanan Maas: " . ($this->salary * 1.1); 
    }
}

$employee = new FullTimeEmployee("Huseyinova Gunay", 1000);
$employee->info();
$employee->calculateSalary();