<?php

	$LimitTime = 3; 
	session_start();

	$serverName = "localhost";
	$userName = "root";
	$userPassword = "root";
	$dbName = "mythaicreate";

	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	$strSQL = "SELECT * FROM member WHERE Username = '".mysqli_real_escape_string($objCon,$_POST['txtUsername'])."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if(!$objResult)
	{
			echo "Not Found User!";
			exit();
	}
	else
	{
		if($objResult["FlagLock"] == "Yes")
		{
			echo "This user account is lock!";
			exit();
		}

		if($objResult["Password"] != $_POST["txtPassword"])
		{
			echo "Password Incorrect!";
			
			// Update Login Failed
			$strSQL = "UPDATE member  SET LoginCount = LoginCount + 1 WHERE Username = '".mysqli_real_escape_string($objCon,$_POST['txtUsername'])."' ";
			$objQuery = mysqli_query($objCon,$strSQL);

			// If more than limit time auto lock account
			if($objResult["LoginCount"] + 1 >= $LimitTime)
			{
				$strSQL = "UPDATE member  SET FlagLock = 'Yes' WHERE Username = '".mysqli_real_escape_string($objCon,$_POST['txtUsername'])."' ";
				$objQuery = mysqli_query($objCon,$strSQL);
			}

			exit();
		}
		else
		{
			// Login Success
			$_SESSION["UserID"] = $objResult["UserID"];

			session_write_close();
			
			// Reset LoginCount
			$strSQL = "UPDATE member  SET LoginCount = 0 WHERE Username = '".mysqli_real_escape_string($objCon,$_POST['txtUsername'])."' ";
			$objQuery = mysqli_query($objCon,$strSQL);
			
			header("location:user_page.php");
		}
	}
	mysqli_close($objCon);
?>
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