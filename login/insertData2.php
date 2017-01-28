<?php 
// insert data using bindParam
include "connection.php";

$stmt = $con->prepare("INSERT INTO accounts (username, password) VALUES (:username, :password)");
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);

$username = 'jaydamo';
$password = 'test';
$stmt->execute();
?>