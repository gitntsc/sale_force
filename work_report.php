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
                    <form name="form1" method="post" action="save_workreport.php">
											<div class="form-group">
													<label>บริษัท</label>
												<input name="txtCompany" class="form-control" type="text" id="txtCompany" size="20"  placeholder="Company Name">
											</div>
                        <div class="form-group">
                            <label>ชื่อลูกค้า</label>
                            <input name="txtCusname" class="form-control" type="text" id="txtCusname" size="20"  placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>ตำแหน่ง</label>
                            <input name="txtCuslevel" type="text" class="form-control" placeholder="Customer Level" id="txtCuslevel">
                        </div>
												<div class="form-group">
														<label>ผู้มีอำนาจการตัดสินใจ</label>
														<input name="txtApprover" type="text" class="form-control" placeholder="Approver" id="txtApprover">
												</div>
												<div class="form-group">
														<label>บุคลิกลักษณะลูกค้า</label>
														<input name="txtPersonal" type="text" class="form-control" placeholder="personality" id="txtPersonal">
												</div>

												<div class="container">
												<label>Start Date</label><br>
												<input name="strdate" type="date" id="strdate" placeholder="เลือกวันที่">


	    								<div class="form-group">
	      					<label for="sel1">ลักษณะการติดต่อ</label>
	      					<select class="form-control" id="contact" name="contact">
	        				<option value="email">Email</option>
	        				<option value="tel">Telephone</option>
	        				<option value="meet">Meet</option>
	        			</select>

										</div>

										<div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">รายละเอียด</span>
                      </div>
                      <textarea class="form-control" aria-label="With textarea" name="txtDetail" id="txtDetail" placeholder="Detail"></textarea>
                    </div><br>

										<div class="form-group">
								<label for="sel1">Project ลูกค้า</label>
								<select class="form-control" id="txtProject" name="txtProject">
								<option value="replace">Replace</option>
								<option value=standardized>Standardized</option>
								<option value="cost saving">Cost Saving</option>
								<option value="value added">Value added</option>
								</select>
									 </div>
									 <div class="form-group">
											 <label>คาดการณ์การสั่งซื้อสินค้า (สินค้า และ ปริมาณ)</label>
											 <input name="txtVol" type="text" class="form-control" placeholder="Volume" id="txtVol">
									 </div>

									 <label>ข้อมูลคู่แข่ง</label>
									 <div class="form-group">
											 <label>สินค้า</label>
											 <input name="txtPro" type="text" class="form-control" placeholder="Product" id="txtPro">
									 </div>
									 <div class="form-group">
											 <label>source</label>
											 <input name="txtSou" type="text" class="form-control" placeholder="source" id="txtSou">
									 </div>
									 <div class="form-group">
											 <label>ราคา</label>
											 <input name="txtCost" type="text" class="form-control" placeholder="Price" id="txtCost">
									 </div>
									 <div class="form-group">
											 <label>ข้อเสนอแนะ</label>
											 <input name="txtOffer" type="text" class="form-control" placeholder="Offer" id="txtOffer">
									 </div>

									 <div class="form-check">
			   <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
				 <label class="form-check-label" for="defaultCheck1">ค่าทางด่วน</labl>
				 <input name="exp_cost" type="text" class="form-control" placeholder="ค่าทางด่วน" id="exp_cost"><h5 color="red">ใส่ตัวเลขเท่านั้น</h5>
			 	</div><br>

				<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
<label class="form-check-label" for="defaultCheck1">ค่าที่พัก</lable>
<input name="rest_cost" type="text" class="form-control" placeholder="ค่าที่พัก" id="rest_cost"><h5 color="red">ใส่ตัวเลขเท่านั้น</h5>
</div><br>

			<div class="form-check">
			<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
			<label class="form-check-label" for="defaultCheck1">ค่าอื่นๆ</lable>
			<input name="other_cost" type="text" class="form-control" placeholder="ค่าอื่นๆ" id="other_cost"><h5 color="red">ใส่ตัวเลขเท่านั้น</h5>
			</div><br>


                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Save Data</button>


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
