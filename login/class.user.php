<?php
session_start();
class User {

	private $db;
	public function __construct($con)
	{
		$this->db = $con;
	}

	public function register($username, $password)
	{
		try{
		$new_password = password_hash	($password, PASSWORD_DEFAULT);

		$stmt = $this->db->prepare("INSERT INTO accounts (username, password) values (:username, :password)");
		$stmt->bindParam(":username", $username);
		$stmt->bindParam(":password", $password);
		$stmt->execute();
	}catch(PDOException $e){
		echo $e->getMessage();
	}
	}

	public function login($username, $password)
	{
		try {
			$stmt = $this->db->prepare("SELECT * from accounts where username = :username AND password = :password");
			$stmt->execute(array(':username'=>$username, ':password'=>$password));
			$userRow = $stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() > 0)
			{
				if($password){
					$_SESSION['user_session'] = $userRow['id'];
					return true;
				}else{
					return false;
				}
			}
		}catch(PDOException $e){
		echo $e->getMessage();
	}
	}

	public function is_loggedin()
	{
		if(isset($_SESSION['user_session']))
		{
			return true;
		}
	}

	public function redirect($url)
	{
		header("Location: $url");
	}
}

?>