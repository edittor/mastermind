<?php
	require("head.php");
	session_start();
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mastermind | The GAME</title>
	<link rel="stylesheet" type="text/css" href="styles/game.css">
</head>
	
<body>
	<header>
		<div class="container logoGame">
			<div class="row">
				<div class="col">
				</div>
				<div class="col">
					<img id="logoGame" src="img/logo.svg" alt="logo-mastermind">
				</div>
				<div class="col displayName">
					Welkom, <?php echo $_SESSION['username'];?><a href="uitloggen.php"><br>Uitloggen</a> <!-- username weergeven & uitlogknop -->
				</div>
				<div class="col">
				</div>
			</div>
		</div>
	</header> 
	
	<div class="container board">
		<div class="row">
			<div class="col">
			</div>
			<div class="col">
				<div class="boardBackground">
					<?php
					// blokkade bereiken pagina, zonder starten van de sessie
					
					if (!isset($_SESSION['username'])) {
						header ('Location: index.php');
					}

					// game moeilijkheidsgraad (standaard op 1 = 10 rijen en 4 kolommen)
					
					$gameMode = 1; 

					if ($gameMode == 1) {
						$totalRows = 10;
					}
					else {
						$totalRows = 20;
					}

					// kleuren op het speelveld
					
					$kleuren = array("blauw", "rood", "geel", "groen", "oranje", "roze", "turk", "violet", "wit", "zwart"); 

					// genereren van het speelveld
					
					echo "<table cellpadding = 0 cellspacing = 0 width=349 style='border: 1px; solid; padding: 0; margin: 0 cellpadding: 0;'>";

					if (!isset($_SESSION['game'])) {

						$rows = array();
						for ($i = 0; $i < $totalRows; $i++) {
							array_push($rows, array('leeg', 'leeg', 'leeg', 'leeg'));
						}	

						$code = array();

						// genereren van een unieke code
						
						for ($i = 0; $i < 4; $i++) {
							array_push($code, $kleuren[mt_rand(0, 9)]);
						}

						// sessions
						
						$_SESSION['board'] = $rows;
						$_SESSION['code'] = $code;
						$_SESSION['game'] = 1;
						$_SESSION['length'] = 9;
						$_SESSION['beurten'] = 10;

					}

					print_r($_SESSION['code']);

					// laten zien van het speelveld
					
					foreach ($_SESSION['board'] as $k1 => $v1) {
						echo "<tr>";
						foreach ($v1 as $k2 => $v2) {
							echo "<td width><img src='img/boardColors/".$v2.".svg'></td>";
						}
					}						
					?>
				</div>
			</div>
			<div class="col">
			</div>
		</div>
			<!--	Kleurenselectors	-->
		
		<form action="handlers/addColorsHandler.php" method="post">
			<table id="addColors"><br>
				<img id="color1" src="img/selectColors/leeg.svg" onclick="selector1()" alt="color1" width="87.15">
				<input type="hidden" name="color1value" id="color1value" value="leeg">
				<img id="color2" src="img/selectColors/leeg.svg" onclick="selector2()" alt="color2" width="87.15">
				<input type="hidden" name="color2value" id="color2value" value="leeg">
				<img id="color3" src="img/selectColors/leeg.svg" onclick="selector3()" alt="color3" width="87.15">
				<input type="hidden" name="color3value" id="color3value" value="leeg">
				<img id="color4" src="img/selectColors/leeg.svg" onclick="selector4()" alt="color4" width="87.15">		
				<input type="hidden" name="color4value" id="color4value" value="leeg">
				<input id="submitSelectedColors" src="img/selectColors/submit.svg" alt="submit" width="87.15" type="submit">
			</table>
		</form>
		<script src="js/buttonsChangeColors.js"></script>
	</body>
</html>