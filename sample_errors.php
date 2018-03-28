<?php

function customErrMsg ($ErrLevel, $ErrMsg) {
	echo "* $ErrMsg"; 
	return true;
}

set_error_handler (customErrMsg);

$name = "";
if (isset ($_GET["name"])) { $name = $_GET["name"]; }

$code = "";
if (isset ($_GET["code"])) { $code = $_GET["code"]; }

$gross = "";
if (isset ($_GET["gross"])) { $gross = $_GET["gross"]; }

$tax = "";
if (isset ($_GET["tax"])) { $tax = $_GET["tax"]; }




?>
<html>
<body>
<form action="sample_errors.php" method="get">

Customer's Name: <input type="text" name="name" 
value="<?php echo $name ?>">
<?php if ($name == "") {trigger_error("Must not be empty"); } ?>
<br>
Product Code: <input type="text" name="code"
value="<?php echo $code ?>">
<?php if ($code == "") {trigger_error("Must not be empty"); } ?>
<br>
Gross Total: <input type="text" name="gross"
value="<?php echo $gross ?>">
<?php if ($gross == "") {trigger_error("Must not be empty"); } ?>
<br>
Tax Rate: <input type="text" name="tax"
value="<?php echo $tax ?>">
<?php if ($tax == "") {trigger_error("Must not be empty"); } ?>
<br>
<input type="submit">
</form>