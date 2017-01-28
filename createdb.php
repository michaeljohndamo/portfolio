<?php 
include 'connection.php';

$sql = "CREATE DATABASE mydb";
$con->exec($sql);
echo "Successfully create ".$sql;

?>