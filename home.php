

<?php
include_once 'dbh.inc.php';

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>kite messenger</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
</head>
<body>
	<nav>
		<p>Kite messenger &emsp; &emsp;</p>
		
	</nav>
	<br>
	<?php

	echo  "<div id='welcome'><a href='profile.php'><p>Welcome&emsp;".$_SESSION['u_uid']. "</p></a>


	</div>"

		?>

	
	<br>
	<div id="indexa"><p>Start New Messaging Here</p></div>
	<div id="new-div">
		<form action="insert.php" method="POST">
		
		<textarea cols="20" rows="12" name="message" placeholder="Write Your Message here....."></textarea><br>
		<button type="submit">Send..</button>



	</form>
	<br>

<!--	<div id="upload-image">
	<form method="POST" action="../upload.php" enctype="multipart/form-data">
	<input type="file" name="file" value="choose photo">
	<button type="submit">Post photo</button>

	</form>
	</div>

-->

		


	</div>
	<br>
	<?php
	$sql = "SELECT * FROM comments;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($rows = mysqli_fetch_assoc($result)) {

			echo  "<div id='sub'><h3>".$rows['commenti_name']. "</h3>
			     

			</div>";
			

			echo  "<div id='sub2'><p>".$rows['commenti_p']. "</p>
			     

			</div> <br><br>";

		}


			}

			
			



	?>
	<br>
	<div id="search-div">
		<p>Search Message</p>
		<form action="search.php" method="POST">
		<input type="text" name="search">
		<button type="search-button">search</button>
	</form>
		
	</div>
	<br>
	<br>
<div id="back">
	<form action="includes/logout.php" method="post">
			<button type="submit" name="submitLogout"><p>log out</p></button>
			
		</form></div>


</body>
</html>