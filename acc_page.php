<?php
	session_start();
	if($_SESSION['u_id'] == "")
	{
		echo "Please Login!";
		header("location:index.php");
	}

	if($_SESSION['level'] != "account")
	{
		echo "This page for admin only!";
		exit();


	}

	include 'connect.php';
	$strSQL = "SELECT * FROM member WHERE u_id = '".$_SESSION['u_id']."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>

  <center><h1>Welcome to Admin Page!</h1> <br>
  <table border="0" style="width: 200px">
    <tbody>

      <tr>

        <td><h3 class="text-success"><?php echo $objResult["name"];?>
		</h3></td>

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
		<link rel="stylesheet" href="fullcalendar/fullcalendar.min.css" />
		<script src="fullcalendar/lib/jquery.min.js"></script>
		<script src="fullcalendar/lib/moment.min.js"></script>
		<script src="fullcalendar/fullcalendar.min.js"></script>
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />


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
<?php
include 'check_level.php';
?>
<body>
    <!-- Left Panel -->

        </header>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">

                <!--  Traffic  -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">List Reports Not Approve</h4>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card-body">
                                        <!-- <canvas id="TrafficChart"></canvas>   -->


																			<?php
																			 include 'connect.php';


																			 $perpage = 10;
																			 if (isset($_GET['page'])) {
																			 $page = $_GET['page'];
																			 } else {
																			 $page = 1;
																			 }

																			 $start = ($page - 1) * $perpage;

																			 $sql = "select * from report where approve_stat != 'approve' limit {$start} , {$perpage} ";
																			 $query = mysqli_query($objCon, $sql);
																			 ?>
																			<table class="table">
<thead class="thead-dark">

		<tr>
			<tr>

				<th scope="col"><div align="center">username</div></th>
				<th scope="col"><div align="center">Section</div></th>

				<th scope="col"><div align="center">Customer name</div></th>
				<th scope="col"><div align="center">Approve</div></th>

				<th scope="col"><div align="center">Edit</div></th>

			</tr>

		</tr>
	<?php
	while ($objResult2= mysqli_fetch_assoc($query))
	{
	?>
		<tr>

			<td><div align="center"><?php echo $objResult2["username"];?></div></td>
			<td><div align="center"><?php echo $objResult2["section"];?></div></td>
			<td><div align="center"><?php echo $objResult2["company_name"];?></div></td>
				<?php
			if($objResult2["approve_stat"]=="approve")
			{
			 ?>
			<td align="center"><img src="images/approve.png" width="50"  height="50"></td>
			<?php
		}else{
			?>
			<td align="center"><img src="images/pending.png" width="50"  height="50"></td>
			<?php
		}
		?>


		<td align="center"><a href="fullview3.php?case_id=<?php echo $objResult2["case_id"];?>">Fullview</a></td>

	</tr>
		</tr>
	<?php
	}
	?>
	</table>
	<?php
$sql2 = "select * from report where approve_stat != 'approve'";
$query2 = mysqli_query($objCon, $sql2);
$total_record = mysqli_num_rows($query2);
$total_page = ceil($total_record / $perpage);
?>

<nav>
<center><ul class="pagination">
<li>
<a href="admin_page.php?page=1" aria-label="Previous">
<span aria-hidden="true">&laquo;</span>
</a>
</li >
<?php for($i=1;$i<=$total_page;$i++){ ?>
<li><a href="admin_page.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>|
<?php } ?>
<li>
<a href="admin_page.php?page=<?php echo $total_page;?>" aria-label="Next">
<span aria-hidden="true">&raquo;</span>
</a>
</li>
</ul>
</nav>

                                    </div> <!-- /.card-body -->
                                </div>
                            </div> <!-- /.row -->
                            <div class="card-body"></div>
                        </div>
                    </div><!-- /# column -->
                </div>
                <!--  /Traffic -->
                <div class="clearfix"></div>



								<?php


									include 'connect.php';
									$strSQL = "SELECT * FROM member WHERE u_id = '".$_SESSION['u_id']."' ";
									$objQuery = mysqli_query($objCon,$strSQL);
									$objResult = mysqli_fetch_array($objQuery);
								?>

								<!--  Form Report  -->
							<!--	<div class="row">
										<div class="col-lg-12">
												<div class="card">
														<div class="card-body">
																<h4 class="box-title">Form Report </h4>
														</div>
														<div class="row">
																<div class="col-lg-12">
																		<div class="card-body">
																				<!-- <canvas id="TrafficChart"></canvas>

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
																										<option value="cost saveing">Cost Saving</option>
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



																		                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Save Data</button>


																		                    </form>

																		            </div>
																		        </div>
																		    </div>
																			</div>
																		</div>



																		</div> <!-- /.card-body -->
															<!--	</div>
														</div> <!-- /.row -->
												<!--		<div class="card-body"></div>
												</div>
										</div><!-- /# column -->
							<!--	</div>  -->
								<!--  /Form Report -->
















                <!-- Calender   -->
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- <h4 class="box-title">Chandler</h4> -->




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
