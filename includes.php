<!--Login Start-->

<div class="login">
		<div class="login-headimg">
			<h1> login </h1>
		</div>
		<div class="login-form">
			<div>
				<form action="includes/login.inc.php" method="post">
					<input type="text" name="uid" placeholder="username/email...">
					<input type="password" name="pwd" placeholder="password">
					<button type="submit" name="login-submit">Login</button>
				</form>
				<a href="signup.php">Signup</a>
				<form action="includes/logout.inc.php" method="post">
					<button type="submit" name="logout-submit"> Logout</button>
				</form>
			</div>
		</div>
	</div> 
<!--Login End-->
