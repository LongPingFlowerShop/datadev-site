<?php
	if(isset($_POST['signup-submit']))
	{
		require 'dbh.inc.php';
		
		$username = $_POST['uid'];		
		$email = $_POST['mail'];
		$password = $_POST['pwd'];
		$passwordRepeat = $_POST['pwd-repeat'];

		if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat) )
		{
			header("location: ../signup.php?error=emptyfields&uid=".$username."&email=".$email);	
			exit();
		}
		elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username))
		{	
			header("location: ../signup.php?error=invalidemail&uid=".$username);	
			exit();

		} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			header("location: ../signup.php?error=invalidemail&uid=".$username);	
			exit();
		
		} elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username))
		{
			header("location: ../signup.php?error=invaliduid&email=".$email);	
			exit();
		
		} elseif ($password !== $passwordRepeat)
		{
			header("location: ../signup.php?error=passwordcheck&uid=".$username."&email=".$email);	
			exit();
			
		} else 
		{
			$sql = "SELECT userName FROM users WHERE userName=?";
			$stmt = mysqli_stmt_init($conn);	
			if (!mysqli_stmt_prepare($stmt, $sql))
			{
				header("location: ../signup.php?error=sqlerrorpoop");	
				exit();
			} else
			{
				mysqli_stmt_bind_param($stmt, "s", $username);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$resultCheck = mysqli_stmt_num_rows($stmt);
				if ($resultCheck > 0){
					header("location: ../signup.php?error=usertaken&mail=".$email);	
					exit();
				
				} else
					$sql = "INSERT INTO users (userName, email, pswd) VALUES (?, ?, ?)";
					$stmt = mysqli_stmt_init($conn);	
					if (!mysqli_stmt_prepare($stmt, $sql))
					{
						header("location: ../signup.php?error=sqlerrorasdasd");	
						exit();
					} else
					{
						$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
						mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
						mysqli_stmt_execute($stmt);
						header("location: ../index.php?login=success");	
						exit();
						
					}
				}
			}
		mysqli_stmt_close($stmt);
		mysqli_close($conn);
	} else 
	{
		header("location: ../signup.php");
		exit(); 
	} 


