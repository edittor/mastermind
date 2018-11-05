<?php
session_start();

// post waardes ophalen

$value1 = $_POST['color1value'];
$value2 = $_POST['color2value'];
$value3 = $_POST['color3value'];
$value4 = $_POST['color4value'];

$input_arr = array($value1, $value2, $value3, $value4);

// de speler heeft gewonnen

if ($_SESSION['code'] == $input_arr) {
	header('Location: ../gewonnen.php');
	exit();	
	
// de kleuren worden in de array geplaatst
	
} else {
	$b_arr = $_SESSION['board'];
	$length = $_SESSION['length'];

	$b_arr[$length][0] = $value1;
	$b_arr[$length][1] = $value2;
	$b_arr[$length][2] = $value3;
	$b_arr[$length][3] = $value4;

	$length--;
	$_SESSION['board'] = $b_arr;
	$_SESSION['length'] = $length;
	
	// de speler heeft verloren
	
	if ($length < 0) {
		header('Location: ../verloren.php');
	}

	header('Location: ../game.php'); 
	exit();
}

?>