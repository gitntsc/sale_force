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
	$ex_id = $_GET["ex_id"];
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>Sale Support NutritionSc</title>
    
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<link href="jquery-ui.css" rel="stylesheet">
<link href="jquery.signature/jquery.signature.css" rel="stylesheet">
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
    <style>
.kbw-signature { width: 300px; height:200px;}
</style>

<!--[if IE]>
<script src="excanvas.js"></script>
<![endif]-->
<script src="jquery-3.0.0.js"></script>
<script src="jquery-ui.js"></script>
<script src="jquery.signature/jquery.signature.js"></script>
<script src="jquery.ui.touch-punch.js"></script>
<script>
$(function() {
    $('textarea').each(function(index, element) {
        $(this).hide();
    });

	$('button').click(function() { 
    	var rel=$(this).attr('rel');
		$('#redrawSignature').signature('draw', $('#signatureJSON'+rel).val()); 
       
	}); 
	
 
	$('#redrawSignature').signature({disabled: true}); 

});
</script>
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
<?php
$strSQL10 = "SELECT * FROM member where username = '".$_SESSION['username']."'";
$objQuery10 = mysqli_query($objCon,$strSQL10);
$objResult10 = mysqli_fetch_array($objQuery10,MYSQLI_ASSOC);

 ?>

<?php
 $strSQL21 = "SELECT * FROM example where ex_id = '".$_GET['ex_id']."'";
$objQuery21 = mysqli_query($objCon,$strSQL21);
$objResult21 = mysqli_fetch_array($objQuery21,MYSQLI_ASSOC);

?>
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
                    
											<center><h3><label>F-MK-008 R03</label></h3></center>
												<center><h4><label>ใบขอตัวอย่าง</label></h4></center>
												<div class="row">
  												<div class="col-xs-6 col-sm-4">
															<label>เจ้าหน้าที่ :</label> <?php echo $objResult21['username'];?>
													</div>
  												<div class="col-xs-6 col-sm-4">
															<label>หัวหน้า/ผู้บังคับบัญชา : <?php echo $objResult10['leader'];?></label>
													</div>

  												<div class="clearfix visible-xs-block"></div>
                          <div class="col-xs-6 col-sm-4">
														<label> ทีมขาย : <?php echo $objResult21['section'];?> </label>
													</div>
												</div><br>
													<div class="row">
														<div class="col-xs-6 col-sm-4">
														<label> บริษัท : <?php echo $objResult10['company'];?>  </label>
													</div>
												</div><br>
												<div class = "row">
												<div class="col-xs12 col-sm-8">
												<label>สถานที่ส่งตัวอย่าง : </label><input   class="form-control" size="50" name="address_send" id="addres_send" disabled value = "<?php echo $objResult21['address_send'];?>"></input>
												</div>
												<div class="col-xs12 col-sm-4">
												<label>tel : </label><input   class="form-control" size="50" name="Tel" id="Tel" value disabled = "<?php echo $objResult21['Tel'];?>"></input>
												</div>
											</div>
                                            <br>




											<table class="table table-striped">

										<thead>
											<tr>
												
												<th scope="col" class="text-center">วันเดือนปี</th>
												<th scope="col" class="text-center">รายการตัวอย่าง</th>
												<th scope="col" class="text-center">จำนวน</th>
												<th scope="col"class="text-center">Reference No.</th>
												<th scope="col" class="text-center">ใช้ในผลิตภัณฑ์</th>
                                                <th scope="col" class="text-center">ชื่อผู้ติดต่อ</th>
								                <th scope="col" class="text-center">นักวิชาการ</th>



											</tr>
										</thead>
										<tbody>
                                        
											<tr>
												
												<td><input type="date" name="strdate1" id="strdate" size="5" disabled value="<?php echo $objResult21['strdate'];?>"></td>
												<td><input name="product" class="form-control" type="text" id="product" size="20" disabled value="<?php echo $objResult21['product'];?>"></td>
												<td><input name="amount" class="form-control" type="text" id="amount" size="3" disabled value="<?php echo $objResult21['amount'];?>"></td>
												<td><input name="ref_no" class="form-control" type="text" id="ref_no" size="3"  value="<?php echo $objResult21['ref_no'];?>"></td>
												<td><input name="product_use" class="form-control" type="text" id="product_use" disabled value="<?php echo $objResult21['product_use'];?>"></td>
                        <td><input name="name_contact1" class="form-control" type="text" id="name_contact" size="10" disabled value="<?php echo $objResult21['name_contact'];?>"></td>
												
												<?php
                                                $strSQL20 = "SELECT * FROM member where section = 'tech'";
                                                $objQuery20 = mysqli_query($objCon,$strSQL20);

                                                ?>
											    <td><select name="tech_name" id="tech_name" class="form-control" disabled>
                          <option value="<?php echo $objResult21['tech_name'];?>"><?php echo $objResult21['tech_name'];?></option>
												<?php while($result = mysqli_fetch_assoc($objQuery20)): ?>
										        <option  value="<?=$result['username']?>"><?=$result['username']?></option>
												<?php endwhile; ?>
												</select></td>
																	
                                                		
											</tr>
										</tbody>


										
											
									
									</table>
                  <br>
                  <div class="form-group">
						
                        <?PHP
   	$strSelect="SELECT * FROM example where ex_id = '".$_GET['ex_id']."'";
		$Query=mysqli_query($objCon,$strSelect) or die (mysql_error());
		$i=0;
		while($Result=mysqli_fetch_array($Query)){
		$i++;
	?>
	<center><div id="redrawSignature"></div></center>
	   <center><td><button id="redrawButton" rel="<?=$i?>">กดเพื่อดูลายเซ็น</button>
	<textarea id="signatureJSON<?=$i;?>"><?=$Result['Draw'];?></textarea></td></center>
    
     
		
    </tr>
    <?PHP } ?>
</table>

</table>

<center><h3><a href="javascript:history.back();">Back</h3></center>



                   

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
