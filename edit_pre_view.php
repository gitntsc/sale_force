<?php
session_start();
date_default_timezone_set("Asia/Bangkok");
	$time = date('Y-m-d H:i:s');
	$_POST["time"] = $time;
	$event = "edit pre_regis";
	$_POST["event"] = $event;
$level=$_SESSION["level"];
$_POST["txtUsername"] = $_SESSION["username"];

	include 'connect.php';
	$strSQL = "INSERT INTO log_file (log_username,log_event,log_date) VALUES ('".$_POST["txtUsername"]."','".$_POST["event"]."','".$_POST["time"]."')";
	$objQuery = mysqli_query($objCon,$strSQL);

include 'connect.php';
$strSQL = "UPDATE tbl_event SET ";

$strSQL .="company_name = '".$_POST["txtCompany"]."' ";
$strSQL .=",customer_name= '".$_POST["txtcusname"]."' ";
$strSQL .=",cuslevel = '".$_POST["txtCuslevel"]."' ";
$strSQL .=",grade = '".$_POST["txtgrade"]."' ";
$strSQL .=",prov = '".$_POST["txtProv"]."' ";
$strSQL .=",detail = '".$_POST["txtdetail"]."' ";
$strSQL .=",start = '".$_POST["strdate"]."' ";
$strSQL .=",time = '".$_POST["txttime"]."' ";

$strSQL .="WHERE id = '".$_GET["id"]."' ";

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

}elseif($_SESSION["level"] == "supervior"){
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
