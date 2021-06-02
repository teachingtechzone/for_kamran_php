<?php


// // bad practice
// class Person {
//     public $name , $fname , $age;

//     function displayinfo()
//     {
//         echo "Name : " . $this -> name . "Father's Name: " . $this -> fname . "Age: " . $this -> age;
//     }
// }


// $p1 = new Person();

// $p1 -> name = "abc ";
// $p1 -> fname = "def ";
// $p1 -> age = 23;


// $p1 -> displayinfo();


// Good practice


// Constructor function call automaticaly when we initiate an object

// In constructor function we can initilize properties

// class MyPerson2 {

//     public $name , $fname , $age;
    
//     function __construct($n , $f , $a){  

//         $this -> name = $n;
//         $this -> fname = $f;
//         $this -> age = $a;
        
//     }



//     function yourinfo()
//     {
//         echo "Name : " . $this -> name . "Father's Name: " . $this -> fname . "Age: " . $this -> age;
//     }
// }

// $p1 = new MyPerson2("abc " , "def " , 23);


// $p1->yourinfo();






// Best practice

// // for Default value and the right place
// class MyPerson4 {
    
//     public $name , $fname , $age;
    
//     function __construct($n = "name" , $f = "fname" , $a = 20 ){  

//         $this -> name = $n;
//         $this -> fname = $f;
//         $this -> age = $a;
        
//     }


//     function yourinfo()
//     {
//         echo "Name : " . $this -> name . "Father's Name: " . $this -> fname . "Age: " . $this -> age;

//     }
// }


// $p1 = new MyPerson4(); // this will set the default values
// $p1 = new MyPerson4("Bilal " ,"Zahid ",  25); // this will set this new value


// $p1->yourinfo();


?>