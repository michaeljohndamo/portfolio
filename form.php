<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo "Date: ".date("l"); ?>

<form method="post" action="form_handling.php">

	First Name:<input type="text" name="fname"><br>
	Last Name: <input type="text" name="lname"><br>
	E-mail:<input type="email" name="email"><br>
	Gender:<input name="gender"><br>
	<input type="radio" name="gender" value="female">Female<br>
	<input type="radio" name="gender" value="male">Male<br>
	<input type="submit" value="submit">
</form>


</body>
</html>