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
	and Password = '".mysqli_real_escape_string($objCon,md5($_POST['txtPassword']))."'";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
		
	 
		

	if(!$objResult)
	{
		$strSQL10 = "SELECT * FROM member where username = '".$_POST['txtUsername']."'";
		$objQuery10 = mysqli_query($objCon,$strSQL10);
		$objResult10 = mysqli_fetch_array($objQuery10,MYSQLI_ASSOC);
		if($objResult10['status_log']=="lock"){
			echo "<script>alert('ไม่สามารถ Login ได้เนื่องจาก password ผิดเกิน 3 ครั้ง กรุณาติดต่อเจ้าหน้าที่');</script>";
			echo "<script>window.location.href='index.php'</script>";
		}else{
		?>
		<?php
			echo "<script>alert('Password Incorrect Try Again!!');</script>";
			echo "<script>window.location.href='index.php'</script>";
		
		}
		?>
		<?php
		 $strSQL3 = "UPDATE member SET login_count = login_count + 1 where username = '".$_POST['txtUsername']."'";
		$objQuery3 = mysqli_query($objCon,$strSQL3);
		

			if($objResult10['login_count']+1  >='3'){
				$strSQL4 = "UPDATE member SET status_log = 'lock' where username = '".$_POST['txtUsername']."'";
				$objQuery4 = mysqli_query($objCon,$strSQL4);
			}
			
		?>
		<?php
		echo "<script>window.location.href='index.php'</script>";
		?>
<?php
	}
	else
	{
			if($objResult['status_log']=="lock"){
				echo "<script>alert('ไม่สามารถ Login ได้เนื่องจาก password ผิดเกิน 3 ครั้ง กรุณาติดต่อเจ้าหน้าที่');</script>";
				echo "<script>window.location.href='index.php'</script>";
			}else{
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

			$strSQL5 = "UPDATE member SET login_count = '0' where username = '".$_POST['txtUsername']."'";
			$objQuery5 = mysqli_query($objCon,$strSQL5);
			
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
}
	mysqli_close($objCon);
?>