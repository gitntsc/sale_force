<?php
session_start();
$_POST["username"]=$_SESSION["username"];
date_default_timezone_set("Asia/Bangkok");
	$time = date('Y-m-d H:i:s');
	$_POST["time"] = $time;
	$event = "edit report";
	$_POST["event"] = $event;
$level=$_SESSION["level"];

	include 'connect.php';
	$strSQL = "INSERT INTO log_file (log_username,log_event,log_date) VALUES ('".$_POST["username"]."','".$_POST["event"]."','".$_POST["time"]."')";
	$objQuery = mysqli_query($objCon,$strSQL);

include 'connect.php';
$strSQL = "UPDATE report SET ";
$strSQL .="company_name = '".$_POST["txtCompany"]."' ";
$strSQL .=",cus_name = '".$_POST["txtCusname"]."' ";
$strSQL .=",cus_level= '".$_POST["txtCuslevel"]."' ";
$strSQL .=",approver = '".$_POST["txtApprover"]."' ";
$strSQL .=",personality = '".$_POST["txtPersonal"]."' ";
$strSQL .=",strdate = '".$_POST["strdate"]."' ";
$strSQL .=",contact = '".$_POST["txtContact"]."' ";
$strSQL .=",Detail = '".$_POST["txtDetail"]."' ";
$strSQL .=",cus_project = '".$_POST["txtCuspro"]."' ";
$strSQL .=",volume = '".$_POST["txtVol"]."' ";
$strSQL .=",com_pro = '".$_POST["txtPro"]."' ";
$strSQL .=",com_source = '".$_POST["txtSou"]."' ";
$strSQL .=",com_cost = '".$_POST["txtCost"]."' ";
$strSQL .=",approve_stat = '".$_POST["txtapp"]."' ";
$strSQL .=",exp_cost = '".$_POST["exp_cost"]."' ";
$strSQL .=",rest_cost = '".$_POST["rest_cost"]."' ";
$strSQL .=",other_cost = '".$_POST["other_cost"]."' ";
$strSQL .="WHERE case_id = '".$_GET["case_id"]."' ";

$objQuery = mysqli_query($objCon,$strSQL);
if($objQuery)
{
	?>

			<?php
  if($_SESSION["level"] == "admin"){

   ?>
   <script>
   alert('Complete');
   location.href='admin_page.php';
   </script>
   <?php

}elseif($_SESSION["level"] == "supervisor"){
  ?>

  <script>
  alert('Complete');
  location.href='leader_page.php';
  </script>
  <?php

  }elseif($_SESSION["level"] == "manager"){
    ?>

    <script>
    alert('Complete');
    location.href='manager_page.php';
    </script>
    <?php
}elseif($_SESSION["level"] == "sec"){
  ?>

  <script>
  alert('Complete');
  location.href='sec_page.php';
  </script>
  <?php
}elseif($_SESSION["level"] == "officer"){
  ?>

  <script>
  alert('Complete');
  location.href='user_page.php';
  </script>
  <?php
}else{
	header("location:index.php");
	echo "not success";
}
}
mysqli_close($objCon);
?>
