<?php
	session_start();
	if($_SESSION['u_id'] == "")
	{
		echo "Please Login!";
		header("location:index.php");
	}

	include 'connect.php';
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
    <title>Sale Force Nutritionsc</title>
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
		<title>jQuery UI Datepicker - Default functionality</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">

                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo_01.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form name="form1" method="post" action="save_example.php">
											<div class="form-group">
													<label>รายการ</label>
												<input name="product" class="form-control" type="text" id="product" size="20"  placeholder="รายการ">
											</div>
                        <div class="form-group">
                            <label>ใช้ในผลิตภัณฑ์</label>
                            <input name="product_use" class="form-control" type="text" id="product_use" size="20"  placeholder="ใช้ในผลิตภัณฑ์">
                        </div>
                        <div class="form-group">
                            <label>จำนวน</label>
                            <input name="amount" class="form-control" type="text" id="amount" size="20"  placeholder="จำนวน">
                        </div>
                        <div class="form-group">
                            <label>Reference Number</label>
                            <input name="ref_no" class="form-control" type="text" id="ref_no" size="20"  placeholder="Ref No.">
                        </div>
                        <?php
                        $strSQL20 = "SELECT * FROM member where section = 'tech'";
                        $objQuery20 = mysqli_query($objCon,$strSQL20);
                       

                        ?>
                        <div class="form-group">
                            <label>Technical ผู้อนุมัติ</label>
                            <td><select name="tech_name" id="tech_name" class="form-control">
												<?php while($result = mysqli_fetch_assoc($objQuery20)): ?>
										        <option value="<?=$result['username']?>"><?=$result['username']?></option>
												<?php endwhile; ?>
												</select></td>
                        </div>



												<label>วันที่</label><br>
												<input name="strdate" class="form-control" type="date" id="strdate" placeholder="เลือกวันที่">
                        <br>
                        <br>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">ที่จัดส่ง</span>
                          </div>
                          <textarea class="form-control" aria-label="With textarea" name="address_send" id="address_send" placeholder="สถานที่ส่งตัวอย่าง"></textarea>
                        </div><br>
												<div class="form-group">
                            <label>ชื่อผู้ติดต่อ</label>
                            <input name="name_contact" class="form-control" type="text" id="name_contact" size="20"  placeholder="ชื่อผู้ติดต่อ">
                        </div>

                        <br>
                       
                        <label for="phone">Tel.</label>
                        <input class="form-control" type="tel" id="tel" name="tel" placeholder="Telephone Number" ><br><br>



                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">บันทึก</button>


                    </form>


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
