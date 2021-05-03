
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">

                <li class="active">
                    <a href="index.html"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <?php
                    if($objResult['section']=='tech'){

                     ?>
                <li class="menu-title">Action</li><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>เมนูการเพิ่มรายงาน</a>
                    <ul class="sub-menu children dropdown-menu">
											<li><i class="menu-icon fa fa-th"></i><a href="work_report.php">รายงานการพบลูกค้า</a></li>
                      <li><i class="fa fa-puzzle-piece"></i><a href="register_company.php">ลงทะเบียนบริษัท</a></li>
											 <li><i class="menu-icon fa fa-th"></i><a href="register_pre.php">รายการรายสัปดาห์</a></li>
											 <li><i class="menu-icon fa fa-th"></i><a href="work_report_in.php">รายงานการทำงานภายใน</a></li>
                       <li><i class="menu-icon fa fa-th"></i><a href="quatation.php">ใบเสนอราคา</a></li>
                       <li><i class="menu-icon fa fa-th"></i><a href="example.php">ใบขอตัวอย่าง</a></li>
										 	</ul>
              </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>เมนูการแก้ไขข้อมูล</a>
                    <ul class="sub-menu children dropdown-menu">
											<li><i class="menu-icon fa fa-th"></i><a href="work_report_u.php">แก้ไขรายงานการพบลูกค้า</a></li>
                      <li><i class="menu-icon fa fa-th"></i><a href="pre_view_u.php">แก้ไขรายการรายสัปดาห์</a></li>
                      <li><i class="menu-icon fa fa-th"></i><a href="pre_edit_quatation.php">แก้ไขใบเสนอราคา</a></li>
                      <li><i class="menu-icon fa fa-th"></i><a href="example_report_u.php">แก้ไขใบขอตัวอย่าง</a></li>
											<li><i class="fa fa-puzzle-piece"></i><a href="edit_company.php">แก้ไขทะเบียนบริษัท</a></li>
            </ul>
                </li>
								<li class="menu-item-has-children dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>เมนูการลบข้อมูล</a>
										<ul class="sub-menu children dropdown-menu">
											<li><i class="menu-icon fa fa-th"></i><a href="work_report_u_del.php">ลบรายงานการพบลูกค้าของตัวเอง</a></li>
											<li><i class="menu-icon fa fa-th"></i><a href="pre_view_u_del.php">ลบรายการรายสัปดาห์</a></li>

						</ul>
								</li>
								<li class="menu-item-has-children dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>ปฏิทิน</a>
										<ul class="sub-menu children dropdown-menu">
											<li><i class="fa fa-table"></i></i><a href="view_calendar.php">ปฏิทิน</a></li>
											</ul>
							</li>
              <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>การอนุมัติ และตรวจสอบข้อมูล</a>
                <ul class="sub-menu children dropdown-menu">


                  <li><i class="menu-icon fa fa-th"></i><a href="app2_ex.php">อนุมัติใบขอตัวอย่าง</a></li>
                  <li><i class="menu-icon fa fa-th"></i><a href="pre_check_signature.php">ใบขอตัวอย่างที่มีลายเซ็นลูกค้า</a></li>



        </ul>
            </li>

            <?php
          }elseif($objResult['section']=='cs'){
             ?>
             <li class="menu-title">Action</li><!-- /.menu-title -->
              <li class="menu-item-has-children dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>เมนูการเพิ่มรายงาน</a>
                  <ul class="sub-menu children dropdown-menu">

                     <li><i class="menu-icon fa fa-th"></i><a href="quatation.php">ใบเสนอราคา</a></li>

                    </ul>
            </li>
              <li class="menu-item-has-children dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>เมนูการแก้ไขข้อมูล</a>
                  <ul class="sub-menu children dropdown-menu">

                    <li><i class="menu-icon fa fa-th"></i><a href="pre_edit_quatation_u.php">แก้ไขใบเสนอราคา</a></li>
                    <li><i class="menu-icon fa fa-th"></i><a href="preview_quatation.php">ดูใบเสนอราคาที่อนุมัติแล้ว</a></li>

          </ul>
              </li>
              <li class="menu-item-has-children dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>เมนูการลบข้อมูล</a>
                  <ul class="sub-menu children dropdown-menu">

                    <li><i class="menu-icon fa fa-th"></i><a href="pre_view_u_del.php">ลบใบเสนอราคา</a></li>

          </ul>
              </li>


            <?php
          }else{
             ?>
             <li class="menu-title">Action</li><!-- /.menu-title -->
              <li class="menu-item-has-children dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>เมนูการเพิ่มรายงาน</a>
                  <ul class="sub-menu children dropdown-menu">
                    <li><i class="menu-icon fa fa-th"></i><a href="work_report.php">รายงานการพบลูกค้า</a></li>
                    <li><i class="fa fa-puzzle-piece"></i><a href="register_company.php">ลงทะเบียนบริษัท</a></li>
                     <li><i class="menu-icon fa fa-th"></i><a href="register_pre.php">รายการรายสัปดาห์</a></li>
                     <li><i class="menu-icon fa fa-th"></i><a href="work_report_in.php">รายงานการทำงานภายใน</a></li>
                     <li><i class="menu-icon fa fa-th"></i><a href="quatation.php">ใบเสนอราคา</a></li>
                     <li><i class="menu-icon fa fa-th"></i><a href="example.php">ใบขอตัวอย่าง</a></li>
                    </ul>
            </li>
              <li class="menu-item-has-children dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>เมนูการแก้ไขข้อมูล</a>
                  <ul class="sub-menu children dropdown-menu">
                    <li><i class="menu-icon fa fa-th"></i><a href="work_report_u.php">แก้ไขรายงานการพบลูกค้า</a></li>
                    <li><i class="menu-icon fa fa-th"></i><a href="pre_view_u.php">แก้ไขรายการรายสัปดาห์</a></li>
                    <li><i class="menu-icon fa fa-th"></i><a href="pre_edit_quatation_u.php">แก้ไขใบเสนอราคา</a></li>
                    <li><i class="menu-icon fa fa-th"></i><a href="example_report_u.php">แก้ไขใบขอตัวอย่าง</a></li>
                    <li><i class="fa fa-puzzle-piece"></i><a href="edit_company.php">แก้ไขทะเบียนบริษัท</a></li>
          </ul>
              </li>
              <li class="menu-item-has-children dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>เมนูการลบข้อมูล</a>
                  <ul class="sub-menu children dropdown-menu">
                    <li><i class="menu-icon fa fa-th"></i><a href="work_report_u_del.php">ลบรายงานการพบลูกค้าของตัวเอง</a></li>
                    <li><i class="menu-icon fa fa-th"></i><a href="pre_view_u_del.php">ลบรายการรายสัปดาห์</a></li>

          </ul>
              </li>
              <li class="menu-item-has-children dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>ใบขอตัวอย่างสำหรับให้ลูกค้าเซ็น</a>
                  <ul class="sub-menu children dropdown-menu">
                    <li><i class="menu-icon fa fa-th"></i><a href="pre_finish_sig.php">ใบขอตัวอย่างที่อนุมัติแล้ว</a></li>
                    
                    
                 

          </ul>
              </li>
              <li class="menu-item-has-children dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>ปฏิทิน</a>
                  <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-table"></i></i><a href="view_calendar.php">ปฏิทิน</a></li>
                    </ul>
            </li>

            <?php
          }
            ?>





                <!--<li class="menu-title">Icons</li><!-- /.menu-title -->

                  <!--<li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                        <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                    </ul>
                </li>
                <li>
                    <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a></li>
                        <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
                        <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Google Maps</a></li>
                        <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a></li>
                    </ul>
                </li>
                <li class="menu-title">Extras</li><!-- /.menu-title -->
               <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                    <ul class="sub-menu children dropdown-menu">

                      <li><i class="menu-icon fa fa-sign-in"></i><a href="logout.php">Log out</a></li>


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
<a class="navbar-brand" href="https://www.nutritionsc.co.th"><img src="images/logo-ntsc.jpg" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
            </div>
        </div>
        <div class="top-right">
            <div class="header-menu">
                <div class="header-left">
                    <button class="search-trigger"><i class="fa fa-search"></i></button>
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                        </form>
                    </div>
                                          <?php
                                        include 'connect.php';
                                          $strSQL = "SELECT * FROM report WHERE approver = '".$_SESSION['username']."' and(approve_stat != 'approve')";
                                          $objQuery3 = mysqli_query($objCon,$strSQL);
                                          $objResult3 = mysqli_num_rows($objQuery3);
                                          ?>
                    <div class="dropdown for-notification">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger"><?php echo $objResult3; ?></span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">มี <?php echo $objResult3;?> รายงานที่ยังไม่ได้อนุมัติ</p>

                        </div>
                    </div>

                </div>
								<?php
									include "connect.php";
									$strSQL = "SELECT* FROM member WHERE username = '".$_SESSION['username']."'";
									$objQuery = mysqli_query($objCon,$strSQL);
									$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
									?>

                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <p class="text-success"><?php echo $objResult["username"];?></p>
                    </a>

                    <div class="user-menu dropdown-menu">


                        <a class="nav-link" href="logout.php"><i class="fa fa-power -off"></i>Logout</a>
                    </div>
                </div>

            </div>
        </div>
