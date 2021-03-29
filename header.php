<head>
<style>
	.login {
 
		height: 500px;
		width: 400px;	
		display: block;
		margin: auto;	
	}
	.login-headimg{
		height:45%;
	}
	.login-headimg * {
		display: block;
		margin:auto;
		text-align: center;
		
	}
	.login-headimg img {
		width: 75px;
	}
	.login-form{
	height:55%;
	} 
	.login-form  *{
		display: block;
		margin: auto;
		text-align: center;
		margin-top: 1%;
	}
</style>
</head>
<body>
<?php
	session_start();
	if(isset($_SESSION['userId']))
	{
		echo "<p> logged in as: ".$_SESSION['userUid']."</p>";
	}	
	if(isset($_GET['logout']))
	{
		if ($_GET['logout'] == "success")
		{
			echo "logout success";

		}
	}
	if(isset($_GET['error']))
	{
			echo $_GET['error'];

	} elseif(isset($_GET['signup']))
	{
			echo "signup success";

	}
?>
