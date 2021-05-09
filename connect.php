<?php
   $serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "sale_support";

	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	mysqli_set_charset($objCon, "utf8");

if (!$objCon)
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
