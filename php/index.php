<?php
// Connection to the database
error_reporting(0);
require 'connect.php';

require 'graphics.php';
die('Purposely killed');

require 'create_table.php';
die('Purposely killed');

// Query for a table
//$result = $conn->query("SELECT * FROM Transactions") or die($conn->error);
//print_r($result);
//if($result->num_rows) {
//	echo 'Yay';
//}
if($result = $db->query("SELECT * FROM Transactions")) {
	//print_r($result);
	if($count = $result->num_rows) { //if there is at least 1 row
		echo '<pre>', 'Number of rows:', $count, '</pre>';

    //$rows = $result->fetch_all(MYSQLI_ASSOC);
	  //echo '<pre>', print_r($rows), '</pre>';
		//foreach ($rows as $row) {
		//	echo $row['ID'], '<br>';
		//}
    $net_income = 0.0;
    while($row = $result->fetch_object()){
			echo $row->ID, ' ', $row->Descriptions, ' ($', $row->Amount, ') ', '<br>';
			$net_income = $net_income + $row->Amount;

	  }
		echo '<pre>', 'Net income:', ' $', $net_income, '</pre>';

	  $result->free();
	}
} else {
	die($conn->error);
}


if($result = $db->query("SELECT * FROM Transactions")) {

} else {
	die($conn->error);
}
//echo nl2br("\nNew line \n New line.");
//echo nl2br("\nNew line \n New line.");
?>
