<?php
	require("head.php");
	session_start();
?>

<!doctype html>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<title>Home | Mastermind</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<script src="js/index.js"></script>
</head>

<body>
	<header>
		<nav>
			<a id="inloggen" href="inloggen.php">Inloggen</a> 
			<a id="registreren" href="registreren.php">Registreren</a> 
		</nav>
	</header> 
	
	<div class="container logo">
		<div class="row logo-img">
			<div class="col">
			</div>
			<div class="col">
				<img id="logo-mastermind" src="img/logo.svg" alt="logo">
			</div>
			<div class="col">
			</div>
		</div>
	</div>
</body>
</html>