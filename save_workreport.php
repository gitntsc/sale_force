<?php
session_start();
$_POST["username"]=$_SESSION["username"];
$_POST["section"]=$_SESSION["section"];
$level=$_SESSION["level"];
$_POST["username"] = $_SESSION["username"];
$_POST["company"] = $_SESSION["company"];

$_POST["app_stat"]="non approve";
date_default_timezone_set("Asia/Bangkok");
	$time = date('Y-m-d H:i:s');
	$_POST["time"] = $time;
	$event = "add work report";
	$_POST["event"] = $event;


include "connect.php";
$strSQL2 = "SELECT * FROM member WHERE u_id = '".$_SESSION['u_id']."' ";
$objQuery2 = mysqli_query($objCon,$strSQL2);
$objResult2 = mysqli_fetch_array($objQuery2,MYSQLI_ASSOC);
$_POST["leader"] = $objResult2["leader"];
$_POST["leader2"] = $objResult2["leader2"];
$_POST["txtCusname"] = mysqli_real_escape_string($objCon,$_POST["txtCusname"]);
$_POST["txtDetail"] = mysqli_real_escape_string($objCon,$_POST["txtDetail"]);


 include 'connect.php';
mysqli_set_charset($objCon, "utf8");
 echo $strSQL = "INSERT INTO report (username,company,section,company_name,cus_name,cus_level,approver,personality,strdate,contact,detail,cus_project,volume,com_pro,com_source,com_cost,appt1,appt2,offer,approve_stat,exp_cost,rest_cost,other_cost,crt_time) VALUES ('".$_POST["username"]."','".$_POST["company"]."','".$_POST["section"]."',
	'".$_POST["txtCompany"]."','".$_POST["txtCusname"]."','".$_POST["txtCuslevel"]."','".$_POST["txtApprover"]."','".$_POST["txtPersonal"]."','".$_POST["strdate"]."','".$_POST["contact"]."','".$_POST["txtDetail"]."','".$_POST["txtProject"]."','".$_POST["txtVol"]."','".$_POST["txtPro"]."','".$_POST["txtSou"]."','".$_POST["txtCost"]."'
	,'".$_POST["leader"]."','".$_POST["leader2"]."','".$_POST["txtOffer"]."','".$_POST["app_stat"]."','".$_POST["exp_cost"]."','".$_POST["rest_cost"]."','".$_POST["other_cost"]."','".$_POST["time"]."')";
		$objQuery = mysqli_query($objCon,$strSQL);



 $strSQL3 = "INSERT INTO log_file (log_username,log_event,log_date) VALUES ('".$_POST["username"]."','".$_POST["event"]."','".$_POST["time"]."')";
			$objQuery3 = mysqli_query($objCon,$strSQL3);
      $objResult3 = mysqli_fetch_array($objQuery3,MYSQLI_ASSOC);

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
