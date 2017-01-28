<?php 
include 'connection.php';

$stmt = $con->prepare("SELECT * from account");
$stmt->execute();

$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
foreach(new RecursiveIteratorIterator(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v)
{
	echo $v."<br>";
}
?>