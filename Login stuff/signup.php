<!-- </?php
	require "header.php";
	
?>
<h1>signup</h1>
<form action="includes/signup.inc.php" method="post">
</?php
	if(isset($_GET['uid']))
	{
		echo '<input type="text" name="uid" placeholder="username" value="'.$_GET["uid"].'">';
	} else 
	{
		echo '<input type="text" name="uid" placeholder="username">';	
	}
	if(isset($_GET['email']))
	{
		echo '<input type="text" name="mail" placeholder="E-mail" value="'.$_GET["email"].'">';
	} else 
	{
		echo '<input type="text" name="mail" placeholder="E-mail">';
	}
//	<input type="text" name="mail" placeholder="E-mail">
?>
	<input type="password" name="pwd" placeholder="password">
	<input type="password" name="pwd-repeat" placeholder="re-type password">
	<button type="submit" name="signup-submit">Signup</button>
</form>
</?php
	require "footer.php"; 
?>
