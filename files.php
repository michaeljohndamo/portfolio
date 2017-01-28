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
echo "Date: ".date("l")."<br>";
echo "Current logged in: ".$_SESSION['name'];
?>

<form method="post" action='upload.php' enctype="multipart/form-data">
<input type="file" name="fileToUpload" id='fileToUpload'>
Select file:
<input type="submit" name="submit" value="Upload Image">
	
</form>
</body>
</html>