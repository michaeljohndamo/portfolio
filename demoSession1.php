<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
echo "My fucking name is ". $_SESSION['name'];
?>
</body>
</html>