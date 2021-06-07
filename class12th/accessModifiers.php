<?php


// // use of public
// class MYfruit {
//   public $name;
//   protected $color;
//   private $weight;
//   function show()
//   {
//     return $this -> name;
//   }
// }



// $mango = new MYfruit();
// $mango->name = 'Mango'; // OK
// echo $mango -> show();

// $mango->color = 'Yellow'; // ERROR
// $mango->weight = '300'; // ERROR



// // now use of protected
// class MYfruit {

//     protected $color = "Mango";
//     function show()
//     {
//       return $this -> color;
//     }
//   }

// $mango = new MYfruit();
// // $mango -> $color = "Apple"; // will throw error because its outside of the class
// echo $mango -> show();


// class NewFruit extends MYfruit{


//     public function ShowNew()
//     {
//        return $this -> color;
//     }
// }

// $newMoango = new NewFruit();

// $newMoango -> ShowNew();


// // now use of private
// class MYfruit {

//     private $color = "Mango";
//     function show()
//     {
//       return $this -> color;
//     }
//   }

// $mango = new MYfruit();
// // $mango -> $color = "Apple"; // will throw error because its outside of the class
// echo $mango -> show();


// class NewFruit extends MYfruit{


//     public function ShowNew()
//     {
//        return $this -> color;
//     }
// }

// $newMoango = new NewFruit();

// $newMoango -> ShowNew();








class MYFruit2 {
    public $name;
    public $color;
    public $weight;
  
    public function set_name($n) {  // a public function (default)
        
        $this->name = $n;
        return $this -> name;
    }


    protected function set_color($n) { // a protected function
     $this->color = $n;
    //  return $this->color = $n;
    }
    private function set_weight($n) { // a private function
      $this->weight = $n;
    }
  }
  
//   $mango = new MYFruit2();

//   echo $mango->set_name('Mango'); // OK

//   $mango->set_color('Yellow'); // ERROR
//   $mango->set_weight('300'); // ERROR




// class NewMYFruit2 extends MYFruit2{
//     public function NewMYFruit2Function()
//     {
//         return $this -> set_color("Apple");
//     }
// }

// $NewMYFruit2 = new NewMYFruit2();
// echo $NewMYFruit2 -> NewMYFruit2Function();


?>