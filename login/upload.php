<?php
$target_dir = "upload/";
$target_file = $target_dir. basename($_FILES['fileToUpload']['name']);
$uploadOk = 1;
$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);

if(isset($_POST['submit']) && isset($_FILES['fileToUpload']['name']))
{
	if(!$_FILES['fileToUpload']['name'])
	{
		echo "Please upload a file";
		$uploadOk = 0;
	}
	elseif(file_exists($target_file))
	{
		echo "File is already exist";
		$uploadOk = 0;
	}
	elseif($_FILES['fileToUpload']['size'] > 5000000){
		echo "Your file is too large";
		$uploadOk = 0;
	}
	elseif($imagefiletype != "jpg" && $imagefiletype != "jpeg" && $imagefiletype != "png")
	{
		echo "The image is not a jpeg,jpg or png";
		$uploadOk = 0;
	}else {
	if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
			echo "The file was successfully added ". basename($_FILES['fileToUpload']['tmp_name']);
			$uploadOk = 1;
		}else{
			echo "Sorry there were error on uploading ". $_FILES['fileToUpload']['error'];
			$uploadOk = 0;
		}
	}
}

?>