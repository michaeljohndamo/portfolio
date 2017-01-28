<?php 
include 'connection.php';

$sql = ("UPDATE account SET firstname='cloud' where id = 1");
$con->prepare($sql);
$con->execute();
echo "Successfully updated the data";
?>