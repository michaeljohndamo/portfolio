<?php 
include 'connection.php';

$sql = ("UPDATE account SET firstname='cloud' where id = 1");
$stmt = $con->prepare($sql);
$stmt->execute();
echo "Successfully updated the data";
?>