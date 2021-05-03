<html>
<?php
session_start();
$_POST["username"]=$_SESSION["username"];
$_POST["section"]=$_SESSION["section"];
$level=$_SESSION["level"];
$_POST["username"] = $_SESSION["username"];

date_default_timezone_set("Asia/Bangkok");
	$time = date('Y-m-d H:i:s');
	$_POST["time"] = $time;
	$event = "Pre Register";

	include "connect.php";
	$strSQL2 = "SELECT * FROM member WHERE u_id = '".$_SESSION['u_id']."' ";
	$objQuery2 = mysqli_query($objCon,$strSQL2);
	$objResult2 = mysqli_fetch_array($objQuery2,MYSQLI_ASSOC);
	$_POST["txtlead1"] = $objResult2["leader"];
	$_POST["txtlead2"] = $objResult2["leader2"];
	$_POST["txtdetail"] = mysqli_real_escape_string($objCon,$_POST["txtdetail"]);
	$_POST["company_name"] = mysqli_real_escape_string($objCon,$_POST["company_name"]);


 include 'connect.php';
mysqli_set_charset($objCon, "utf8");
echo $strSQL = "INSERT INTO tbl_event (company_name,customer_name,cuslevel,grade,detail,start,time,prov,username,section,leader,leader2,crt_time2) VALUES ('".$_POST["txtCompany"]."','".$_POST["txtcusname"]."',
	'".$_POST["txtCuslevel"]."','".$_POST["txtgrade"]."','".$_POST["txtdetail"]."','".$_POST["strdate"]."','".$_POST["txttime"]."','".$_POST["txtProv"]."','".$_POST["username"]."','".$_POST["section"]."','".$_POST["txtlead1"]."','".$_POST["txtlead2"]."','".$_POST["time"]."')";
		$objQuery = mysqli_query($objCon,$strSQL);




 $strSQL2 = "INSERT INTO log_file (log_username,log_event,log_date) VALUES ('".$_POST["username"]."','".$_POST["event"]."','".$_POST["time"]."')";
 $objQuery2 = mysqli_query($objCon,$strSQL2);
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


			<?php
		mysqli_close($objCon);

?>
</html>
