<?php
// Connection to the database
$host = 'db'; // service name from docker-compose.yml
$user = 'devuser';
$password = 'devpass';
$db_name = 'tianxiang_db';
$db = new mysqli($host,$user,$password,$db_name);
if($db->connect_error) {
	echo 'Failed to connect to database:' . $db->connect_error;
	echo nl2br("\n");
	die('Connection issues. Sorry');
}
echo 'Sucessfully connected to MYSQL';
echo nl2br("\n");
?>
