<?php 
include 'connection.php';

$stmt = $con->prepare("INSERT INTO account(firstname, lastname, email) VALUES (:firstname, :lastname, :email)");

$stmt->bindParam(':firstname', $firstname);
$stmt->bindParam(':lastname', $lastname);
$stmt->bindParam(':email', $email);

$firstname = 'Jay';
$lastname = 'Damo';
$email = 'test@gmail.com';

if($stmt->execute()){
echo 'successfully added';
}
?>