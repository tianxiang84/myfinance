<?php
// Method 1
// $sql = "CREATE TABLE persons(
//     id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
//     first_name VARCHAR(30) NOT NULL,
//     last_name VARCHAR(30) NOT NULL,
//     email VARCHAR(70) NOT NULL UNIQUE
// )";
// if(mysqli_query($db, $sql)){
//     echo "Table created successfully.";
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// }

// Method 2
if($result = $db->query("
CREATE TABLE table_template(
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  sources VARCHAR(10) NOT NULL
  )
")){
  echo 1;
} else {
  echo 2;
}

 ?>
