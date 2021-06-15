<?php
session_start();

include "connect.php";
 $strSQL = "SELECT * FROM member WHERE username = '".$_SESSION['username']."'";
$objQuery = mysqli_query($objCon,$strSQL);
$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
$_POST['username'] = $_SESSION['username'];
$_POST['section'] = $_SESSION['section'];
$_POST['company'] = $objResult['company'];
$appt1 = "null";
$appt2 = "null";
$who_appt1 = "null";
$who_appt2 = "null";
$sender = $_SESSION['username'];
$recive = "null";



echo $strSQL2 = "INSERT INTO example(username,section,company,address_send,tel,strdate,product,amount,ref_no
,product_use,name_contact,cus_company,tech_name,appt1,who_appt1,appt2,who_appt2,sender,recive) values ('".$_POST['username']."'
,'".$_POST['section']."','".$_POST['company']."','".$_POST['address_send']."'
,'".$_POST['tel']."','".$_POST['strdate']."','".$_POST['product']."'
,'".$_POST['amount']."','".$_POST['ref_no']."','".$_POST['product_use']."','".$_POST['name_contact']."','".$_POST['cus_company']."','".$_POST['tech_name']."','".$appt1."','".$who_appt1."'
,'".$appt2."','".$who_appt2."','".$sender."','".$recive."')";
$objQuery2 = mysqli_query($objCon,$strSQL2);


date_default_timezone_set("Asia/Bangkok");
	$time = date('Y-m-d H:i:s');
	$_POST["time"] = $time;
	$event = "save_example";
	$_POST["event"] = $event;
$level=$_SESSION["level"];

	include 'connect.php';
	$strSQL = "INSERT INTO log_file (log_username,log_event,log_date) VALUES ('".$_POST["username"]."','".$_POST["event"]."','".$_POST["time"]."')";
	$objQuery = mysqli_query($objCon,$strSQL);
 
	if($objQuery && $objQuery2)
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
