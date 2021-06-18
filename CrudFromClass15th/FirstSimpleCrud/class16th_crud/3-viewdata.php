<?php

require_once "../class15th_crud/0-config.php";

// // by msqli oop
// $sql = "SELECT * FROM employees";
// $result = $conn->query($sql);
// // echo print_r($result);
// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["id"]. " - Name: " . $row["name"]. "-" . $row["salary"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }
// $conn->close();



// // // by mysqli procedural


// $sql = "SELECT * FROM employees";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//   // output data of each row
//   while($row = mysqli_fetch_assoc($result)) {
//     echo "id: " . $row["id"]. " - Name: " . $row["name"]. "-" . $row["salary"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }

// mysqli_close($conn);

?>