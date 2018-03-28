<?php

$dbConn = new PDO("mysql:host=localhost;dbname=classlabs", "root", "MySQL", $opt);

$prodCat = "Cable";

$sql = "SELECT * FROM product WHERE ProductCategory = ?";
$dbrs = $dbConn->prepare($sql);
$dbrs->execute(array($prodCat));

$numrow = $dbrs->rowCount();
echo "There are $numrow row(s) retrieved" . "\n<br>";

foreach ($dbrs as $dbrow) {
    echo $dbrow['ProductID'] . ": <b>" . $dbrow['ProductCategory'] . "</b> (" . $dbrow['ProductName'] . ")\n<br>";
}

?>

