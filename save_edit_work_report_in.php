<html>
<head>
<title>Update Data</title>
</head>
<body>
<?php
session_start();
include 'connect.php';
$strSQL = "UPDATE report_in SET ";
$strSQL .="subject = '".$_POST["txttitle"]."' ";
$strSQL .=",date_st= '".$_POST["strdate"]."' ";
$strSQL .=",address = '".$_POST["txtaddress"]."' ";
$strSQL .=",detail = '".$_POST["txtDetail"]."' ";

$objQuery = mysqli_query($objCon,$strSQL);
if($objQuery)
{
	echo "Save Done.";

		header("location:user_page.php");

}
else
{
	echo "Error Save [".$strSQL."]";
}

?>
</body>
</html>
