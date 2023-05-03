<?php

require "config.php";

// If the session variable is already set, automatically redirect the user to index page
if (isset($_SESSION['is_logged_in'])) {
	if ($_SESSION['is_logged_in']) {
		header('Location: index.php');
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
<h1>Login</h1>

<form action="attempt-login.php" method="POST">
	<div>
		<label>Email Address</label>
		<input type="email" name="email" placeholder="email@address.com" />	
	</div>
	<div>
		<label>Password</label>
		<input type="password" name="password" />	
	</div>
	<div>
		<button>
			Login
		</button>	
	</div>
</form>
<form action="register.php" method="POST">
	<div>
		<button>
			Register
		</button>
	</div>	
	</body>
</html>
