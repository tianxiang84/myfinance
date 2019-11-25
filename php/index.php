<?php
$host = 'db'; // service name from docker-compose.yml
$user = 'devuser';
$password = 'devpass';
$db = 'test_db';

$conn = new mysqli($host,$user,$password,$db);
if($conn->connect_error){
	echo 'Connection failed' . $conn->connection_error;
}
echo 'Sucessfully connected to MYSQL';

echo nl2br("\nNew line \n New line.");
?>
