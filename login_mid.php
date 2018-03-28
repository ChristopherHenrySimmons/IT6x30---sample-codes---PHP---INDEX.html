<?php

session_start();

$username = $_POST["username"];
$password = $_POST["password"];

function setCustomInfo () {
	$_SESSION ["username"] = "johndoe";
	$_SESSION ["logindate"] = date("r");
	setcookie ("fullname", "John K. Doe");
	setcookie ("address", "Porirua, Wellington");
	setcookie ("loginlevel", "Super User");
}

if ($username == "johndoe" && $password = "janeroe") {
	setCustomInfo();
	
	header('Location: login_display.php?status=1');
	
} else {
	header('Location: login_display.php?status=-1');
}

?>
	