<?php

$err_status = 1;
$err_msg = "";
$target_dir = "uploads/";

$filecount = sizeof($_FILES["FileToUpload"]["name"]);

for ($counter = 0; $counter < $filecount; $counter++) {
	
	$filename = basename($_FILES["FileToUpload"]["name"][$counter]);
	$target_file = $target_dir . $filename;

	//Check if file already exists
	if (file_exists($target_file)) { 
		$err_status = -1; 
		$err_msg = "File already exists."; }

	//Move file from temporary server folder into target folder
	if ($err_status == 1) {
		if (!move_uploaded_file($_FILES["FileToUpload"]["tmp_name"][$counter], $target_file)) {
			$err_status = -1;
			$err_msg = "Code " . $_FILES["FileToUpload"]['error']; }
	}

	//Display error message if error occurred
	if ($err_status < 1) {
		echo "Error encountered: " . $err_msg; 
		exit(); }
	else {
		echo "<p>Successful. Uploaded file: <b>" . $filename . "</b></p>"; }
}

?>

