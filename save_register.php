<?php
    session_start();
    include 'connect.php';
    $level=$_SESSION["level"];

	if(trim($_POST["txtUsername"]) == "")
	{
		echo "Please input Username!";
		exit();
	}

	if(trim($_POST["txtPassword"]) == "")
	{
		echo "Please input Password!";
		exit();
	}

	if($_POST["txtPassword"] != $_POST["txtConPassword"])
	{
		echo "Password not Match!";
		exit();
	}

	if(trim($_POST["txtName"]) == "")
	{
		echo "Please input Name!";
		exit();
	}
	if(trim($_POST["txtSName"]) == "")
	{
		echo "Please input Surname!";
		exit();
	}
	if(trim($_POST["txtFName"]) == "")
	{
		echo "Please input Fname!";
		exit();
	}

	if(trim($_POST["ddllevel"]) == "")
	{
		echo "Please input level!";
		exit();
	}
	
	$_POST['txtPassword'] = md5($_POST['txtPassword']);

	$strSQL = "SELECT * FROM member WHERE Username = '".trim($_POST['txtUsername'])."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if($objResult)
	{
			echo "Username already exists!";
	}
	else
	{

	    $strSQL = "INSERT INTO member (Username,Password,Name,Surname,Fname,Level,Company,Section,Leader,Leader2) VALUES ('".$_POST["txtUsername"]."',
		'".$_POST["txtPassword"]."','".$_POST["txtName"]."','".$_POST["txtSName"]."','".$_POST["txtFName"]."','".$_POST["ddllevel"]."','".$_POST["ddlcompany"]."','".$_POST["ddlsection"]."','".$_POST["txtlead"]."','".$_POST["txtlead2"]."')";
		$objQuery = mysqli_query($objCon,$strSQL);

		date_default_timezone_set("Asia/Bangkok");
	$time = date('Y-m-d H:i:s');
	$_POST["time"] = $time;
	$event = "register";
	$_POST["event"] = $event;



	$strSQL2 = "INSERT INTO log_file (log_username,log_event,log_date) VALUES ('".$_POST["txtUsername"]."','".$_POST["event"]."','".$_POST["time"]."')";
	$objQuery2 = mysqli_query($objCon,$strSQL2);

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
