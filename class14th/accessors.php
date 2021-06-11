<?php



// problem

// class Student {
//     public $name;
//     function showName()
//     {
//         return $this -> name;
//     }
// }


// $std = new Student();

// $std -> name =  "hasdnw@afsd";

// echo $std -> showName();



// class Student {
//     private $name;
//     function showName()
//     {
//         return $this -> name;
//     }
// }


// $std = new Student();

// $std -> name = "Kashan";

// echo $std -> showName();













// solution

// class Student {

    // private $age;

//     public function GetAge(){
//         return $this -> age;
//     }

//     public function SetAge($a){
//         $this -> age = $a;
//     }

// }


// $std = new Student();
// $std -> SetAge(15);
// // $std -> age; // we can't
// echo $std -> GetAge();






// class Student {
//     private $email;

//     public function GetEmail(){
//         return $this -> email;
//     }

//     public function SetEmail($e){

//         if(strpos($e,"@") > -1){
//             $this -> email = $e;
//         }
//         else{
//             echo "email not correct";
//         }
//     }

// }


// $std = new Student();
// $std -> SetEmail("Nehalgmail.com");
// echo $std -> GetEmail();



class Student {
    private $age;

    public function GetEmail(){
        return $this -> age;
    }

    public function SetEmail($a){

        if(is_int($a)){
            $this -> age = $a;
        }
        else{
            echo "age is not correct";
        }
    }

}


$std = new Student();
$std -> SetEmail(5);
$std -> name = "asdf";
echo $std -> GetEmail();


?>