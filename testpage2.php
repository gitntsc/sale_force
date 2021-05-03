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
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>Capture Signature in the webpage with jQuery plugins</title>

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
	#signature,#prev{
		width: 300px;
		height: 200px;
	}
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
	$('#signature').signature();
	$('#clear').click(function() {
		Clear();
	});
	$('#json').click(function() {
		$.ajax({url : 'insert_draw.php',
			type : 'POST',
			data : 'txtName='+$('#txtName').val()+
				   '&Draw='+$('#signature').signature('toJSON'),
			datatype : 'json',
			success : function (result){
				var obj=jQuery.parseJSON(result);
				if(obj['Status']=='Success'){
					alert(obj['Msg']);
					Clear();
				}
			}
		});
		//alert($('#sig').signature('toJSON'));
	});

	function Clear(){
		$('#txtName').val('');
		$('#signature').signature('clear');
	}
});
</script>

<!-- Signature -->
<td><input type="text" id="txtName" placeholder="input you name"><br /></td>
<div id="signature"></div><br>

    </tr>
	<td colspan="2"><button id="clear">Clear</button>

</div>
</button> <button id="json">Insert</button></td>
<!-- Preview -->
<div id='prev'></div>
</body>
</html>
