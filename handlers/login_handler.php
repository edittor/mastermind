<?php
session_start();
 

if (isset($_POST['username']) && isset ($_POST['password'])) {
	require ('db_connect.php');
	$username = $_POST['username'];	
	$pwd = $_POST['password'];
	$salt = "add your own salt over here";
	$pwd = $salt.$pwd;
	
	for ($i=0; $i < 1000; $i++) {
		$pwd = sha1($pwd);
}
	
	$sql =  "add your own database tables over here";
				
	$result = $conn->query($sql);
	
	if ($result->num_rows == 0) {
		header("Location: ../inloggen.php");
		exit();
}
	
	else {
		$_SESSION["username"] = $username;
		
		header("Location: ../game.php");
		exit();
}

		$conn->close();				
}
?>