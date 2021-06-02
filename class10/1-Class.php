<?php





class Calculation {
    public $a , $b , $c ; // properties

    function sum(){ // method
        $this -> c = $this -> a + $this -> b;
        return $this -> c;
    }

    function sub(){ // method
        $this -> c = $this -> a - $this -> b;
        echo $this -> c;
    }
}






// // To add numbers

// $calc = new Calculation(); // we initilized an object

// $calc->a = 40;
// $calc->b = 30;

// echo $calc->sum();


// // To Subtract numbers


// $kuchbhi = new Calculation();

// $kuchbhi->a = 40;
// $kuchbhi->b = 30;

// $kuchbhi -> sub();





















// class Calculation {
//     public $a , $b , $c ; // properties

//     function sum(){ // method
//         $this -> c = $this -> a + $this -> b;
//         return $this -> c;
//     }

//     function sub(){ // method
//         $this -> c = $this -> a - $this -> b;
//         return $this -> c;
//     }
// }

// // To add numbers

// $calc = new Calculation();

// $calc->a = 40;
// $calc->b = 30;

// echo $calc->sum();

// // To subtract numbers

// $calc = new Calculation();

// $calc->a = 40;
// $calc->b = 30;

// echo $calc->sub();






?>