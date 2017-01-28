<?php 
include 'connection.php';

$sql = 'CREATE TABLE account (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(32) NOT NULL,
	lastname VARCHAR(32) NOT NULL,
	email VARCHAR(50) NOT NULL,
	reg_date TIMESTAMP
)';
$con->exec($sql);
echo 'successfully created table ';
?>