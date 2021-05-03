<?php

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
			<script>
  $( function() {
		$( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
		$( "#datepicker2" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
  </script>
	<script>
function goBack() {
  window.history.back();
}
</script>

<?php
include "connect.php";
mysqli_set_charset($objCon, "utf8");
$strSQL2 = "SELECT * FROM tbl_event WHERE id = '".$_GET["id"]."' ";
$objQuery2 = mysqli_query($objCon,$strSQL2);
$objResult2 = mysqli_fetch_array($objQuery2,MYSQLI_ASSOC);
 ?>
 <?php

 $timetest = $objResult2["start"];
 $timetest2 = date("Y-m-d", strtotime("+7 days"));



   $calculate =strtotime("$timetest2")-strtotime("$timetest");
 $datesummary=floor($calculate / 86400); // 86400 มาจาก 24*360 (1วัน = 24 ชม.)



if($datesummary >= 7){
 ?>



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
                    <form name="form1" method="post" action="edit_pre_view.php?id=<?php echo $_GET["id"];?>">

                        <div class="form-group">
                            <label>Company name</label><br>
                            <label><?php echo $objResult2["company_name"]; ?></label>
                        </div>
                        <div class="form-group">
                            <label>Customer Name</label><br>
                            <label><?php echo $objResult2["customer_name"]; ?></label>
                        </div>

												<div class="container">

	    								<div class="form-group">
	      					<label for="sel1">Customer Level</label><br>

									<label><?php echo $objResult2["cuslevel"];?></label>


										</div>



												<div class="container">

	    								<div class="form-group">
	      					<label for="sel1">Grade</label><br>

									<label><?php echo $objResult2["grade"];?></label>


										</div>

										<div class="container">
										<label>Start Date</label><br><br>
									<label><?php echo $objResult2["start"]; ?></label>



									</div>
										</br>
										<div class="container">
										<label>Time</label><br><br>
										<label><?php echo $objResult2["time"]; ?></label>



									</div>
										</br>

										<div class="container">

									<div class="form-group">
							<label for="sel1">Province</label><br>


        <label><?php echo $objResult2["prov"];?></label>
      <br>

	<div class="container">
	<label>Details</label><br><br>
	<label><?php echo $objResult2["detail"]; ?></label>
</br>






                        </div>
                    </form>
											<center><h3><a href="javascript:history.back();">Back</h3></center>
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
<?php
}else{ ?>
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
                    <form name="form1" method="post" action="edit_pre_view.php?id=<?php echo $_GET["id"];?>">

                        <div class="form-group">
                            <label>Company name</label>
                            <input name="txtCompany" class="form-control" type="text" id="txtCompany" size="20"  value="<?php echo $objResult2["company_name"]; ?>">
                        </div>
                        <div class="form-group">
                            <label>Customer Name</label>
                            <input name="txtcusname" type="text" class="form-control"  value="<?php echo $objResult2["customer_name"]; ?>" id="txtcusname">
                        </div>

												<div class="container">

	    								<div class="form-group">
	      					<label for="sel1">Customer Level</label>
	      					<select class="form-control" id="txtCuslevel" name="txtCuslevel">
									<option><?php echo $objResult2["cuslevel"];?></option>
									<option value="เจ้าหน้าที่">เจ้าหน้าที่</option>
									<option value="หัวหน้า">หัวหน้า</option>
	        				<option value="ผู้จัดการ">ผู้จัดการ</option>
									<option value="เจ้าของกิจการ">เจ้าของกิจการ</option>
									<option value="-">-</option>
	        				</select>

										</div>



												<div class="container">

	    								<div class="form-group">
	      					<label for="sel1">Grade</label>
	      					<select class="form-control" id="txtgrade" name="txtgrade">
									<option><?php echo $objResult2["grade"];?></option>
									<option value="a">A</option>
	        				<option value="B">B</option>
									<option value="C">C</option>
									<option value="-">-</option>
	        				</select>

										</div>

										<div class="container">
										<label>Start Date</label><br>
										<input name="strdate" type="text" id="datepicker" value="<?php echo $objResult2["start"]; ?>" >



									</div>
										</br>
										<div class="container">
										<label>Time</label><br>
										  <input name="txttime" type="text" class="form-control" value="<?php echo $objResult2["time"]; ?>" id="txttime">



									</div>
										</br>

										<div class="container">

									<div class="form-group">
							<label for="sel1">Province</label>
              <select class="form-control" id="txtProv" name="txtProv">

        <option><?php echo $objResult2["prov"];?></option>
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
  </select><br>

	<div class="container">
	<label>Details</label><br>
	<input name="txtdetail" type="text" id="txtdetail" value="<?php echo $objResult2["detail"]; ?>" >
</br>
<br>




                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Save</button>

                        <div class="register-link m-t-15 text-center">

                        </div>
                    </form>
										<center><h3><a href="javascript:history.back();">Back</h3></center>
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


<?php

}


?>


</html>
