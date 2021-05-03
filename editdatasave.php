<html>
<head>
<title>Update Data</title>
</head>
<body>
<?php
session_start();
include 'connect.php';
$strSQL = "UPDATE member SET ";
$strSQL .="u_id = '".$_POST["txtUserid"]."' ";
$strSQL .=",name = '".$_POST["txtName"]."' ";
$strSQL .=",surname = '".$_POST["txtSName"]."' ";
$strSQL .=",username = '".$_POST["txtUsername"]."' ";
$strSQL .=",password = '".$_POST["txtPassword"]."' ";
$strSQL .=",fname = '".$_POST["txtFName"]."' ";
$strSQL .=",level = '".$_POST["txtLevel"]."' ";

$strSQL .=",company = '".$_POST["txtCompany"]."' ";
$strSQL .=",section = '".$_POST["txtSection"]."' ";
$strSQL .=",leader1 = '".$_POST["txtlead1"]."' ";
$strSQL .=",leader2 = '".$_POST["txtlead2"]."' ";

$strSQL .="WHERE u_id = '".$_GET["u_id"]."' ";
$objQuery = mysqli_query($objCon,$strSQL);
if($objQuery)
{
	echo "Save Done.";

		header("location:admin_page.php");

}
else
{
	echo "Error Save [".$strSQL."]";
}

?>
</body>
</html>
