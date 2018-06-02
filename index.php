<!DOCTYPE html>
<html>
<head>
	
		<title>kitemessenger/log in.php</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
</head>
<body>
	<nav>
		<p>Kite messenger</p>
	</nav>
<br>
<div id="login">
	<p>Log In</p>
	<form action="includes/login.inc.php" method="POST">
		<input type="text" name="uid" placeholder="User Name">
		<input type="password" name="pwd" placeholder="Password"><br>
		<button type="submit" name="submit">Log in</button>
		
	</form>
	
</div>
<br>
<div id="butoni"><a  href="signup.php"><p>Sign Up</p></a></div>


</body>
</html>