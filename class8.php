<?php



// // file_get_contents from URL
$jsonContent = file_get_contents('https://jsonplaceholder.typicode.com/users');
// echo $jsonContent;
// The json_decode() function is used to decode or convert a JSON object to a PHP object
// $users = json_decode($jsonContent , false); // true to convert into associative array , false for object
// echo "<pre>";
// var_dump($users);
// echo "</pre>";

// $users = json_decode($jsonContent , true); // true to convert into associative array , false for object
// echo "<pre>";
// var_dump($users);
// echo "</pre>";


// $jsonobj = '{"Kamran":35,"Ali":37,"kashan":43}'; // json data

// $obj = json_decode($jsonobj); // by default false , convert into php object

// echo $obj->Kamran . "<br/>";
// echo $obj->Ali . "<br/>";
// echo $obj->kashan . "<br/>";


// $jsonobj = '{"Kamran":35,"Ali":37,"kashan":43}'; // json data

// $arr = json_decode($jsonobj, true); // convert into asociative array

// echo $arr["Kamran"] . "<br/>";
// echo $arr["Ali"] . "<br/>";
// echo $arr["kashan"] . "<br/>";






// // // Check if file exists or not
// echo file_exists('class7.txt') . "<br/>"; // return boolean
// echo is_dir("class7"); // checking if directory present // return boolean

// Get file size
// echo filesize('class7.txt');

// // Delete file
// unlink('lorem.txt');

// https://www.php.net/manual/en/book.filesystem.php


?>