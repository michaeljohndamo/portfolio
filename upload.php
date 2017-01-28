<?php
// script to run files.php


$target_dir = 'uploads/';
$target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

if(isset($_POST['submit']) && isset($_FILES['fileToUpload']))
{
	var_dump($_FILES['fileToUpload']['name']);
	if(!$_FILES['fileToUpload']['name']){
		echo "please upload a file "."<br>";
		$uploadOk = 0;
	}
	elseif(file_exists($target_file))
	{
		echo "Sorry file is already exists";
		$uploadOk = 0;
	}
	elseif($_FILES['fileToUpload']['size'] > 500000)
	{
		echo "Sorry the file is too large";
		$uploadOk = 0;
	}
	elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg")
	{
		echo "Sorry the file is not an image";
		$uploadOk = 0;
	}
	if($uploadOk == 0)
	{
		echo "Your file was not uploaded";
	}else {
		if(move_uploaded_file($_FILES["fileToUpload"]['tmp_name'], $target_file))
		{
			echo "The file ".basename($_FILES['fileToUpload']['name'])." has been uploaded.";
		}else{
			echo "Sorry, there was an error uploading your file";
		}
	}
}
