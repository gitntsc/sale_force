<?php
session_start();
$_POST["username"]=$_SESSION["username"];
$_POST["section"]=$_SESSION["section"];
$level=$_SESSION["level"];
$_POST["username"] = $_SESSION["username"];

$_POST["app_stat"]="non approve";
date_default_timezone_set("Asia/Bangkok");
	$time = date('Y-m-d H:i:s');
	$_POST["time"] = $time;
	$event = "add work report in";
	$_POST["event"] = $event;

include "connect.php";
$strSQL2 = "SELECT * FROM member WHERE u_id = '".$_SESSION['u_id']."' ";
$objQuery2 = mysqli_query($objCon,$strSQL2);
$objResult2 = mysqli_fetch_array($objQuery2,MYSQLI_ASSOC);
$_POST["leader"] = $objResult2["leader"];


 include 'connect.php';
mysqli_set_charset($objCon, "utf8");
 $strSQL = "INSERT INTO report_in (section,username,subject,date_st,address,detail,stat_app) VALUES ('".$_POST["section"]."','".$_POST["username"]."',
	'".$_POST["txttitle"]."','".$_POST["strdate"]."','".$_POST["txtaddress"]."','".$_POST["txtDetail"]."','".$_POST["app_stat"]."')";
		$objQuery = mysqli_query($objCon,$strSQL);



$strSQL3 = "INSERT INTO log_file (log_username,log_event,log_date) VALUES ('".$_POST["username"]."','".$_POST["event"]."','".$_POST["time"]."')";
			$objQuery3 = mysqli_query($objCon,$strSQL3);
      $objResult3 = mysqli_fetch_array($objQuery3,MYSQLI_ASSOC);

		mysqli_close($objCon);

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

?>
