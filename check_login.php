<?php
	session_start();

date_default_timezone_set("Asia/Bangkok");
	$time = date('Y-m-d H:i:s');
	$_POST["time"] = $time;
	$event = "login";
	$_POST["event"] = $event;



	include 'connect.php';
	$strSQL2 = "INSERT INTO log_file (log_username,log_event,log_date) VALUES ('".$_POST["txtUsername"]."','".$_POST["event"]."','".$_POST["time"]."')";
	$objQuery2 = mysqli_query($objCon,$strSQL2);



    include 'connect.php';
	$strSQL = "SELECT * FROM member WHERE Username = '".mysqli_real_escape_string($objCon,$_POST['txtUsername'])."'
	and Password = '".mysqli_real_escape_string($objCon,$_POST['txtPassword'])."'";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

	if(!$objResult)
	{

		?>
		<script>
		alert('Password Incorrect Please Try Again');
		location.href='index.php';
		</script>
<?php
	}
	else
	{
			setcookie("txtUsername",$_POST['txtUsername'],time()+3600*24*356);
			setcookie("txtPassword",$_POST['txtPassword'],time()+3600*24*356);
			header("location:index.php");

			$_SESSION["u_id"] = $objResult["u_id"];
			$_SESSION["username"] = $objResult["username"];
			$_SESSION["level"] = $objResult["level"];
			$_SESSION["company"] = $objResult["company"];

			$_SESSION["department"]=$objResult["department"];
			$_SESSION["password"]=$objResult["password"];
			$_SESSION["section"]=$objResult["section"];

			session_write_close();

			if($objResult["level"] == "admin"){
				header("location:admin_page.php");
			}elseif($objResult["level"] == "supervisor"){
				header("location:leader_page.php");
      }elseif($objResult["level"] == "manager"){
				header("location:manager_page.php");
			}elseif($objResult["level"] == "sec"){
				header("location:sec_page.php");
			}elseif($objResult["level"] == "officer"){
				header("location:user_page.php");
			}elseif($objResult["section"] == "saleco"){
				header("location:saleco_page.php");
			}elseif($objResult["section"] == "hr"){
				header("location:hr_page.php");
			}elseif($objResult["level"] == "account"){
				header("location:acc_page.php");
			}else{
				header("location:index.php");
			}
	}
	mysqli_close($objCon);
?>
