<?php 


// // ============================================
// // Associative arrays
// // ============================================

// // Create an associative array
$person = [
    'name' => 'Arsalan',
    'surname' => 'Khan',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games']
];

// $person = ["ali" , "Dana" , 23, ["black", "white"]];

// echo '<pre>';
// // var_dump($person);
// print_r($person);
// echo '</pre>';

// echo '<pre>';
// print_r($person["name"]);
// echo '</pre>';

// echo '<pre>';
// print_r($person[1]);
// echo '</pre>';



// Get element by key
// echo $person['name'].'<br>';

// // Set element by key
// $person['institute'] = 'Tech Zone';

// echo '<pre>';
// // var_dump($person);
// print_r($person);
// echo '</pre>';

// //Null coalescing assignment operator. Since PHP 7.4

// // // before php 7 
// if (!isset($person['address'])){
//     $person['address'] = 'Unknown';
// }
// echo "<pre>";
// print_r($person);
// echo "</pre>";

// // or using ternary operator

// $person['address'] = (isset($person['address']) ? $person['address'] : 'Unknown');
// echo "<pre>";
// print_r($person);
// echo "</pre>";


// $age = 2;
// $a = ($age == 22) ? "young" : "not young";
// print_r($a);
// if($age == 22){
    //     print_r("young");
    // }
    // else{
        //     print_r("not young");
        // }
        
        
        
// $person['address'] = (isset($person['address']) ? $person['address'] : 'Unknown');

// // // now after php 7
// $person['address'] = $person['address'] ?? 'Unknown';
// echo "<pre>";
// print_r($person);
// echo "</pre>";


// // and simplified in php 7.4
// $person['address'] ??= 'Unknown'; // Unexpected error occur during class
// echo $person['address'].'<br>';



// echo "<pre>";
// print_r($person);
// echo "</pre>";
// // Check if array has specific key
// echo '<pre>';
// var_dump(isset($person['location']));  // Change age into "location"
// echo '</pre>';

// // // Print the keys of the array
// echo '<pre>';
// var_dump(array_keys($person));
// echo '</pre>';


?>