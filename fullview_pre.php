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

  <center><h1>Fullview</h1> <br>
  <table border="0" style="width: 200px">
    <tbody>

      <tr>


	</tr>


    </tbody>
  </table>
  </center>
   </div>
  </div>
</div>
</body>
</html>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sale Support NutritionSc</title>
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
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

   <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Action</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>About User</a>
                        <ul class="sub-menu children dropdown-menu">

                            <li><i class="fa fa-id-badge"></i><a href="user.php">All User</a></li>


                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Table ข้อมูล</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="order_section.php">ดูแยกตามสังกัด</a></li>
                            <li><i class="fa fa-table"></i><a href="tables-data.html">ดูแยกตามผู้ใช้</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="work_report.php">เพิ่มรีพอร์ต</a></li>

                        </ul>
                    </li>





                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="https://www.nutritionsc.co.th"><img src="images/logo-NTSC.jpg" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">

                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>



                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <p class="text-success"><?php echo $objResult["username"];?></p>
                        </a>

                        <div class="user-menu dropdown-menu">

                            <a class="nav-link" href="#"><i class="fa fa- user"></i>ข้อความเตือน <span class="count">13</span></a>



                            <a class="nav-link" href="logout.php"><i class="fa fa-power -off"></i>ลงชื่อออก</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">

                <!--  Traffic  -->

                <!--  /Traffic -->
                <div class="clearfix"></div>




								<?php
								include 'connect.php';
								$strSQL3 = "SELECT * FROM report WHERE case_id = '".$_GET["case_id"]."' ";
								$objQuery3 = mysqli_query($objCon,$strSQL3);
								$objResult3 = mysqli_fetch_array($objQuery3,MYSQLI_ASSOC);

								 ?>
								<?php
								if($objResult3["approve_stat"]=="approve"){
							 ?>
								<!--  Form Report  -->
								<div class="row">
										<div class="col-lg-12">
												<div class="card">
														<div class="card-body">
																<h4 class="box-title">Form Report </h4>
														</div>
														<div class="row">
																<div class="col-lg-12">
																		<div class="card-body">
																				<!-- <canvas id="TrafficChart"></canvas>   -->

																				<div class="sufee-login d-flex align-content-center flex-wrap">
																		        <div class="container">

																		                <div class="login-logo">
																		                    <a href="index.html">
																		                        <img class="align-content" src="images/logo_01.png" alt="">
																		                    </a>
																		                </div>
                                                    <div class="login-form">
                                                        <form name="form1" method="post" action="save_register_pre.php?id=<?php echo $_GET["id"];?>">

                                                            <div class="form-group">
                                                                <label>Company name</label>
                                                                <input name="txtCompany" class="form-control" type="text" id="txtCompany" size="20"  placeholder="ชื่อบริษัท">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Customer Name</label>
                                                                <input name="txtcusname" type="text" class="form-control" placeholder="ชื่อลูกค้า" id="txtcusname">
                                                            </div>

                                                            <div class="container">

                                                          <div class="form-group">
                                                      <label for="sel1">Customer Level</label>
                                                      <select class="form-control" id="txtCuslevel" name="txtCuslevel">
                                                      <option>ตำแหน่งของผู้ที่ไปพบ</option>
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
                                                      <option>เกรดลูกค้า</option>
                                                      <option value="a">A</option>
                                                      <option value="B">B</option>
                                                      <option value="C">C</option>
                                                      <option value="-">-</option>
                                                      </select>

                                                        </div>

                                                        <div class="container">
                                                        <label>Start Date</label><br>
                                                        <input name="strdate" type="text" id="datepicker" placeholder="เลือกวันที่">



                                                      </div>
                                                        </br>
                                                        <div class="container">
                                                        <label>Time</label><br>
                                                          <input name="txttime" type="text" class="form-control" placeholder="เวลา" id="txttime">



                                                      </div>
                                                        </br>

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
                                                            <span class="input-group-text">Details</span>
                                                          </div>
                                                          <textarea class="form-control" aria-label="With textarea" name="txtdetail" id="txtdetail" placeholder="รายละเอียด/เป้าหมาย"></textarea>
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



																		</div> <!-- /.card-body -->
																</div>
														</div> <!-- /.row -->
														<div class="card-body"></div>
												</div>
										</div><!-- /# column -->
									<?php
								}else{
									?>
									<!--  Form Report  -->
									<div class="row">
											<div class="ccol-md-12 col-lg-12">
													<div class="card">
															<div class="card-body">
																	<h4 class="box-title">Form Report </h4>
															</div>
															<div class="row">
																	<div class="col-lg-12">
																			<div class="card-body">
																					<!-- <canvas id="TrafficChart"></canvas>   -->

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
																													 <input name="txtCusname" class="form-control" type="text" id="txtCusname" size="20"  value="<?php echo $objResult3["company_name"];?>">
																												 </div>
																														<div class="form-group">
																																<label>ชื่อลูกค้า</label>
																																<input name="txtCusname" class="form-control" type="text" id="txtCusname" size="20"  value="<?php echo $objResult3["cus_name"];?>">
																														</div>
																														<div class="form-group">
																																<label>ตำแหน่ง</label>
																																<input name="txtCuslevel" type="text" class="form-control" value="<?php echo $objResult3["cus_level"];?>" id="txtCuslevel">
																														</div>
																													 <div class="form-group">
																															 <label>ผู้มีอำนาจการตัดสินใจ</label>
																															 <input name="txtApprover" type="text" class="form-control" value="<?php echo $objResult3["approver"];?>" id="txtApprover">
																													 </div>
																													 <div class="form-group">
																															 <label>บุคลิกลักษณะลูกค้า</label>
																															 <input name="txtPersonal" type="text" class="form-control" value="<?php echo $objResult3["personality"];?>" id="txtPersonal">
																													 </div>



																												 <div class="form-group">
																										 <label for="sel1">ลักษณะการติดต่อ</label>
																										 <input name="txtContact" type="text" class="form-control" value="<?php echo $objResult3["contact"];?>" id="txtContact">
																											 </div>

																											 <div class="input-group">
																													<div class="input-group-prepend">
																														<span class="input-group-text">รายละเอียด</span>
																													</div>
																												</div><br>

																											 <div class="form-group">
																									 <label for="sel1">Project ลูกค้า</label>
																									 <input name="txtCuspro" type="text" class="form-control" value="<?php echo $objResult3["cus_project"];?>" id="txtCuspro">
																											</div>
																											<div class="form-group">
																													<label>คาดการณ์การสั่งซื้อสินค้า (สินค้า และ ปริมาณ)</label>
																													<input name="txtVol" type="text" class="form-control" value="<?php echo $objResult3["volume"];?>" id="txtVol">
																											</div>

																											<label>ข้อมูลคู่แข่ง</label>
																											<div class="form-group">
																													<label>สินค้า</label>
																													<input name="txtPro" type="text" class="form-control" value="<?php echo $objResult3["com_pro"];?>" id="txtPro">
																											</div>
																											<div class="form-group">
																													<label>source</label>
																													<input name="txtSou" type="text" class="form-control" value="<?php echo $objResult3["com_source"];?>" id="txtSou">
																											</div>
																											<div class="form-group">
																													<label>ราคา</label>
																													<input name="txtCost" type="text" class="form-control" value="<?php echo $objResult3["com_cost"];?>" id="txtCost">
																											</div>
																											<div class="form-group">
																													<label>ข้อเสนอแนะ</label>
																													<input name="txtOffer" type="text" class="form-control" value="<?php echo $objResult3["offer"];?>" id="txtOffer">
																											</div>
																											<div class="form-check">
																	 			   <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
																	 				 <label class="form-check-label" for="defaultCheck1">ค่าทางด่วน</lable>
																	 				 <input name="exp_cost" type="text" class="form-control" value="<?php echo $objResult3["exp_cost"];?>" id="exp_cost">
																	 			 	</div><br>

																	 				<div class="form-check">
																	 				<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
																	 				<label class="form-check-label" for="defaultCheck1">ค่าที่พัก</lable>
																	 				<input name="rest_cost" type="text" class="form-control" value="<?php echo $objResult3["rest_cost"];?>" id="rest_cost">
																	 		</div><br>

																	 				<div class="form-check">
																	 			<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
																	 			<label class="form-check-label" for="defaultCheck1">ค่าอื่นๆ</lable>
																	 			<input name="other_cost" type="text" class="form-control" value="<?php echo $objResult3["other_cost"];?>" id="other_cost">
																	 			</div><br>
																	 			<div class="form-group">

																											<div class="form-group">
																											<label for="sel1">อนุมัติ</label>
																											<select class="form-control" id="txtapp" name="txtapp">
																											<option value="approve">Approver</option>
																											<option value="none approve">Non approve</option>

																											</select>
																											 <br><br>

																														<button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Save</button>
																													</br></br>

																												</form>
																												<center><h3><a href="javascript:history.back();">Back</h3></center>


																							</div>
																					</div>
																				</div>
																			</div>



																			</div> <!-- /.card-body -->
																	</div>
															</div> <!-- /.row -->
															<div class="card-body"></div>
													</div>
											</div><!-- /# column -->


									<?php

									}
									?>

								<!--  /Form Report -->
								<div class="clearfix"></div>

                <!-- Calender Chart Weather  -->
               <!-- <div class="row">
                    <div class="col-md-12 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <!-- <h4 class="box-title">Chandler</h4> -->
                              <!--   <div class="calender-cont widget-calender">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div><!-- /.card -->
                    </div>

                   <!--  <div class="col-lg-4 col-md-6">
                        <div class="card ov-h">
                            <div class="card-body bg-flat-color-2">
                                <div id="flotBarChart" class="float-chart ml-4 mr-4"></div>
                            </div>
                            <div id="cellPaiChart" class="float-chart"></div>
                        </div><!-- /.card -->
                    <!-- </div>
                    <!-- <div class="col-lg-4 col-md-6">
                        <div class="card weather-box">
                            <h4 class="weather-title box-title">Weather</h4>
                            <div class="card-body">
                                <div class="weather-widget">
                                    <div id="weather-one" class="weather-one"></div>
                                </div>
                            </div>
                        </div><!-- /.card -->
                    </div>
                </div>
                <!-- /Calender Chart Weather -->
                <!-- Modal - Calendar - Add New Event -->
               <!--  <div class="modal fade none-border" id="event-modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"><strong>Add New Event</strong></h4>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /#event-modal -->
                <!-- Modal - Calendar - Add Category -->
               <!--  <div class="modal fade none-border" id="add-category">
                    <div class="modal-dialog">
                        <!-- <!-- <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"><strong>Add a category </strong></h4>
                            </div>
                            <!-- <div class="modal-body">
                                <form>
                                    <div class="row">
                                      <!--   <div class="col-md-6">
                                            <label class="control-label">Category Name</label>
                                            <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                        <!-- </div>
                                       <!--  <div class="col-md-6">
                                            <label class="control-label">Choose Category Color</label>
                                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                <option value="success">Success</option>
                                                <option value="danger">Danger</option>
                                                <option value="info">Info</option>
                                                <option value="pink">Pink</option>
                                                <option value="primary">Primary</option>
                                                <option value="warning">Warning</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                           <!--  <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- /#add-category -->
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2018 Ela Admin
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="assets/js/init/fullcalendar-init.js"></script>

    <!--Local Stuff-->
    <script>
        jQuery(document).ready(function($) {
            "use strict";

            // Pie chart flotPie1
            var piedata = [
                { label: "Desktop visits", data: [[1,32]], color: '#5c6bc0'},
                { label: "Tab visits", data: [[1,33]], color: '#ef5350'},
                { label: "Mobile visits", data: [[1,35]], color: '#66bb6a'}
            ];

            $.plot('#flotPie1', piedata, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        innerRadius: 0.65,
                        label: {
                            show: true,
                            radius: 2/3,
                            threshold: 1
                        },
                        stroke: {
                            width: 0
                        }
                    }
                },
                grid: {
                    hoverable: true,
                    clickable: true
                }
            });
            // Pie chart flotPie1  End
            // cellPaiChart
            var cellPaiChart = [
                { label: "Direct Sell", data: [[1,65]], color: '#5b83de'},
                { label: "Channel Sell", data: [[1,35]], color: '#00bfa5'}
            ];
            $.plot('#cellPaiChart', cellPaiChart, {
                series: {
                    pie: {
                        show: true,
                        stroke: {
                            width: 0
                        }
                    }
                },
                legend: {
                    show: false
                },grid: {
                    hoverable: true,
                    clickable: true
                }

            });
            // cellPaiChart End
            // Line Chart  #flotLine5
            var newCust = [[0, 3], [1, 5], [2,4], [3, 7], [4, 9], [5, 3], [6, 6], [7, 4], [8, 10]];

            var plot = $.plot($('#flotLine5'),[{
                data: newCust,
                label: 'New Data Flow',
                color: '#fff'
            }],
            {
                series: {
                    lines: {
                        show: true,
                        lineColor: '#fff',
                        lineWidth: 2
                    },
                    points: {
                        show: true,
                        fill: true,
                        fillColor: "#ffffff",
                        symbol: "circle",
                        radius: 3
                    },
                    shadowSize: 0
                },
                points: {
                    show: true,
                },
                legend: {
                    show: false
                },
                grid: {
                    show: false
                }
            });
            // Line Chart  #flotLine5 End
            // Traffic Chart using chartist
            if ($('#traffic-chart').length) {
                var chart = new Chartist.Line('#traffic-chart', {
                  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                  series: [
                  [0, 18000, 35000,  25000,  22000,  0],
                  [0, 33000, 15000,  20000,  15000,  300],
                  [0, 15000, 28000,  15000,  30000,  5000]
                  ]
              }, {
                  low: 0,
                  showArea: true,
                  showLine: false,
                  showPoint: false,
                  fullWidth: true,
                  axisX: {
                    showGrid: true
                }
            });

                chart.on('draw', function(data) {
                    if(data.type === 'line' || data.type === 'area') {
                        data.element.animate({
                            d: {
                                begin: 2000 * data.index,
                                dur: 2000,
                                from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                                to: data.path.clone().stringify(),
                                easing: Chartist.Svg.Easing.easeOutQuint
                            }
                        });
                    }
                });
            }
            // Traffic Chart using chartist End
            //Traffic chart chart-js
            if ($('#TrafficChart').length) {
                var ctx = document.getElementById( "TrafficChart" );
                ctx.height = 150;
                var myChart = new Chart( ctx, {
                    type: 'line',
                    data: {
                        labels: [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul" ],
                        datasets: [
                        {
                            label: "Visit",
                            borderColor: "rgba(4, 73, 203,.09)",
                            borderWidth: "1",
                            backgroundColor: "rgba(4, 73, 203,.5)",
                            data: [ 0, 2900, 5000, 3300, 6000, 3250, 0 ]
                        },
                        {
                            label: "Bounce",
                            borderColor: "rgba(245, 23, 66, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(245, 23, 66,.5)",
                            pointHighlightStroke: "rgba(245, 23, 66,.5)",
                            data: [ 0, 4200, 4500, 1600, 4200, 1500, 4000 ]
                        },
                        {
                            label: "Targeted",
                            borderColor: "rgba(40, 169, 46, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(40, 169, 46, .5)",
                            pointHighlightStroke: "rgba(40, 169, 46,.5)",
                            data: [1000, 5200, 3600, 2600, 4200, 5300, 0 ]
                        }
                        ]
                    },
                    options: {
                        responsive: true,
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }

                    }
                } );
            }
            //Traffic chart chart-js  End
            // Bar Chart #flotBarChart
            $.plot("#flotBarChart", [{
                data: [[0, 18], [2, 8], [4, 5], [6, 13],[8,5], [10,7],[12,4], [14,6],[16,15], [18, 9],[20,17], [22,7],[24,4], [26,9],[28,11]],
                bars: {
                    show: true,
                    lineWidth: 0,
                    fillColor: '#ffffff8a'
                }
            }], {
                grid: {
                    show: false
                }
            });
            // Bar Chart #flotBarChart End
        });
    </script>
</body>
</html>
