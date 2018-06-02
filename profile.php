<?php
include_once 'dbh.inc.php';

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>kite messenger/profile</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
</head>
<body>
	<nav>

		<p>User Profle</p>


	</nav>
	<br>
		<div id="profile">
			<br>
			
			<div id="profile-img">
				<?php

				//if ($_SESSION['u_first']) == {
					
				//}




				?>
			</div>
			<br>
			
			<?php

			echo "<div id='fullname'><p>First Name:&emsp;".$_SESSION['u_first']."</p> </div>";
			echo "<div id='fullname'><p>Last Name:&emsp;".$_SESSION['u_last']."</p> </div>";
			echo "<div id='bios'><p>Bios:&emsp;".$_SESSION['u_info']."</p> </div>";
			     // <div id='username'><p>".$_SESSION['u_uid']."</p></div>
			    //  <div id='bios'><p>".$_SESSION['u_last']."</p></div>";

		?>
		</div>

	<br>


	<div id="back"><a href="home.php"><p>Home</p></a></div>