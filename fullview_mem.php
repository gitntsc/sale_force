<?php
	session_start();
	if($_SESSION['u_id'] == "")
	{
		echo "Please Login!";
		exit();
	}

	if($_SESSION['level'] != "admin")
	{
		echo "This page for Admin";
		exit();
	}

include 'connect.php';
mysqli_set_charset($objCon, "utf8");
	$strSQL = "SELECT * FROM member WHERE u_id = '".$_SESSION['u_id']."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo_01.png" alt="">
                    </a>
										<?php

									include 'connect.php';
										mysqli_set_charset($objCon, "utf8");
										$strSQL = "SELECT * FROM member WHERE u_id = '".$_GET["u_id"]."' ";
										$objQuery = mysqli_query($objCon,$strSQL);
										$objResult3 = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
										 ?>
                </div>
                <div class="login-form">
                    <form name="form1" method="post" action="editdatasave.php?u_id=<?php echo $_GET["u_id"];?>">
											<div class="form-group">
													<label>User ID</label>
												<input name="txtUserid" class="form-control" type="text" id="txtUserid" size="20" value="<?php echo $objResult3["u_id"];?>">
											</div>
                        <div class="form-group">
                            <label>User Name</label>
                            <input name="txtUsername" class="form-control" type="text" id="txtUsername" size="20" value="<?php echo $objResult3["username"];?>">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input name="txtPassword" type="password" class="form-control" value="<?php echo $objResult3["u_id"];?>" id="txtPassword">
                        </div>

												<div class="form-group">
														<label>Name</label>
														<input name="txtName" type="text" class="form-control" value="<?php echo $objResult3["name"];?>" id="txtName">
												</div>
												<div class="form-group">
														<label>Surname</label>
														<input name="txtSName" type="text" class="form-control" value="<?php echo $objResult3["surname"];?>" id="txtSName">
												</div>
												<div class="form-group">
														<label>Nickname</label>
														<input name="txtFName" type="text" class="form-control" value="<?php echo $objResult3["fname"];?>" id="txtFName">
												</div>


												<div class="form-group">
														<label>Level</label>
														<input name="txtLevel" type="text" class="form-control" value="<?php echo $objResult3["level"];?>" id="txtLevel">
												</div>

												<div class="form-group">
														<label>Company</label>
														<input name="txtCompany" type="text" class="form-control" value="<?php echo $objResult3["company"];?>" id="txtCompany">
												</div>
												<div class="form-group">
														<label>Section</label>
														<input name="txtSection" type="text" class="form-control" value="<?php echo $objResult3["section"];?>" id="txtSection">
												</div>
												<div class="form-group">
														<label>Leader1</label>
														<input name="txtlead1" type="text" class="form-control" value="<?php echo $objResult3["section"];?>" id="txtlead1">
												</div>
												<div class="form-group">
														<label>Leader2</label>
														<input name="txtlead2" type="text" class="form-control" value="<?php echo $objResult3["section"];?>" id="txtlead2">
												</div>




                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Save</button>


                    </form>

            </div>
        </div>
    </div>
	</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
