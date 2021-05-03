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
<center><h1>Welcome to Manager Page!</h1> <br>
<table border="0" style="width: 200px">
	<tbody>

		<tr>

			<td><h3 class="text-success"><?php echo $objResult["name"];?></h3></td>
	<td><h3 class="text-success"><?php echo $objResult["surname"];?></h3></td>
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
		<script src="fullcalendar/lib/jquery.min.js"></script>
		<script src="fullcalendar/lib/moment.min.js"></script>
		<script src="fullcalendar/fullcalendar.min.js"></script>
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
<?php
	include "main_user.php";
 	?>

			</header>
			<!-- /#header -->
			<!-- Content -->
			<div class="content">
					<!-- Animated -->
					<div class="animated fadeIn">


								<?php
								include 'connect.php';
						 		$strSQL = "SELECT * FROM customer";
								$objQuery3 = mysqli_query($objCon,$strSQL);
								$objResult4 = mysqli_fetch_array($objQuery3,MYSQLI_ASSOC);
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
																			            <div class="login-content">
																			                <div class="login-logo">
																			                    <a href="index.html">
																			                        <img class="align-content" src="images/logo_01.png" alt="">
																			                    </a>
																			                </div>
																			                <div class="login-form">
																			                    <form name="form1" method="post" action="save_edit_company.php?cus_id=<?php echo $_GET["cus_id"];?>">
																													
																			                        <div class="form-group">
																			                            <label>Company name</label>
																			                            <input name="txtCompany" class="form-control" type="text" id="txtCompany" size="20"  value="<?php echo $objResult4["name_company"];?>">
																			                        </div>
																			                        <div class="form-group">
																			                            <label>Customer Name</label>
																			                            <input name="txtNcus" type="text" class="form-control" value="<?php echo $objResult4["name_cus"];?>" id="txtNcus">
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

																			        <option value="<?php echo $objResult4["province"];?>" selected><?php echo $objResult4["province"];?></option>
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
																											<div class="form-group">
																													<label>Address</label>
																													<input name="txtAd" type="text" class="form-control" value="<?php echo $objResult4["address"];?>" id="txtAd">
																											</div>
																											<div class="form-group">
																													<label>Business Type</label>
																													<input name="txtBut" type="text" class="form-control" value="<?php echo $objResult4["business_type"];?>" id="txtBut">
																											</div>

																			                  </br>




																			                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Save</button><br><br>

																			                        <div class="register-link m-t-15 text-center">

																			                        </div>


																												</form>
																												<center><h3><a href="javascript:history.back();">Back</h3></center>


																							</div>
																					</div>
																				</div>
																			</div>


																		</div>
																			</div> <!-- /.card-body -->

															</div> <!-- /.row -->


											</div><!-- /# column -->



									<div class="container">
									<div class="row">
											<div class="col-md-12 col-lg-12">
													<div class="card">
															<div class="card-body">
																	<!-- <h4 class="box-title">Chandler</h4> -->




										</div>

							<!-- /#add-category -->
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
													จัดทำใหม่โดย น้องมอส
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
