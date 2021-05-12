<?php
session_start();
if ($_SESSION['u_id'] == "") {
	echo "Please Login!";
	exit();
}


ini_set('display_errors', 0);
error_reporting(~0);

$ddlSelect = null;

if (isset($_POST["ddlSelect"])) {
	$ddlSelect = $_POST["ddlSelect"];
}
if (isset($_POST["ddlSelect2"])) {
	$ddlSelect = $_POST["ddlSelect2"];
}

include 'connect.php';
$strSQL = "SELECT * FROM member WHERE u_id = '" . $_SESSION['u_id'] . "' ";
$objQuery = mysqli_query($objCon, $strSQL);
$objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
?>







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
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sale Support NutritionSc</title>
	<meta name="description" content="Ela Admin - HTML5 Admin Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php header("Cache-Control: public, max-age=60, s-maxage=60"); ?>

	<link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
	<link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
	<link href="assets/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


	<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
	<link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

	<link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

	<style>
		#weatherWidget .currentDesc {
			color: #ffffff !important;
		}

		.traffic-chart {
			min-height: 335px;
		}

		#flotPie1 {
			height: 150px;
		}

		#flotPie1 td {
			padding: 3px;
		}

		#flotPie1 table {
			top: 20px !important;
			right: -10px !important;
		}

		.chart-container {
			display: table;
			min-width: 270px;
			text-align: left;
			padding-top: 10px;
			padding-bottom: 10px;
		}

		#flotLine5 {
			height: 105px;
		}

		#flotBarChart {
			height: 150px;
		}

		#cellPaiChart {
			height: 160px;
		}
	</style>
</head>

<body>
	<?php
	include "check_level.php";
	?>

	<!-- /#left-panel -->
	<!-- Right Panel -->

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
							<h4 class="box-title">Search Section</h4>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="card-body">
									<!-- <canvas id="TrafficChart"></canvas>   -->
									<div class="container">

										<center>
											<div class="form-group">
												<form name="frmSearch" method="post" action="<?= $_SERVER['SCRIPT_NAME']; ?>">


													<div class="form-row">
														<div class="form-group col-md-6">
															<input class="form-control" name="product" id="product" placeholder="ผลิตภัณฑ์">


														</div>
														<div class="form-group col-md-6">
															<input class="form-control" name="name_contact" id="name_contact" placeholder="ชื่อลูกค้า">
														</div>
													</div>

													<div class="form-group col-md-4">

														<label>Start Date</label><br>
														<input class="form-control" name="strdate" type="date" id="strdate" placeholder="เลือกวันที่">
													</div>
													<div class="form-group col-md-4">
														<label>End Date</label><br>
														<input class="form-control" name="lastdate" type="date" id="lastdate" placeholder="เลือกวันที่">

													</div>


													<br>
													<br>

											</div>
											<div class="form-row">
												<div class="form-group col-md-12">
													<label>กรุณากรอกวันที่ให้ครบ</label>
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-md-12">
													<button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Search</button>
												</div>
											</div>



											</form>

									</div>
									</center>
								</div>

								</table>

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
		if ($_POST['product'] == "" && $_POST['name_contact'] == "" && $_POST['strdate'] == "" && $_POST['lastdate'] == "") {
			include 'connect.php';
			echo $strSQL = "SELECT * FROM example where username = '" . $_SESSION['username'] . "' and appt1 !='null' and appt2 !='null' order by strdate desc";
			$objQuery2 = mysqli_query($objCon, $strSQL);

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
												<table class="table">
													<thead class="thead-dark">


														<tr>
															<th width="91">
																<div align="center">username</div>
															</th>
															<th width="98">
																<div align="center">section</div>
															</th>
															<th width="198">
																<div align="center">company</div>
															</th>
															<th width="198">
																<div align="center">name contact</div>
															</th>
															<th width="198">
																<div align="center">product</div>
															</th>
															<th width="198">
																<div align="center">Technicals</div>
															</th>
															<th width="97">
																<div align="center">view</div>
															</th>


														</tr>
														<?php
														while ($objResult2 = mysqli_fetch_array($objQuery2)) {
														?>
															<tr>
																<td>
																	<div align="center"><?php echo $objResult2["username"]; ?></div>
																</td>
																<td>
																	<div align="center"><?php echo $objResult2["section"]; ?></div>
																</td>
																<td>
																	<div align="center"><?php echo $objResult2["company"]; ?></div>
																</td>
																<td>
																	<div align="center"><?php echo $objResult2["name_contact"]; ?></div>
																</td>
																<td>
																	<div align="center"><?php echo $objResult2["product"]; ?></div>
																</td>
																<td>
																	<div align="center"><?php echo $objResult2["tech_name"]; ?></div>
																</td>



																<td align="center"><a href="check_signature.php?ex_id=<?php echo $objResult2["ex_id"]; ?>">view</a></td>

															</tr>
															</tr>
														<?php
														}

														?>
												</table>

												</tr>
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
	</div>
	<!--  /Form Report -->
	<div class="clearfix"></div>
<?php

		} elseif ($_POST['product'] !== "" && $_POST['name_contact'] == "" && $_POST['strdate'] == "" && $_POST['lastdate'] == "") {

			include 'connect.php';
			echo $strSQL3 = "SELECT * FROM example where username = '" . $_SESSION['username'] . "' and product like '%" . $_POST['product'] . "%' and appt1 !='null' and appt2 !='null' order by strdate desc";
			$objQuery3 = mysqli_query($objCon, $strSQL3);

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
										<table class="table">
											<thead class="thead-dark">


												<tr>

													<th width="91">
														<div align="center">username</div>
													</th>
													<th width="98">
														<div align="center">section</div>
													</th>
													<th width="198">
														<div align="center">company</div>
													</th>
													<th width="198">
														<div align="center">name contact</div>
													</th>
													<th width="198">
														<div align="center">product</div>
													</th>
													<th width="198">
														<div align="center">Technicals</div>
													</th>
													<th width="97">
														<div align="center">view</div>
													</th>

												</tr>
												<?php
												while ($objResult3 = mysqli_fetch_array($objQuery3)) {
												?>
													<tr>

														<td>
															<div align="center"><?php echo $objResult3["username"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["section"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["company"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["name_contact"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["product"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["tech_name"]; ?></div>
														</td>



														<td align="center"><a href="check_signature.php?ex_id=<?php echo $objResult3["ex_id"]; ?>">view</a></td>

													</tr>
													</tr>
												<?php
												}

												?>
										</table>

										</tr>
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
	</div>
	<!--  /Form Report -->
	<div class="clearfix"></div>
<?php

		} elseif ($_POST['product'] !== "" && $_POST['name_contact'] !== "" && $_POST['strdate'] == "" && $_POST['lastdate'] == "") {

			include 'connect.php';
			echo	 $strSQL3 = "SELECT * FROM example where username = '" . $_SESSION['username'] . "' and product like '%" . $_POST['product'] . "%' and name_contact like '%" . $_POST['name_contact'] . "%' 
			and appt1 !='null' and appt2 !='null' order by strdate desc";
			$objQuery3 = mysqli_query($objCon, $strSQL3);

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
										<table class="table">
											<thead class="thead-dark">


												<tr>

													<th width="91">
														<div align="center">username</div>
													</th>
													<th width="98">
														<div align="center">section</div>
													</th>
													<th width="198">
														<div align="center">company</div>
													</th>
													<th width="198">
														<div align="center">name contact</div>
													</th>
													<th width="198">
														<div align="center">product</div>
													</th>
													<th width="198">
														<div align="center">Technicals</div>
													</th>
													<th width="97">
														<div align="center">view</div>
													</th>

												</tr>
												<?php
												while ($objResult3 = mysqli_fetch_array($objQuery3)) {
												?>
													<tr>

														<td>
															<div align="center"><?php echo $objResult3["username"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["section"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["company"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["name_contact"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["product"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["tech_name"]; ?></div>
														</td>



														<td align="center"><a href="check_signature.php?ex_id=<?php echo $objResult3["ex_id"]; ?>">view</a></td>

													</tr>
													</tr>
												<?php
												}

												?>
										</table>

										</tr>
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
	</div>
	<!--  /Form Report -->
	<div class="clearfix"></div>
<?php

		} elseif ($_POST['product'] == "" && $_POST['name_contact'] !== "" && $_POST['strdate'] == "" && $_POST['lastdate'] == "") {

			include 'connect.php';
			echo $strSQL3 = "SELECT * FROM example where username= '" . $_SESSION['username'] . "' and name_contact like '%" . $_POST['name_contact'] . "%' 
			and appt1 !='null' and appt2 !='null' order by strdate desc";
			$objQuery3 = mysqli_query($objCon, $strSQL3);

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
										<table class="table">
											<thead class="thead-dark">


												<tr>

													<th width="91">
														<div align="center">username</div>
													</th>
													<th width="98">
														<div align="center">section</div>
													</th>
													<th width="198">
														<div align="center">company</div>
													</th>
													<th width="198">
														<div align="center">name contact</div>
													</th>
													<th width="198">
														<div align="center">product</div>
													</th>
													<th width="198">
														<div align="center">Technicals</div>
													</th>
													<th width="97">
														<div align="center">view</div>
													</th>

												</tr>
												<?php
												while ($objResult3 = mysqli_fetch_array($objQuery3)) {
												?>
													<tr>

														<td>
															<div align="center"><?php echo $objResult3["username"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["section"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["company"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["name_contact"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["product"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["tech_name"]; ?></div>
														</td>



														<td align="center"><a href="check_signature.php?ex_id=<?php echo $objResult3["ex_id"]; ?>">view</a></td>

													</tr>
													</tr>
												<?php
												}

												?>
										</table>

										</tr>
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
	</div>
	<!--  /Form Report -->
	<div class="clearfix"></div>
<?php

		} elseif ($_POST['product'] == "" && $_POST['name_contact'] !== "" && $_POST['strdate'] == "" && $_POST['lastdate'] == "") {

			include 'connect.php';
			echo $strSQL3 = "SELECT * FROM example where  username = '" . $_SESSION['username'] . "'  and name_contact like '%" . $_POST['name_contact'] . "%' 
			and appt1 !='null' and appt2 !='null' order by strdate desc";
			$objQuery3 = mysqli_query($objCon, $strSQL3);

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
										<table class="table">
											<thead class="thead-dark">


												<tr>

													<th width="91">
														<div align="center">username</div>
													</th>
													<th width="98">
														<div align="center">section</div>
													</th>
													<th width="198">
														<div align="center">company</div>
													</th>
													<th width="198">
														<div align="center">name contact</div>
													</th>
													<th width="198">
														<div align="center">product</div>
													</th>
													<th width="198">
														<div align="center">Technicals</div>
													</th>
													<th width="97">
														<div align="center">view</div>
													</th>

												</tr>
												<?php
												while ($objResult3 = mysqli_fetch_array($objQuery3)) {
												?>
													<tr>

														<td>
															<div align="center"><?php echo $objResult3["username"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["section"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["company"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["name_contact"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["product"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["tech_name"]; ?></div>
														</td>



														<td align="center"><a href="check_signature.php?ex_id=<?php echo $objResult3["ex_id"]; ?>">view</a></td>

													</tr>
													</tr>
												<?php
												}

												?>
										</table>

										</tr>
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
	</div>
	<!--  /Form Report -->
	<div class="clearfix"></div>
<?php

		} elseif ($_POST['product'] !== "" && $_POST['name_contact'] == "" && $_POST['strdate'] !== "" && $_POST['lastdate'] !== "") {

			include 'connect.php';
			echo $strSQL3 = "SELECT * FROM example where username = '" . $_SESSION['username'] . "' and product like '%" . $_POST['product'] . "%' and 
strdate between '" . $_POST['strdate'] . "' and '" . $_POST['lastdate'] . "' and appt1 !='null' and appt2 !='null' order by strdate desc";
			$objQuery3 = mysqli_query($objCon, $strSQL3);

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
										<table class="table">
											<thead class="thead-dark">


												<tr>

													<th width="91">
														<div align="center">username</div>
													</th>
													<th width="98">
														<div align="center">section</div>
													</th>
													<th width="198">
														<div align="center">company</div>
													</th>
													<th width="198">
														<div align="center">name contact</div>
													</th>
													<th width="198">
														<div align="center">product</div>
													</th>
													<th width="198">
														<div align="center">Technicals</div>
													</th>
													<th width="97">
														<div align="center">view</div>
													</th>

												</tr>
												<?php
												while ($objResult3 = mysqli_fetch_array($objQuery3)) {
												?>
													<tr>

														<td>
															<div align="center"><?php echo $objResult3["username"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["section"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["company"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["name_contact"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["product"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["tech_name"]; ?></div>
														</td>



														<td align="center"><a href="check_signature.php?ex_id=<?php echo $objResult3["ex_id"]; ?>">view</a></td>

													</tr>
													</tr>
												<?php
												}

												?>
										</table>

										</tr>
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
	</div>
	<!--  /Form Report -->
	<div class="clearfix"></div>
<?php

		} elseif ($_POST['product'] == "" && $_POST['name_contact'] !== "" && $_POST['strdate'] !== "" && $_POST['lastdate'] !== "") {

			include 'connect.php';
			echo $strSQL3 = "SELECT * FROM example where username = '" . $_SESSION['username'] . "' and name_contact like '%" . $_POST['name_contact'] . "%' and 
strdate between '" . $_POST['strdate'] . "' and '" . $_POST['lastdate'] . "' and appt1 !='null' and appt2 !='null' order by strdate desc";
			$objQuery3 = mysqli_query($objCon, $strSQL3);

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
										<table class="table">
											<thead class="thead-dark">


												<tr>

													<th width="91">
														<div align="center">username</div>
													</th>
													<th width="98">
														<div align="center">section</div>
													</th>
													<th width="198">
														<div align="center">company</div>
													</th>
													<th width="198">
														<div align="center">name contact</div>
													</th>
													<th width="198">
														<div align="center">product</div>
													</th>
													<th width="198">
														<div align="center">Technicals</div>
													</th>
													<th width="97">
														<div align="center">view</div>
													</th>

												</tr>
												<?php
												while ($objResult3 = mysqli_fetch_array($objQuery3)) {
												?>
													<tr>

														<td>
															<div align="center"><?php echo $objResult3["username"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["section"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["company"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["name_contact"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["product"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["tech_name"]; ?></div>
														</td>



														<td align="center"><a href="check_signature.php?ex_id=<?php echo $objResult3["ex_id"]; ?>">view</a></td>

													</tr>
													</tr>
												<?php
												}

												?>
										</table>

										</tr>
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
	</div>
	<!--  /Form Report -->
	<div class="clearfix"></div>
<?php

		} elseif ($_POST['product'] !== "" && $_POST['name_contact'] !== "" && $_POST['strdate'] !== "" && $_POST['lastdate'] !== "") {

			include 'connect.php';
			echo	 $strSQL3 = "SELECT * FROM example where username = '" . $_SESSION['username'] . "' and  product like '%" . $_POST['product'] . "%' and name_contact like '%" . $_POST['name_contact'] . "%' 
and strdate between '" . $_POST['strdate'] . "' and '" . $_POST['lastdate'] . "' and appt1 !='null' and appt2 !='null' order by strdate desc";
			$objQuery3 = mysqli_query($objCon, $strSQL3);

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
										<table class="table">
											<thead class="thead-dark">


												<tr>

													<th width="91">
														<div align="center">username</div>
													</th>
													<th width="98">
														<div align="center">section</div>
													</th>
													<th width="198">
														<div align="center">company</div>
													</th>
													<th width="198">
														<div align="center">name contact</div>
													</th>
													<th width="198">
														<div align="center">product</div>
													</th>
													<th width="198">
														<div align="center">Technicals</div>
													</th>
													<th width="97">
														<div align="center">view</div>
													</th>

												</tr>
												<?php
												while ($objResult3 = mysqli_fetch_array($objQuery3)) {
												?>
													<tr>

														<td>
															<div align="center"><?php echo $objResult3["username"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["section"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["company"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["name_contact"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["product"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["tech_name"]; ?></div>
														</td>



														<td align="center"><a href="check_signature.php?ex_id=<?php echo $objResult3["ex_id"]; ?>">view</a></td>

													</tr>
													</tr>
												<?php
												}

												?>
										</table>

										</tr>
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
	</div>
	<!--  /Form Report -->
	<div class="clearfix"></div>
<?php

		} else {

			include 'connect.php';
			echo  $strSQL3 = "SELECT * FROM example where  username = '" . $_POST['name'] . "' and product = '" . $_POST['product'] . "' 
and name_contact = '" . $_POST['name_contact'] . "' and strdate between '" . $_POST['strdate'] . "' and '" . $_POST['lastdate'] . "' 
and appt1 !='null' and appt2 !='null' order by strdate desc";
			$objQuery3 = mysqli_query($objCon, $strSQL3);

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
										<table class="table">
											<thead class="thead-dark">


												<tr>

													<th width="91">
														<div align="center">username</div>
													</th>
													<th width="98">
														<div align="center">section</div>
													</th>
													<th width="198">
														<div align="center">company</div>
													</th>
													<th width="198">
														<div align="center">name contact</div>
													</th>
													<th width="198">
														<div align="center">product</div>
													</th>
													<th width="198">
														<div align="center">Technicals</div>
													</th>
													<th width="97">
														<div align="center">view</div>
													</th>

												</tr>
												<?php
												while ($objResult3 = mysqli_fetch_array($objQuery3)) {
												?>
													<tr>

														<td>
															<div align="center"><?php echo $objResult3["username"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["section"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["company"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["name_contact"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["product"]; ?></div>
														</td>
														<td>
															<div align="center"><?php echo $objResult3["tech_name"]; ?></div>
														</td>



														<td align="center"><a href="check_signature.php?ex_id=<?php echo $objResult3["ex_id"]; ?>">view</a></td>

													</tr>
													</tr>
												<?php
												}

												?>
										</table>

										</tr>
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
	</div>
	<!--  /Form Report -->
	<div class="clearfix"></div>
<?php

		}


?>

















<!-- Calender Chart Weather  -->

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
<script src="assets/jquery.min.js"></script>
<script src="assets/script.js"></script>

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
		var piedata = [{
				label: "Desktop visits",
				data: [
					[1, 32]
				],
				color: '#5c6bc0'
			},
			{
				label: "Tab visits",
				data: [
					[1, 33]
				],
				color: '#ef5350'
			},
			{
				label: "Mobile visits",
				data: [
					[1, 35]
				],
				color: '#66bb6a'
			}
		];

		$.plot('#flotPie1', piedata, {
			series: {
				pie: {
					show: true,
					radius: 1,
					innerRadius: 0.65,
					label: {
						show: true,
						radius: 2 / 3,
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
		var cellPaiChart = [{
				label: "Direct Sell",
				data: [
					[1, 65]
				],
				color: '#5b83de'
			},
			{
				label: "Channel Sell",
				data: [
					[1, 35]
				],
				color: '#00bfa5'
			}
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
			},
			grid: {
				hoverable: true,
				clickable: true
			}

		});
		// cellPaiChart End
		// Line Chart  #flotLine5
		var newCust = [
			[0, 3],
			[1, 5],
			[2, 4],
			[3, 7],
			[4, 9],
			[5, 3],
			[6, 6],
			[7, 4],
			[8, 10]
		];

		var plot = $.plot($('#flotLine5'), [{
			data: newCust,
			label: 'New Data Flow',
			color: '#fff'
		}], {
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
					[0, 18000, 35000, 25000, 22000, 0],
					[0, 33000, 15000, 20000, 15000, 300],
					[0, 15000, 28000, 15000, 30000, 5000]
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
				if (data.type === 'line' || data.type === 'area') {
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
			var ctx = document.getElementById("TrafficChart");
			ctx.height = 150;
			var myChart = new Chart(ctx, {
				type: 'line',
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
					datasets: [{
							label: "Visit",
							borderColor: "rgba(4, 73, 203,.09)",
							borderWidth: "1",
							backgroundColor: "rgba(4, 73, 203,.5)",
							data: [0, 2900, 5000, 3300, 6000, 3250, 0]
						},
						{
							label: "Bounce",
							borderColor: "rgba(245, 23, 66, 0.9)",
							borderWidth: "1",
							backgroundColor: "rgba(245, 23, 66,.5)",
							pointHighlightStroke: "rgba(245, 23, 66,.5)",
							data: [0, 4200, 4500, 1600, 4200, 1500, 4000]
						},
						{
							label: "Targeted",
							borderColor: "rgba(40, 169, 46, 0.9)",
							borderWidth: "1",
							backgroundColor: "rgba(40, 169, 46, .5)",
							pointHighlightStroke: "rgba(40, 169, 46,.5)",
							data: [1000, 5200, 3600, 2600, 4200, 5300, 0]
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
			});
		}
		//Traffic chart chart-js  End
		// Bar Chart #flotBarChart
		$.plot("#flotBarChart", [{
			data: [
				[0, 18],
				[2, 8],
				[4, 5],
				[6, 13],
				[8, 5],
				[10, 7],
				[12, 4],
				[14, 6],
				[16, 15],
				[18, 9],
				[20, 17],
				[22, 7],
				[24, 4],
				[26, 9],
				[28, 11]
			],
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