<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<?php

// class 01
//  echo "abc" . "<br>";
//  $name = "Bilal";
//  var_dump($name);
//  $age = 14;
//  var_dump($age);

/*
define('PI', 3.142);
echo PI.'<br>';
*/

// // Create simple string
// $string1 = "Hello, I am hasnain"; 
// $string2 = 'Hello, I am bilal'; 
// // echo $string1 . '<br>';
// // echo $string2 . '<br>';

// echo $string1 ." ". $string2;
// $string = "    Hello World      ";

// echo "2 - " . trim($string) . '<br>';


// echo "1 - " . strlen($string) . '<br>'

// echo "7 - " . strtoupper($string) . '<br>';


// $price = -12;
// $age = 5;

// if($price == 12 || $age == 5) {
//     echo "You can buy this kandy";

// }
// else{
//     echo "You have not enogh money";
// }

// $num = 5 ;

// if($num === "5"){
//     echo "they are equal";
// }
// else{
//     echo "they are not equal";
// }
// switch


// $userRole = 'user'; // admin, editor, user

// switch ($userRole) {
//     case 'admin':
//         echo 'Admin, You can do anything<br>';
//         break;
//     case 'editor';
//         echo 'Editor, You can edit content<br>';
//         break;
//     case 'user':
//         echo 'user, You can view posts and comment<br>';
//         break;
//     default:
//         echo 'Unknown, role<br>';
// }


// class # 2
// String concatenation
// echo "Students attendance " . " yasir" ." "."Alex" . '<br>'; // Multiple concatenation

// String functions

// $string = "    Hello World    asdfsdf sfgd asdfsdf asdfds ";
// echo "1 - " . strlen($string) . '<br>';
// echo "2 - " . trim($string) . '<br>';
// echo $string;
// echo "3 - " . ltrim($string) . '<br>';
// echo "4 - " . rtrim($string) . '<br>';
// echo "5 - " . str_word_count($string) . '<br>';
// echo "6 - " . strrev($string) . '<br>';
// echo "7 - " . strtoupper($string) . '<br>';
// echo "8 - " . strtolower($string) . '<br>';
// $foruc = "hellow world";
// echo "9 - " . ucfirst($foruc) . '<br>';
// $forlc = "Hellow World Asdfsd Aadf Basdfs";
// echo "10 - " . lcfirst($forlc) . '<br>';
// $forwords = "              hello world        dsfsad asdfds   ";
// echo "11 - " . ucwords($forwords) . '<br>';
// echo "12 - " . strpos($string, 'world') . '<br>'; // Change into world case sensetive
// echo "12 - " . strpos($string, 'World') . '<br>'; // Change into world case sensetive
// echo "13 - " . stripos($string, 'world') . '<br>'; //case insensitive 
// echo "14.1 - " . substr($string, 8) . '<br>';
// echo "14.2 - " . substr($string, 4, 7) . '<br>'; // upto defined characters
// echo "15 - " . str_replace('World', 'PHP', $string) . '<br>';
// echo "16 - " . str_ireplace('World', 'PHP', $string) . '<br>'; // case insensitive


// class # 3
// Multiline text and line breaks
// $longText = "
//   Hello, my name is Nihal
//   I am 20,
//   I love programming
// ";
// echo $longText . '<br>';
// echo nl2br($longText) . '<br>';

// // Multiline text and reserve html tags
// $longText = "
//   Hello, my name is <b>Bilal</b>
//   I am <b>27</b>,
//   I love my php
// ";
// echo "1 - " . $longText . '<br>'; // html ignoring white spaces
// echo "2 - " . nl2br($longText) . '<br>'; //new line to br , create br when find br
// echo "3 - " . htmlentities($longText) . '<br>'; // if i want tags
// echo "4 - " . nl2br(htmlentities($longText)) . '<br>'; // now combine both of the two
// echo "5 - " . html_entity_decode(htmlentities($longText)) . '<br>';
// echo "5.2 - " . html_entity_decode("&lt;b&gt;Bilal&lt;/b&gt;") . '<br>';
// echo "6 - " . htmlspecialchars("I teach at <b>tech zone</b>") . '<br>';
// echo "6.2 - " . "I teach at <b>tech zone<b>"; // see difference on view source




// topic : Arrays



// // Create array
$fruits = ["Banana", "Apple", "Orange" , 4];

// // Print the whole array
// echo '<pre>';
// var_dump($fruits); // print_r
// echo '</pre>';

// // Get element by index
// echo $fruits[1].'<br>';

// // // Set element by index
// $fruits[0] = "Peach";


// // Print the whole array
// echo '<pre>';
// var_dump($fruits); // print_r
// echo '</pre>';




// // Check if array has element at index 2
// echo '<pre>';
// var_dump(isset($fruits[2]));
// echo '</pre>';



// // Check if array has element at index 2
// echo '<pre>';
// var_dump(isset($fruits[22]));
// echo '</pre>';



// // Print the length of the array
// echo count($fruits).'<br>';

// // // Add element at the end of the array
// $fruits[0] = "Peach";  // replace
// $fruits[] = 'Peach'; // adding at the end of array




// // Print the whole array
// echo '<pre>';
// print_r($fruits); 
// echo '</pre>';

// // echo $fruits[4].'<br>';
// array_push($fruits, "kashan" , "kamran" , ['Foo','student' , "teacher"]); // adding more elements and nested elements


// // Print the whole array
// echo '<pre>';
// print_r($fruits); 
// echo '</pre>';


// access nested element

// // Print the whole array
// echo '<pre>';
// print_r($fruits[6][1]);
// echo '</pre>';

// // // // Remove element from the end of the array
// array_pop($fruits);
// echo $fruits[3];

// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // // Add element at the beginning of the array
// array_unshift($fruits, 'Apple1');

// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';
// // // Remove element from the beginning of the array
// array_shift($fruits);

// echo $fruits[0];

// // // Split the string into an array
// $string = "Banana,Apple,Peach";
// // echo $string;
// echo '<pre>';
// print_r(explode(",", $string));
// echo '</pre>';


// // // Split the string into an array
// $string = "Ban,ana.Apple.Peach";
// // echo $string;
// echo '<pre>';
// print_r(explode(".", $string));
// echo '</pre>';

// // Combine array elements into string
// echo implode(",", $fruits).'<br>';

// // Check if element exist in the array
// echo '<pre>';
// var_dump(in_array('Apple', $fruits));
// echo '</pre>';

// // Check if array has element at index 2
// echo '<pre>';
// var_dump(isset($fruits[2]));
// echo '</pre>';

// // Search element index in the array
// echo '<pre>';
// var_dump(array_search("Peach", $fruits));
// echo '</pre>';
// // Search element index in the array
// echo '<pre>';
// var_dump(array_search("Apple", $fruits));
// echo '</pre>';

// // // Merge two arrays
// $vegetables = ['Potato', 'Cucumber'];
// echo '<pre>';
// // var_dump(array_merge($fruits, $vegetables));
// var_dump([...$fruits, ...$vegetables]); // Since PHP 7.4
// echo '</pre>';

// // // Sorting of array (Reverse order also)
// sort($fruits); //sort, rsort
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

?>
</body>
</html>