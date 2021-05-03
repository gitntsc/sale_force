<?php
$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("sale_support");
$strSQL = "SELECT * FROM report WHERE case_id = '".$_GET["case_id"]."' ";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
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

                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo_01.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form name="form1" method="post" action="save_fullview.php?case_id=<?php echo $_GET["case_id"];?>">
											<div class="form-group">
													<label>บริษัท</label></br>
												<input name="txtCusname" class="form-control" type="text" id="txtCusname" size="20"  value="<?php echo $objResult["company_name"];?>">
											</div>
                        <div class="form-group">
                            <label>ชื่อลูกค้า</label>
                            <input name="txtCusname" class="form-control" type="text" id="txtCusname" size="20"  value="<?php echo $objResult["cus_name"];?>">
                        </div>
                        <div class="form-group">
                            <label>ตำแหน่ง</label>
                            <input name="txtCuslevel" type="text" class="form-control" value="<?php echo $objResult["cus_level"];?>" id="txtCuslevel">
                        </div>
												<div class="form-group">
														<label>ผู้มีอำนาจการตัดสินใจ</label>
														<input name="txtApprover" type="text" class="form-control" value="<?php echo $objResult["approver"];?>" id="txtApprover">
												</div>
												<div class="form-group">
														<label>บุคลิกลักษณะลูกค้า</label>
														<input name="txtPersonal" type="text" class="form-control" value="<?php echo $objResult["personality"];?>" id="txtPersonal">
												</div>



	    								<div class="form-group">
	      					<label for="sel1">ลักษณะการติดต่อ</label>
	      					<input name="txtContact" type="text" class="form-control" value="<?php echo $objResult["contact"];?>" id="txtContact">
										</div>

										<div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">รายละเอียด</span>
                      </div>
                      <textarea class="form-control" aria-label="With textarea" name="txtDetail" id="txtDetail" value="<?php echo $objResult["Detail"];?>"></textarea>
                    </div><br>

										<div class="form-group">
								<label for="sel1">Project ลูกค้า</label>
								<input name="txtCuspro" type="text" class="form-control" value="<?php echo $objResult["cus_project"];?>" id="txtCuspro">
									 </div>
									 <div class="form-group">
											 <label>คาดการณ์การสั่งซื้อสินค้า (สินค้า และ ปริมาณ)</label>
											 <input name="txtVol" type="text" class="form-control" value="<?php echo $objResult["volume"];?>" id="txtVol">
									 </div>

									 <label>ข้อมูลคู่แข่ง</label>
									 <div class="form-group">
											 <label>สินค้า</label>
											 <input name="txtPro" type="text" class="form-control" value="<?php echo $objResult["com_pro"];?>" id="txtPro">
									 </div>
									 <div class="form-group">
											 <label>source</label>
											 <input name="txtSou" type="text" class="form-control" value="<?php echo $objResult["com_source"];?>" id="txtSou">
									 </div>
									 <div class="form-group">
											 <label>ราคา</label>
											 <input name="txtCost" type="text" class="form-control" value="<?php echo $objResult["com_cost"];?>" id="txtCost">
									 </div>
									 <div class="form-group">
											 <label>ข้อเสนอแนะ</label>
											 <input name="txtOffer" type="text" class="form-control" value="Offer" id="txtOffer">
									 </div>

                   <div class="form-group">
                   <label for="sel1">อนุมัติ</label>
                   <select class="form-control" id="txtapp" name="txtapp">
                   <option value="approve">Approver</option>
                   <option value="none approve">Non approve</option>

                 </select><br><br>

                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Save</button>
                      </br></br>

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
