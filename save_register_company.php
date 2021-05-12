<?php
	session_start();




	if(trim($_POST["txtCompany"]) == "")
	{
		echo "Please input Company name!";
		exit();
	}

	if(trim($_POST["txtNcus"]) == "")
	{
		echo "Please input Customer name!";
		exit();
	}

	if(trim($_POST["txtStatus"]) == "")
	{
		echo "Please input Status Customer!";
		exit();
	}


		date_default_timezone_set("Asia/Bangkok");
			$time = date('Y-m-d H:i:s');
			$_POST["time"] = $time;
			$event = "regis_company";
			$_POST["event"] = $event;


	include 'connect.php';
	$sql = "SELECT * FROM member WHERE username = '".$_SESSION['username']."'";
	$objQuery4 = mysqli_query($objCon,$sql);
	$objResult4 = mysqli_fetch_array($objQuery4,MYSQLI_ASSOC);

	$_POST["leader"] = $objResult4["leader"];

	$_POST["username"] = $_SESSION["username"];

	$_POST["section"] = $_SESSION["section"];

	$strSQL2 = "INSERT INTO log_file (log_username,log_event,log_date) VALUES ('".$_POST["username"]."','".$_POST["event"]."','".$_POST["time"]."')";
	$objQuery2 = mysqli_query($objCon,$strSQL2);

	$strSQL = "SELECT * FROM customer WHERE cus_id = '".trim($_POST['txtCusid'])."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if($objResult)
	{
	echo "Customer ID already exists!";
	}
	else
	{
	$_POST["username"]=$_SESSION['username'];
	$strSQL = "INSERT INTO customer (name_company,name_cus,address,address2,status,Username,section,leader,province,business_type,crt_time3) VALUES ('".$_POST["txtCompany"]."',
	'".$_POST["txtNcus"]."','".$_POST["txtAd"]."','".$_POST["txtAd2"]."','".$_POST["txtStatus"]."','".$_POST["username"]."','".$_POST["section"]."','".$_POST["leader"]."','".$_POST["txtProv"]."','".$_POST["txtBut"]."','".$_POST["time"]."')";
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
  }
	mysqli_close();
?>
