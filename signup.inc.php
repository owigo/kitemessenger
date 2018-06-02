<?php

include_once 'dbh.inc.php';

if (isset($_POST['submit'])) {

	$first = mysqli_real_escape_string($conn,$_POST['first']);
	$last = mysqli_real_escape_string($conn,$_POST['last']);
	$uid = mysqli_real_escape_string($conn,$_POST['uid']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
	$mybios = mysqli_real_escape_string($conn,$_POST['mybios']);
	if (empty($first) || empty($last)) {
		header("Location:..signup.php?signup=empty");
	}
else{

	$sql ="INSERT INTO user (first, last, username, password, bios) 
	VALUES('$first', '$last', '$uid', '$pwd', '$mybios');";
	mysqli_query($conn,$sql);
	//header("Location:../home.php?signup=success");

	$sql = "SELECT * FROM user WHERE username='$uid' AND  first='$first'";
	$result =mysqli_query($conn,$sql);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
		$userid = $row['id'];
		$sql = "INSERT INTO profileimg (userid, status) VALUES('$userid', 0)";
		mysqli_query($conn,$sql);
		header("Location: ../index.php?signup=success");
	}


		
	}


} 

  }
  else{
	header("Location: ../signup.php?signup=failed");

	
}