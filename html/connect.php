<?php
	$host = 'localhost';
	$user = 'root';
	$password = 'mysql';
	$database = 'vp';
	$nom=array("ಜನವರಿ","ಫೆಬ್ರವರಿ","ಮಾರ್ಚ್","ಏಪ್ರಿಲ್","ಮೇ","ಜೂನ್","ಜುಲೈ","ಆಗಸ್ಟ್","ಸೆಪ್ಟೆಂಬರ್","ಅಕ್ಟೋಬರ್","ನವೆಂಬರ್","ಡಿಸೆಂಬರ್");
	
	$mysqli = new mysqli("$host","$user","$password", "$database");
	if ($mysqli->connect_errno) {
		echo "Errno: " . $mysqli->connect_errno . "\n";
		echo "Error: " . $mysqli->connect_error . "\n";
		exit;
	}
	mysqli_set_charset($mysqli,"utf8");
?>
