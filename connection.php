<?php 
$servername = '127.0.0.1';
$username = 'root';
$password = 'root';
$db = 'mydb';

try{
$con = new PDO("mysql:host=$servername; dbname=$db", $username, $password);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e)
{
	echo "Connection failed: ". $e->getMessage();
}
?>