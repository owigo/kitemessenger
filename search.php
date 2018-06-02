
<?php
include_once 'dbh.inc.php';


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
		<p>Kite messenger</p>
	</nav>
	<br>
	<div id="search-div2">
		
		<form action="search.php" method="POST">
		<input type="text" name="search">
		<button type="search-button">search</button>
	</form>
		
	</div>
	<br>

	<?php
 	
 	$search =$_POST['search'];

 	$sql = "SELECT * FROM comments WHERE  commenti_name LIKE '%$search%' OR commenti_p LIKE '%$search%' OR commenti_date LIKE '%$search%'
 	";
 	

 	$result = mysqli_query($conn, $sql);
 	$resultQuery = mysqli_num_rows($result);

 	echo "<h6>there are ".$resultQuery." results found</h6>";


 	if ($resultQuery > 0) {
 		//echo "there are "." ";
 		while ($row = mysqli_fetch_assoc($result) ){

 			echo  "<div id='sub'><h3>".$row['commenti_name']. "</h3>
			     

			</div>";

			echo  "<div id='sub2'><p>".$row['commenti_p']. "</p>
			     

			</div>";
 			
 		}
 		
 		
 	}
 	
 		//'%'; --'%'
 
 ?>
	
<div id="home">
	<a href="index.php">Home</a>
</div>
	