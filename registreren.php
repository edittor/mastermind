<?php
	require("head.php");
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registreren | Mastermind</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>

<body>
	<header>
		<nav>
			<a id="inloggen" href="inloggen.php">Inloggen</a>
			<a id="registreren" href="registreren.php">Registreren</a>
		</nav>
	</header>
	
	<div class="container bg">
		<body background="img/bg.jpg">
	</div>
		
	<div class="container registerform">
		<form action="handlers/register_handler.php" method="post">
			<table id="registerForm">
				<tr>
					<td>
						<label for="username" id="usernamePlaceholder">Gebruikersnaam...</label><br>
						<input type="text" id="username" placeholder="Gebruikersnaam..." name="username" required><br><br>
						<label for="password" id="passwordPlaceholder">Wachtwoord...</label><br>
						<input type="password" id="password" placeholder="Wachtwoord...." name="password" required><br><br>
						<input type="submit" placeholder="Account aanmaken" id="inlogSubmit" value="Registreren">
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>