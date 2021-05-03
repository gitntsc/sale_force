<html>
<head>
<title>Update Data</title>
</head>
<body>
<?php
session_start();
include 'connect.php';
if($_SESSION['level']=="manager"){
echo $strSQL = "UPDATE qutation SET attn ='".$_POST['attn']."',company = '".$_POST['company']."',product1 = '".$_POST['product1']."'
,amount1 = '".$_POST['amount1']."',produce1 = '".$_POST['produce1']."',price1 = '".$_POST['price1']."',product2 = '".$_POST['product2']."'
,amount2 = '".$_POST['amount2']."',produce2 = '".$_POST['produce2']."',price2 = '".$_POST['price2']."',product3 = '".$_POST['product3']."'
,amount3 = '".$_POST['amount3']."',produce3 = '".$_POST['produce3']."',price3 = '".$_POST['price3']."',product4 = '".$_POST['product4']."'
,amount4 = '".$_POST['amount4']."',produce4 = '".$_POST['produce4']."',price4 ='".$_POST['price4']."',product5 = '".$_POST['product5']."'
,amount5 = '".$_POST['amount5']."',produce5 = '".$_POST['produce5']."',price5 = '".$_POST['price5']."',strdate = '".$_POST['strdate']."'
,email = '".$_POST['email']."',fax = '".$_POST['fax']."',note = '".$_POST['recom']."',kind_send = '".$_POST['kind_send']."',status = '".$_POST['txtapp']."'
,day = '".$_POST['day']."',xrate = '".$_POST['xrate']."',lead_w = '".$_POST['lead_w']."',lead_d = '".$_POST['lead_d']."',op1 = '".$_POST['op1']."'
,op2 = '".$_POST['op2']."',op3 = '".$_POST['op3']."' WHERE qu_id = '".$_GET['qu_id']."'";
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


}
else
{
	echo "Error Save ";
}
if($objQuery2)
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
}else{
	echo $strSQL = "UPDATE qutation SET attn ='".$_POST['attn']."',company = '".$_POST['company']."',product1 = '".$_POST['product1']."'
	,amount1 = '".$_POST['amount1']."',produce1 = '".$_POST['produce1']."',price1 = '".$_POST['price1']."',product2 = '".$_POST['product2']."'
	,amount2 = '".$_POST['amount2']."',produce2 = '".$_POST['produce2']."',price2 = '".$_POST['price2']."',product3 = '".$_POST['product3']."'
	,amount3 = '".$_POST['amount3']."',produce3 = '".$_POST['produce3']."',price3 = '".$_POST['price3']."',product4 = '".$_POST['product4']."'
	,amount4 = '".$_POST['amount4']."',produce4 = '".$_POST['produce4']."',price4 ='".$_POST['price4']."',product5 = '".$_POST['product5']."'
	,amount5 = '".$_POST['amount5']."',produce5 = '".$_POST['produce5']."',price5 = '".$_POST['price5']."',strdate = '".$_POST['strdate']."'
	,email = '".$_POST['email']."',fax = '".$_POST['fax']."',recommend = '".$_POST['recom']."',kind_send = '".$_POST['kind_send']."',status = '".$_POST['txtapp']."'
    ,day = '".$_POST['day']."',xrate = '".$_POST['xrate']."',lead_w = '".$_POST['lead_w']."',lead_d = '".$_POST['lead_d']."',op1 = '".$_POST['op1']."'
    ,op2 = '".$_POST['op2']."',op = '".$_POST['op3']."' = '".$_POST['email']."' = WHERE qu_id = '".$_GET['qu_id']."'";
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


	}
	else
	{
		echo "Error Save ";
	}
	if($objQuery2)
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

}
mysqli_close($objCon);
?>

</body>
</html>
