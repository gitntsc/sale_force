<?php
	session_start();
	if($_SESSION['u_id'] == "")
	{
		echo "Please Login!";
		exit();
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

      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body class="bg-secondary">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo_01.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form name="form1" method="post" action="save_register_company.php">
											
                        <div class="form-group">
                            <label>Company name</label>
                            <input name="txtCompany" class="form-control" type="text" id="txtCompany" size="20"  placeholder="Company name">
                        </div>
                        <div class="form-group">
                            <label>Customer Name</label>
                            <input name="txtNcus" type="text" class="form-control" placeholder="Customer Name" id="txtNcus">
                        </div>



												<div class="container">

	    								<div class="form-group">
	      					<label for="sel1">Status</label>
	      					<select class="form-control" id="txtStatus" name="txtStatus">
	        				<option value="new">New</option>
	        				<option value="old">Old</option>
	        				</select>

										</div>

                    <div class="container">

                  <div class="form-group">
              <label for="sel1">Provice</label>
              <select class="form-control" id="txtProv" name="txtProv">

        <option value="" selected>--------- เลือกจังหวัด ---------</option>
        <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
        <option value="กระบี่">กระบี่ </option>
        <option value="กาญจนบุรี">กาญจนบุรี </option>
        <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
        <option value="กำแพงเพชร">กำแพงเพชร </option>
        <option value="ขอนแก่น">ขอนแก่น</option>
        <option value="จันทบุรี">จันทบุรี</option>
        <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
        <option value="ชัยนาท">ชัยนาท </option>
        <option value="ชัยภูมิ">ชัยภูมิ </option>
        <option value="ชุมพร">ชุมพร </option>
        <option value="ชลบุรี">ชลบุรี </option>
        <option value="เชียงใหม่">เชียงใหม่ </option>
        <option value="เชียงราย">เชียงราย </option>
        <option value="ตรัง">ตรัง </option>
        <option value="ตราด">ตราด </option>
        <option value="ตาก">ตาก </option>
        <option value="นครนายก">นครนายก </option>
        <option value="นครปฐม">นครปฐม </option>
        <option value="นครพนม">นครพนม </option>
        <option value="นครราชสีมา">นครราชสีมา </option>
        <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
        <option value="นครสวรรค์">นครสวรรค์ </option>
        <option value="นราธิวาส">นราธิวาส </option>
        <option value="น่าน">น่าน </option>
        <option value="นนทบุรี">นนทบุรี </option>
        <option value="บึงกาฬ">บึงกาฬ</option>
        <option value="บุรีรัมย์">บุรีรัมย์</option>
        <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
        <option value="ปทุมธานี">ปทุมธานี </option>
        <option value="ปราจีนบุรี">ปราจีนบุรี </option>
        <option value="ปัตตานี">ปัตตานี </option>
        <option value="พะเยา">พะเยา </option>
        <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
        <option value="พังงา">พังงา </option>
        <option value="พิจิตร">พิจิตร </option>
        <option value="พิษณุโลก">พิษณุโลก </option>
        <option value="เพชรบุรี">เพชรบุรี </option>
        <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
        <option value="แพร่">แพร่ </option>
        <option value="พัทลุง">พัทลุง </option>
        <option value="ภูเก็ต">ภูเก็ต </option>
        <option value="มหาสารคาม">มหาสารคาม </option>
        <option value="มุกดาหาร">มุกดาหาร </option>
        <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
        <option value="ยโสธร">ยโสธร </option>
        <option value="ยะลา">ยะลา </option>
        <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
        <option value="ระนอง">ระนอง </option>
        <option value="ระยอง">ระยอง </option>
        <option value="ราชบุรี">ราชบุรี</option>
        <option value="ลพบุรี">ลพบุรี </option>
        <option value="ลำปาง">ลำปาง </option>
        <option value="ลำพูน">ลำพูน </option>
        <option value="เลย">เลย </option>
        <option value="ศรีสะเกษ">ศรีสะเกษ</option>
        <option value="สกลนคร">สกลนคร</option>
        <option value="สงขลา">สงขลา </option>
        <option value="สมุทรสาคร">สมุทรสาคร </option>
        <option value="สมุทรปราการ">สมุทรปราการ </option>
        <option value="สมุทรสงคราม">สมุทรสงคราม </option>
        <option value="สระแก้ว">สระแก้ว </option>
        <option value="สระบุรี">สระบุรี </option>
        <option value="สิงห์บุรี">สิงห์บุรี </option>
        <option value="สุโขทัย">สุโขทัย </option>
        <option value="สุพรรณบุรี">สุพรรณบุรี </option>
        <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
        <option value="สุรินทร์">สุรินทร์ </option>
        <option value="สตูล">สตูล </option>
        <option value="หนองคาย">หนองคาย </option>
        <option value="หนองบัวลำภู">หนองบัวลำภู </option>
        <option value="อำนาจเจริญ">อำนาจเจริญ </option>
        <option value="อุดรธานี">อุดรธานี </option>
        <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
        <option value="อุทัยธานี">อุทัยธานี </option>
        <option value="อุบลราชธานี">อุบลราชธานี</option>
        <option value="อ่างทอง">อ่างทอง </option>
        <option value="อื่นๆ">อื่นๆ</option>
  </select>



                </div>

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Address</span>
                      </div>
                      <textarea class="form-control" aria-label="With textarea" name="txtAd" id="txtAd" placeholder="Address"></textarea>
                    </div>
                  </br>
										<div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Business Type</span>
                        </div>
                        <textarea class="form-control" aria-label="With textarea" name="txtBut" id="txtBut" placeholder="Business Type"></textarea>
                      </div>
                    </br>



                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>

                        <div class="register-link m-t-15 text-center">

                        </div>
                    </form>
</div>
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
