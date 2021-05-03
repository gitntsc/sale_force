<?PHP

	include ("connect.php");

	$Name=$_POST['txtName'];
	$Draw=$_POST['Draw'];
	
	
	
	

    $StrInsert="UPDATE example SET Draw = '".$Draw."' where ex_id = '".$Name."'";
	$Query=mysqli_query($objCon,$StrInsert) or die (mysql_error());

	if($Query){
		$arr['Status']="Success";
		$arr['Msg']="บันทึกสำเร็จ";
	}

	echo json_encode($arr);

	

?>
