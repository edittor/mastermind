<?php
	session_start();
	require("head.php");
	require("handlers/db_connect.php");
?>

<!doctype html>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<title>Inloggen | Mastermind</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>

<body>
	<header>
		<nav>
			<a id="inloggen" href="inloggen.php">Inloggen </a>
			<a id="registreren" href="registreren.php">Registreren</a>
		</nav>
	</header>
		
	<div class="container loginform">
		<div class="row">
			<div class="col">
			</div>
				<div class="col">
					<form action="handlers/login_handler.php" method="post">
						<table id="loginForm">
							<tr>
								<td>
									<label for="username" id="usernamePlaceholder">Gebruikersnaam...</label><br>
									<input type="text" id="username" placeholder="Gebruikersnaam..." name="username" required><br><br>
									<label for="password" id="passwordPlaceholder">Wachtwoord...</label><br>
									<input type="password" id="password" placeholder="Wachtwoord...." name="password" required><br><br>
									<input type="submit" id="inlogSubmit" value="Inloggen">
								</td>
							</tr>
						</table>
					</form>
				</div>
				<div class="col">
				</div>
		</div>
	<div class="container nog-geen-account">
		<p>Heb je nog geen account? Registreer je <a href="registreren.php">hier</a> dan eerst!</p>	
	</div>
	</div>
</body>
</html>