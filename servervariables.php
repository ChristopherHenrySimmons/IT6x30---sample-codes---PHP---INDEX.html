<?php 

echo $_SERVER['PHP_SELF'] . "\n";
echo $_SERVER['GATEWAY_INTERFACE'] . "\n";
echo gethostbyname($_SERVER['SERVER_NAME']). "\n";
echo $_SERVER['SERVER_NAME'] . "\n";
echo $_SERVER['SERVER_SOFTWARE'] . "\n";
echo $_SERVER['SERVER_PROTOCOL'] . "\n";
echo $_SERVER['REQUEST_METHOD'] . "\n";
echo $_SERVER['REMOTE_ADDR'] . "\n";
echo $_SERVER['REMOTE_HOST'] . "\n";
echo $_SERVER['REMOTE_PORT'] . "\n";
echo $_SERVER['REQUEST_TIME'] . "\n";
echo $_SERVER['HTTP_HOST'] . "\n";
echo $_SERVER['HTTP_REFERER'] . "\n";
echo $_SERVER['HTTP_USER_AGENT'] . "\n";
echo $_SERVER['SCRIPT_NAME'];

?>

