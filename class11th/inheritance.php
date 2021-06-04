<?php

class Student {

    public $name , $fname;
    function __construct($n , $f)
    {
        $this -> name = $n;
        $this -> fname = $f;
    }

    function DisplayInfo()
    {
        // echo  "Your name is " . $this -> name . " your father's name is " . $this -> fname ;
        echo  "Your name is  {$this -> name }  your father's name is  {$this -> fname }";
    }

}


// $myinfo = new Student("Bilal" , "Zahid");


// $myinfo -> DisplayInfo();

class Employee extends Student{
    public $salary , $age;

    function EmplyeeInfo()
    {
        echo  "Your name is  {$this -> name }  your father's name is  {$this -> fname } your age is {$this-> age} your salary is {$this -> salary }";
    }

}

$emp = new Employee("Bilal" , "Ali");

$emp -> age = 55;
$emp -> salary = 55000;

$emp -> EmplyeeInfo();



































// class Fruit {
//   public $name ,  $color;

//   function __construct($name, $color) {
//     $this->name = $name;
//     $this->color = $color;
//   }

//   function intro() {
//     echo "The fruit is {$this->name} and the color is {$this->color}.";
//   }
// }

// // // Strawberry is inherited from Fruit
// class Strawberry extends Fruit {
    
//   function message() {
//     echo "Who am i ? ";
//   }

// }

// $strawberry = new Strawberry("Strawberry", "red");
// $strawberry->message();
// $strawberry->intro();


// The Strawberry class is inherited from the Fruit class.

// This means that the Strawberry class can use the public $name and $color properties as well as the public __construct() and intro() methods from the Fruit class because of inheritance.

// The Strawberry class also has its own method: message().
?>