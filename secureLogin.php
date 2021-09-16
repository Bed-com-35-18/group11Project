<?php

include 'databaseConnection.php';

if(isset($_POST['username']) && isset($_POST['password'])){

	$username = $_POST['username'];
	$password = $_POST['password'];

	if (empty(	$username)){
		header("Location: R_login.html?error=Username required");
	}

	else if (empty(	$pass)){
		header("Location: R_login.html?error=Password required");
	}else{
			$stmt = $conn->prepare("SELECT * FROM registrar WHERE username=?");
			$stmt->execute($username);

			if($stmt->rowCount() === 1){
					$username = $stmt->fetch();

                      $username =    $username['username'];
	                  $password     =    $password['password'];

	                  if ($username === $username){
	                  	if(password_verify($password, $password)){
	                  		echo "logged in";

	                  	}else{
	                  		header("Location: R_login.html?error=Incorect User name or password ");
	                  }
	                  	}

	                  }else{
	                  	header("Location: R_login.html?error=Incorect User name or password ");
	                  }

	                  
			}/*else{
				header("Location: R_login.html?error=Incorect User name or password ");
			}*/
}



?>