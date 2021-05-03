<?php
header("Content-type: application/vnd.ms-excel");
// header('Content-type: application/csv'); //*** CSV ***//
header("Content-Disposition: attachment; filename=mydata.xls");
?>
<html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">
<body>
<head>
<meta http-equiv="Content-type" content="text/html;charset=utf-8" />
<?php
include "connect.php";
 $strSQL4 = "SELECT * FROM section WHERE id = '".$_POST["ddlSelect"]."'";
$objQuery4 = mysqli_query($objCon,$strSQL4);
$objResult4 = mysqli_fetch_array($objQuery4,MYSQLI_ASSOC);
$_POST["ddlSelecta"]=$objResult4['name_th'];

 $strSQL5 = "SELECT * FROM employee WHERE id = '".$_POST["ddlSelect2"]."'";
$objQuery5 = mysqli_query($objCon,$strSQL5);
$objResult5 = mysqli_fetch_array($objQuery5,MYSQLI_ASSOC);
$_POST["ddlSelectb"]=$objResult5['name_th'];
?>

<?php
  include "connect.php";
 $strSQL3 = "SELECT * FROM report WHERE section LIKE '%".$_POST["ddlSelecta"]."%' and username LIKE '%".$_POST["ddlSelectb"]."%'
      and strdate Between '".$_POST["strdate"]."' and '".$_POST["lastdate"]."'";
      $objQuery3 = mysqli_query($objCon,$strSQL3);

?>
<table width="600" border="1">
<tr>
    <th width="91"> <div align="center">case_id</div></th>
	<th width="91"> <div align="center">username</div></th>
    <th width="98"> <div align="center">section</div></th>
    <th width="198"> <div align="center">campany name</div></th>
    <th width="97"> <div align="center">cusname</div></th>
    <th width="59"> <div align="center">cuslevel</div></th>
    <th width="71"> <div align="center">approver</div></th>
	<th width="71"> <div align="center">personality</div></th>
	<th width="71"> <div align="center">Start Date</div></th>
	<th width="71"> <div align="center">Contact</div></th>
	<th width="71"> <div align="center">detail</div></th>
	<th width="71"> <div align="center">customer project</div></th>
	<th width="71"> <div align="center">volume</div></th>
	<th width="71"> <div align="center">project</div></th>
	<th width="71"> <div align="center">source</div></th>
	<th width="71"> <div align="center">cost</div></th>
	<th width="71"> <div align="center">offer</div></th>
  <th width="71"> <div align="center">approve stat</div></th>
  <th width="71"> <div align="center">ค่าใช้จ่ายการเดินทาง/div></th>
    <th width="71"> <div align="center">ค่าใช้จ่ายค่าที่พัก</div></th>
      <th width="71"> <div align="center">อื่นๆ</div></th>
      <th width="71"> <div align="center">Creat Time</div></th>

</tr>
<?php
	while($objResult3 = mysqli_fetch_array($objQuery3))
	{
?>
	<td><div align="center"><?php echo $objResult3["case_id"];?></div></td>
	<td><?php echo $objResult3["username"];?></td>
	<td><?php echo $objResult3["section"];?></td>
    <td><?php echo $objResult3["company_name"];?></td>
	<td><?php echo $objResult3["cus_name"];?></td>
    <td><?php echo $objResult3["cus_level"];?></td>
	<td><?php echo $objResult3["approver"];?></td>
	<td><?php echo $objResult3["personality"];?></td>
	<td><?php echo $objResult3["strdate"];?></td>
	<td><?php echo $objResult3["contact"];?></td>
	<td><?php echo $objResult3["detail"];?></td>
	<td><?php echo $objResult3["cus_project"];?></td>
    <td><div align="center"><?php echo $objResult3["volume"];?></div></td>
    <td><?php echo $objResult3["com_pro"];?></td>
    <td><?php echo $objResult3["com_source"];?></td>
	<td><?php echo $objResult3["com_cost"];?></td>
  <td><?php echo $objResult3["appt1"];?></td>
  <td><?php echo $objResult3["approve_stat"];?></td>
  <td><?php echo $objResult3["exp_cost"];?></td>
  <td><?php echo $objResult3["rest_cost"];?></td>
    <td><?php echo $objResult3["other_cost"];?></td>
    <td><?php echo $objResult3["crt_time"];?></td>
	</tr>
<?php
}
?>
</table>
<?php
	mysqli_close($objCon);
?>
</head>
</body>
</html>
