<?php

session_start();
$_POST["txtUsername"] = $_SESSION["username"];
include 'connect.php';
$strSQL = "DELETE FROM tbl_event WHERE id = '".$_GET['id']."' ";
$objQuery = mysqli_query($objCon,$strSQL);

date_default_timezone_set("Asia/Bangkok");
	$time = date('Y-m-d H:i:s');
	$_POST["time"] = $time;
	$event = "Delete Pre Report";
	$_POST["event"] = $event;



	$strSQL2 = "INSERT INTO log_file (log_username,log_event,log_date) VALUES ('".$_POST["txtUsername"]."','".$_POST["event"]."','".$_POST["time"]."')";
	$objQuery2 = mysqli_query($objCon,$strSQL2);
  if($objQuery)
	{
		?>

				<?php
	  if($_SESSION["level"] == "admin"){

	   ?>
	   <script>
	   alert('Complete');
	   location.href='fullview_del_ad.php';
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
	?>
	<?php
	mysqli_close($objCon);
?>
