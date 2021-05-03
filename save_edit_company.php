<html>
<head>
<title>Update Data</title>
</head>
<body>
<?php
session_start();
include 'connect.php';
$strSQL = "UPDATE customer SET ";
$strSQL .="name_company = '".$_POST["txtCompany"]."' ";
$strSQL .=",name_cus = '".$_POST["txtNcus"]."' ";
$strSQL .=",status = '".$_POST["txtStatus"]."' ";
$strSQL .=",province = '".$_POST["txtProv"]."' ";
$strSQL .=",Address = '".$_POST["txtAd"]."' ";
$strSQL .=",business_type = '".$_POST["txtBut"]."' ";
$strSQL .="WHERE cus_id = '".$_GET["cus_id"]."' ";
$objQuery = mysqli_query($objCon,$strSQL);
if($objQuery)
{
	echo "Save Done.";
	date_default_timezone_set("Asia/Bangkok");
		$time = date('Y-m-d H:i:s');
		$_POST["time"] = $time;
		$event = "edit_company";
		$_POST["event"] = $event;
		$_POST["username"] = $_SESSION["username"];


		include 'connect.php';
		$strSQL2 = "INSERT INTO log_file (log_username,log_event,log_date) VALUES ('".$_POST["username"]."','".$_POST["event"]."','".$_POST["time"]."')";
		$objQuery2 = mysqli_query($objCon,$strSQL2);
		header("location:user_page.php");

}
else
{
	echo "Error Save [".$strSQL."]";
}
mysqli_close($objCon);
?>

</body>
</html>
