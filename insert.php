<?php

include_once 'dbh.inc.php';
session_start();
$_SESSION['u_uid'];


	$message = mysqli_real_escape_string($conn,$_POST['message']);
	$jina = $_SESSION['u_uid'];

				$sql="INSERT INTO comments(commenti_name, commenti_p) VALUES('$jina', '$message'); ";
				 mysqli_query($conn,$sql);
				 header("Location:home.php?text=sent")

	


?>