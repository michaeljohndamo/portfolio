<?php 
$servername = '127.0.0.1';
$db_username = 'root';
$db_password = '';

try {
$con = new PDO("mysql:host=$servername;dbname=mydbpdo", $db_username, $db_password);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	echo "Connection failed ". $e->getMessage();
}

include_once 'class.user.php';
$user = new User($con);
?>