<!DOCTYPE html>
<html>
<head>

		<title>kitemessenger/signup.php</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
</head>
<body>
	<nav>
		<p>Kite messenger</p>
	</nav>
<br>
<div id="signup">
	
	<p>Sign Up</p>
	
	<form action="includes/signup.inc.php" method="POST">
		<input type="text" name="first" placeholder="First Name">
		<input type="text" name="last" placeholder="Last Name">
		<input type="text" name="uid" placeholder="User Name">
		<input type="password" name="pwd" placeholder="Password"><br>

		
		<textarea cols="20" rows="12" name="mybios" placeholder=" More about you (this is optional)"></textarea>
		
		<button type="submit" name="submit">Sign up</button>
		
	</form>
	
</div>


</body>
</html>