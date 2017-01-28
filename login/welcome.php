<?php 
$nameErr = '';
$name = '';
$email = '';
$gender = '';

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($_POST['name']))
	{
		$nameErr = "name is required";
	} else {
	$name = test_input($_POST["name"]);
	}
	$email = test_input($_POST["email"]);
	$gender = test_input($_POST['gender']);
}

echo "Your name: ".$name;
echo "Your email: ". $email;
echo "Your Gender: ". $gender;

function test_input($data)
{
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>