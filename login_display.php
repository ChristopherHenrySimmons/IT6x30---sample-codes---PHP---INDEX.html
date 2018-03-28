<?php

session_start();

$status = $_GET ["status"];

if ($status > 0) {
	$msgtop = "Welcome " . $_COOKIE["fullname"] . " (" . $_SESSION["username"] . " / " . $_COOKIE["loginlevel"] . ")";
	$msgmid = "Successfully logged in at: " . $_SESSION["logindate"];
	$msgdown = "Our records shows that you live in " . $_COOKIE["address"];
	
	echo $msgtop . "<br>" . $msgmid . "<br>" . $msgdown;
} else {
	echo "Incorrect login. Try again, or not. Who cares!";
	echo "<br>";
	echo "Click <a href='./'>here</a> to go back.";
}

?>
