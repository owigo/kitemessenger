<?php

session_start();
include_once 'dbh.inc.php';

if (isset($_POST['submit'])) {
	//adede
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];

	$sql="SELECT * FROM user WHERE username='$uid' AND password ='$pwd';";

	 $result = mysqli_query($conn,$sql);
	 if(mysqli_num_rows($result) > 0){
	  while ($row=mysqli_fetch_assoc($result)) {
	    // echo  $row['username'];
	   //  echo  $row['password'];
	     // echo  $row['first'];
	     // echo   $row['id'];
	  
	  	$_SESSION['u_id'] = $row['id'];
	    $_SESSION['u_first'] = $row['first'];
	    $_SESSION['u_last'] = $row['last'];
	    $_SESSION['u_uid'] = $row['username'];
	    $_SESSION['u_pwd'] = $row['password'];
	    $_SESSION['u_info'] = $row['bios'];
	    //echo  $_SESSION['u_pwd'];
	  	   
	  	   
	 // header("Location: login.inc.php?login=succeses");


	  	header("Location: ../home.php?login=succeses");
	  
	  }
	} else{
			header("Location: ../login.php?log in=failed");

	}


	}
	
	

	

//



