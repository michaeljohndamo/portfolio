<?php
require_once('connection.php');

if($user->is_loggedin() != "")
{
	$user->redirect('home.php');
}

if(isset($_POST['btn-login']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
if($user->login($username, $password))
{
	$user->redirect('home.php');

}else{
	$error = 'Wrong details';
}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"  />
	<link rel="stylesheet" href="style.css" type="text/css"  />
</head>
<body>
<div class="container">
     <div class="form-container">
        <form method="post">
            <h2>Sign in.</h2><hr />
            <?php
            if(isset($error))
            {
                  ?>
                  <div class="alert alert-danger">
                      <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> !
                  </div>
                  <?php
            }
            ?>
            <div class="form-group">
             <input type="text" class="form-control" name="username" placeholder="Username or E mail ID" required />
            </div>
            <div class="form-group">
             <input type="password" class="form-control" name="password" placeholder="Your Password" required />
            </div>
            <div class="clearfix"></div><hr />
            <div class="form-group">
             <button type="submit" name="btn-login" class="btn btn-block btn-primary">
                 <i class="glyphicon glyphicon-log-in"></i>&nbsp;SIGN IN
                </button>
            </div>
            <br />
            <label>Don't have account yet ! <a href="sign-up.php">Sign Up</a></label>
        </form>
       </div>
</div>

</body>
</html>