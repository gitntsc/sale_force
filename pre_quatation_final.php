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
<?php
 $strSQL2 = "SELECT * FROM qutation where  qu_id = '".$_GET['qu_id']."'";
  $objQuery2 = mysqli_query($objCon,$strSQL2);
  $objResult2 = mysqli_fetch_array($objQuery2,MYSQLI_ASSOC);
 ?>
</head>
<?php
if($objResult2['status']=='non approve'){
 ?>
<body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">

                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo_01.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form name="form1" method="post" action="save_edit_quatation.php?qu_id=<?php echo $_GET['qu_id'];?>">
											<div class="form-group">
                        <center><h2>แบบฟอร์มขอใบเสนอราคา</h2></center>
													<label>ATTN</label>
												<input name="attn" class="form-control" type="text" id="attn" size="20"  value="<?php echo $objResult2['attn'];?>">
											</div>
                        <div class="form-group">
                            <label>บริษัท</label>
                            <input name="company" class="form-control" type="text" id="company" size="20" value="<?php echo $objResult2['company'];?>">
                        </div>
												<table class="table table-striped">
                            <thead>
                        <tr>

                          <th scope="col">จำนวน</th>
                          <th scope="col">สินค้า</th>
                          <th scope="col">ผู้ผลิต/ประเทศ</th>
                          <th scope="col">ราคา</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>

                          <td><input name="amount1" class="form-control" type="text" id="amount1" size="3"  value="<?php echo $objResult2['amount1'];?>"></td>
                          <td><input name="product1" class="form-control" type="text" id="product1" size="20"   value="<?php echo $objResult2['product1'];?>"></td>
                          <td><input name="produce1" class="form-control" type="text" id="produce1" size="5"  value="<?php echo $objResult2['produce1'];?>"></td>
                          <td><input name="price1" class="form-control" type="text" id="price1" size="3"  value="<?php echo $objResult2['price1'];?>"></td>
                        </tr>
                        <tr>

                          <td><input name="amount2" class="form-control" type="text" id="amount2"  size="3"   value="<?php echo $objResult2['amount2'];?>"></td>
                          <td><input name="product2" class="form-control" type="text" id="product2" size="20"  value="<?php echo $objResult2['product2'];?>"></td>
                          <td><input name="produce2" class="form-control" type="text" id="produce2" size="5" value="<?php echo $objResult2['produce2'];?>"></td>
                          <td><input name="price2" class="form-control" type="text" id="price2" size="3"  value="<?php echo $objResult2['price2'];?>"></td>
                        </tr>
                        <tr>

                          <td><input name="amount3" class="form-control" type="text" id="amount3" size="3"  value="<?php echo $objResult2['amount3'];?>"></td>
                          <td><input name="product3" class="form-control" type="text" id="product3" size="20" value="<?php echo $objResult2['product3'];?>"></td>
                          <td><input name="produce3" class="form-control" type="text" id="produce3" size="5" value="<?php echo $objResult2['produce3'];?>"></td>
                          <td><input name="price3" class="form-control" type="text" id="price3" size="3"  value="<?php echo $objResult2['price3'];?>"></td>
                        </tr>
                        <tr>

                          <td><input name="amount4" class="form-control" type="text" id="amount4" size="3"  value="<?php echo $objResult2['amount4'];?>"></td>
                          <td><input name="product4" class="form-control" type="text" id="product4" size="10"  value="<?php echo $objResult2['product4'];?>"></td>
                          <td><input name="produce4" class="form-control" type="text" id="produce4" size="5" value="<?php echo $objResult2['produce3'];?>"></td>
                          <td><input name="price4" class="form-control" type="text" id="price4" size="3" value="<?php echo $objResult2['price3'];?>"></td>
                        </tr>
                        <tr>

                          <<td><input name="amount5" class="form-control" type="text" id="amount5" size="3"  value="<?php echo $objResult2['amount5'];?>"></td>
                          <td><input name="product5" class="form-control" type="text" id="product5" size="20"  value="<?php echo $objResult2['product5'];?>"></td>
                          <td><input name="produce5" class="form-control" type="text" id="produce5" size="5" value="<?php echo $objResult2['produce5'];?>"></td>
                          <td><input name="price5" class="form-control" type="text" id="price5" size="3"  value="<?php echo $objResult2['price5'];?>"></td>
                      </tbody>
                    </table>



                    <div class="form-group">
                  <label>Date</label>
                  <div class="col-4">
                  <input class="form-control" type="date" id="strdate" name="strdate" value="<?php echo $objResult2['strdate'];?>">
                  </div>
                  </div>
                        <br>
                        <br>
                        <div class="input-group">
                          <div class="input-group-prepend">
                          <label style="color:red">หมายเหตุ</label></br>
                          </div>
                        </div>
                          <!--<textarea class="form-control" aria-label="With textarea" name="note" id="note" placeholder="หมายเหตุ"></textarea> -->
                          <label>1.ราคานี้ยังไม่รวมภาษีมูลค่าเพิ่ม 7%</label></br>

                          <label>2.ยืนยันราคาภายใน</label> <input type="text" name="day" id="day" size="2" value="<?php echo $objResult2['day'];?>"><label>วันหลังจากได้รับใบเสนอราคา</label></br>

                          <label>3.Exchange rate</label><input type="text" name="xrate" id="xrate" size="15" value="<?php echo $objResult2['xrate'];?>"><label>กรณีอัตราการแลกเปลี่ยนผันผวน กว่าที่ระบุ บริษัทฯสงวนสิทธิ์ในการปรับราคาโดยมิต้องแจ้งให้ทราบล่วงหน้า</label></br>

                          <label >4.lead time</label><input type="text" name="lead_w" id="lead_w" size="10" value="<?php echo $objResult2['lead_w'];?>"><label>หลังจากได้รับใบสั่งซื้อ(กรณีเป็นสินค้าไม่มีสต๊อก)</label><br>

                          <label>Lead time</label><input type="text" name="lead_d" id="lead_d" size="8" value="<?php echo $objResult2['lead_d'];?>"><label>หลังจากได้รับใบสั่งซื้อ(กรณีเป็นสินค้ามีสต๊อก)</label><br>

                          <label>5.กรณีต้องการสินค้าด่วนในวันถัดไป ขอให้สั่งซื้อสิ้นค้าภายในเวลา 14.00 น. ของวันก่อนส่งสินค้า หรือระบุในใบสั่งซื้อ</label><br>

                          <label>6.จัดส่งขั่นต่ำ 5,000 บาท/บิล</label><br>

                          <div class="form-group">
                            <label>7.</label>
                            <input name="op1" class="form-control" type="text" id="op1" size="20"  value="<?php echo $objResult2['op1'];?>">
                        </div><div class="form-group">
                            <label>8.</label>
                            <input name="op2" class="form-control" type="text" id="op2" size="20"  value="<?php echo $objResult2['op2'];?>">
                        </div><div class="form-group">
                            <label>9.</label>
                            <input name="op3" class="form-control" type="text" id="op3" size="20"  value="<?php echo $objResult2['op3'];?>">
                        </div>

                        <br>
												<div class="form-group">
                            <label>Fax</label>
                            <input name="fax" class="form-control" type="text" id="fax" size="20" value="<?php echo $objResult2['Fax'];?>">
                        </div>


                        <br>
                        <div class="form-group">
                        <label for="phone">Email</label><br><br>
                        <input class="form-control" type="email" id="email" name="email" value="<?php echo $objResult2['Email'];?>">
                        </div>
                        <br>



                        <div class="form-group">
  	      					<label for="sel1">วิธีส่ง</label>
  	      					<select class="form-control" id="kind_send" name="kind_send" value="<?php echo $objResult2['kind_send'];?>">>
  	        				<option value="ส่งเอง">ส่งเอง</option>
  	        				<option value="ด่วน">ด่วน</option>
									</div>
									<br>
									<br>



  	      					</select>
									</div>
									<?php
									if($objResult['level']=='manager'){
										?>
										<div class="form-group">
										<label for="sel1">อนุมัติ</label>
										<select class="form-control" id="txtapp" name="txtapp">
										<option value="approve">Approver</option>
										<option value="none approve">Non approve</option>

										</select>
										 <br><br>
									<?php

								}

									 ?>

                       <br><br>

                            <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Save</button>
                          </br></br>


                        <center><h3><a href="javascript:history.back();">Back</h3></center>

</form>




        </div>
    </div>
	</div>
<?php
}else{
  ?>
  <body class="bg-dark">

      <div class="sufee-login d-flex align-content-center flex-wrap">
          <div class="container">

                  <div class="login-logo">
                      <a href="index.html">
                          <img class="align-content" src="images/logo_01.png" alt="">
                      </a>
                  </div>
                  <div class="login-form">
                      <form name="form1" method="post" action="save_edit_quatation.php?qu_id=7">
  											<div class="form-group">
                          <center><h2>แบบฟอร์มขอใบเสนอราคา</h2></center>
  													<label>ATTN</label><br>
  												<label><?php echo $objResult2['attn'];?></label>
  											</div>
                          <div class="form-group">
                              <label>บริษัท</label><br>
                              <label><?php echo $objResult2['company'];?></label>
                          </div>
                          <table class="table table-striped">
                              <thead>
                          <tr>

                            <th scope="col">จำนวน</th>
                            <th scope="col">สินค้า</th>
                            <th scope="col">ผู้ผลิต/ประเทศ</th>
                            <th scope="col">ราคา</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>

                            <td><label><?php echo $objResult2['amount1'];?></label></td>
                            <td><label><?php echo $objResult2['product1'];?></label></td>
                            <td><label><?php echo $objResult2['produce1'];?></label></td>
                            <td><label><?php echo $objResult2['price1'];?></label></td>
                          </tr>
                          <tr>

                            <td><label><?php echo $objResult2['amount2'];?></label></td>
                            <td><label><?php echo $objResult2['product2'];?></label></td>
                            <td><label><?php echo $objResult2['produce2'];?></label></td>
                            <td><label><?php echo $objResult2['price2'];?></label></td>
                          </tr>
                          <tr>

                            <td><label><?php echo $objResult2['amount3'];?></label></td>
                            <td><label><?php echo $objResult2['product3'];?></label></td>
                            <td><label><?php echo $objResult2['produce3'];?></label></td>
                            <td><label><?php echo $objResult2['price3'];?></label></td>
                          </tr>
                          <tr>

                            <td><label><?php echo $objResult2['amount4'];?></label></td>
                            <td><label><?php echo $objResult2['product4'];?></label></td>
                            <td><label><?php echo $objResult2['produce3'];?></label></td>
                            <td><label><?php echo $objResult2['price3'];?></label></td>
                          </tr>
                          <tr>

                            <td><label><?php echo $objResult2['amount5'];?></label></td>
                            <td><label><?php echo $objResult2['product5'];?></label></td>
                            <td><label><?php echo $objResult2['produce5'];?></label></td>
                            <td><label><?php echo $objResult2['price5'];?></label></td>
                        </tbody>
                      </table>



                      <div class="form-group">
                    <label>Date</label>
                    <div class="col-4">
                    <label><?php echo $objResult2['strdate'];?></label>
                    </div>
                    </div>

                          <br>

													<div class="input-group">
                          <div class="input-group-prepend">
                          <label style="color:red">หมายเหตุ</label></br>
                          </div>
                        </div>
                          <!--<textarea class="form-control" aria-label="With textarea" name="note" id="note" placeholder="หมายเหตุ"></textarea> -->
                          <label>1.ราคานี้ยังไม่รวมภาษีมูลค่าเพิ่ม 7%</label></br>

                          <label>2.ยืนยันราคาภายใน</label><label><?php echo $objResult2['day'];?>">วันหลังจากได้รับใบเสนอราคา</label><br>

                          <label>3.Exchange rate <?php echo $objResult2['xrate'];?> กรณีอัตราการแลกเปลี่ยนผันผวนกว่าที่ระบุบริษัทฯสงวนสิทธิ์ในการปรับราคาโดยมิต้องแจ้งให้ทราบล่วงหน้า</label></br>

                          <label >4.lead time <?php echo $objResult2['lead_w'];?>หลังจากได้รับใบสั่งซื้อ(กรณีเป็นสินค้าไม่มีสต๊อก)</label><br>

                          <label>Lead time <?php echo $objResult2['lead_d'];?>หลังจากได้รับใบสั่งซื้อ(กรณีเป็นสินค้ามีสต๊อก)</label><br>

                          <label>5.กรณีต้องการสินค้าด่วนในวันถัดไป ขอให้สั่งซื้อสิ้นค้าภายในเวลา 14.00 น. ของวันก่อนส่งสินค้า หรือระบุในใบสั่งซื้อ</label><br>

                          <label>6.จัดส่งขั่นต่ำ 5,000 บาท/บิล</label><br>

                          <div class="form-group">
                            <label>7.</label>
                            <label><?php echo $objResult2['op1'];?></label>
                        </div><div class="form-group">
                            <label>8.</label>
                            <label><?php echo $objResult2['op2'];?></label>
                        </div><div class="form-group">
                            <label>9.</label>
                            <label><?php echo $objResult2['op3'];?></label>
                        </div>
                          <br>
  												<div class="form-group">
                              <label>Fax</label><br>
                            <label><?php echo $objResult2['Fax'];?></label>
                          </div>


                          <br>
                          <div class="form-group">
                          <label for="phone">Email</label><br>
                          <label><?php echo $objResult2['Email'];?></label>
                          </div>
                          <br>
													<div class="form-group">
															<label>หมายเหตุ</label>
																<br><label><?php echo $objResult2['note'];?></label>
													</div>
													<br>

                          <div class="form-group">
    	      					<label for="sel1">วิธีส่ง</label>
    	      					<label><?php echo $objResult2['kind_send'];?></label>

    	      					</select>

    										</div>




													<center><h3><a href="javascript:history.back();">Back</h3></center>


 </form>

          </div>
      </div>
  	</div>
<?php
  }


?>
</div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
