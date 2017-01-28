<?php 
require_once('connection.php');

if(isset($_POST['btn-signup'])){
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);

	if($username == ""){
		$error[] = 'provide username';
	}elseif($password == ""){
		$error[] = "Password must contain at least 6 characters";
	}else{
		try{
			$stmt = $con->prepare("SELECT username from accounts where username = :username");
			$stmt->execute(array(":username"=>$username));
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			if($row['username'] == $username){
				$error[] = 'Username is already taken';
			}else{
				if($user->register($username, $password))
				{
					$user->redirect('sign-up.php?joined');
				}
			}
		}catch(PDOException $e)
		{
			$e->getMessage();
		}
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"  />
	<link rel="stylesheet" href="style.css" type="text/css"  />
</head>
<body>
	<div class="container">
     <div class="form-container">
        <form method="post">
            <h2>Sign up.</h2><hr />
            <?php
            if(isset($error))
            {
               foreach($error as $error)
               {
                  ?>
                  <div class="alert alert-danger">
                      <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                  </div>
                  <?php
               }
            }
            else if(isset($_GET['joined']))
            {
                 ?>
                 <div class="alert alert-info">
                      <i class="glyphicon glyphicon-log-in"></i> &nbsp; Successfully registered <a href='index.php'>login</a> here
                 </div>
                 <?php
            }
            ?>
            <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Enter Username" value="<?php if(isset($error)){echo $uname;}?>" />
            </div>
            <div class="form-group">
             <input type="password" class="form-control" name="password" placeholder="Enter Password" />
            </div>
            <div class="clearfix"></div><hr />
            <div class="form-group">
             <button type="submit" class="btn btn-block btn-primary" name="btn-signup">
                 <i class="glyphicon glyphicon-open-file"></i>&nbsp;SIGN UP
                </button>
            </div>
            <br />
            <label>have an account ! <a href="index2.php">Sign In</a></label>
        </form>
       </div>
</div>
</body>
</html>