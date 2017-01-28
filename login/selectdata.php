<?php 
include 'connection.php';

$stmt = $con->prepare("SELECT * from myguest");
$stmt->execute();

$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$iterator = $stmt->fetchAll();
foreach(new RecursiveIteratorIterator(new RecursiveArrayIterator($iterator)) as $k=>$v){
	echo $v."<br>";
}

?>