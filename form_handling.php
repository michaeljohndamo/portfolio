
<?php
// script to run form.php


function test_input($data)
{
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
$fname = '';
$lname = '';
$email = '';
$gender = '';
$fnameErr = '';
$lnameErr = '';
$emailErr = '';
$genderErr = '';

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	echo "Your input: "."<br>";
	if($_POST['fname'])
	{
		echo $fname = test_input($_POST['fname']);
		if(!preg_match("/^[a-zA-z ]*$/",$fname)){
			echo $fnameErr = "Invalid name";
		}
	} else {
		echo $fnameErr = "firstname is required!";
	}
	echo "<br>";
	if($_POST['lname'])
	{
		echo $lname = test_input($_POST['lname']);
		if(!preg_match("/^[a-zA-z ]*$/", $lname))
		{
			echo $lnameErr = "Invalid last name";
		}
	}else{
		echo $lnameErr = "last name is required!";
	}
	echo "<br>";
	if($_POST['email'])
	{
		echo $email = test_input($_POST['email']);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
		echo $emailErr = "Invalid email!";
		}
	}else{
		echo $emailErr = "Email is required!";
	}
	echo "<br>";
	if($_POST['gender'])
	{
		echo $gender = test_input($_POST['gender']);
	}else{
		echo $genderErr = "Gender is required!";
	}
}








?>