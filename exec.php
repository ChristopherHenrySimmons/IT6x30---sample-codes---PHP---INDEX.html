<?php

try {
	$start_year = $_GET["start"];
	$year_count = $_GET["count"];
}
catch (exception $e) { }

exec ("gen_year.exe $start_year $year_count", $output);

for ($i = 0; $i < count($output); $i++) {
	echo $output[$i] . ", ";
}

?>

