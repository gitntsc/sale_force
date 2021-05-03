<html>
<head>
<title>Editdata2</title>
</head>
<body>
<form action="editdatasave.php?u_id=<?php echo $_GET["u_id"];?>" name="frmEdit" method="post">
<?php
include 'connect.php';
$strSQL = "SELECT * FROM member WHERE u_id = '".$_GET["u_id"]."' ";
$objQuery = mysql_query($objCon,$strSQL);
$objResult = mysql_fetch_array($objQuery,MYSQLI_ASSOC);
if(!$objResult)
{
	echo "Not found Username=".$_GET["u_id"];
}
else
{
?>
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">Userid</div></th>
    <th width="98"> <div align="center">Name</div></th>
	<th width="198"> <div align="center">Surname</div></th>
    <th width="198"> <div align="center">Username</div></th>
	<th width="198"> <div align="center">Password</div></th>
	<th width="198"> <div align="center">Fname</div></th>
	<th width="97"> <div align="center">level</div></th>
    <th width="59"> <div align="center">Department</div></th>
    <th width="71"> <div align="center">Company</div></th>
	<th width="71"> <div align="center">Section</div></th>
  </tr>
  <tr>
    <td><div align="center"><input type="text" name="txtUserid" size="5" value="<?php echo $objResult["u_id"];?>"></div></td>
    <td><input type="text" name="txtName" size="20" value="<?php echo $objResult["name"];?>"></td>
	<td><input type="text" name="txtSName" size="20" value="<?php echo $objResult["surname"];?>"></td>
    <td><input type="text" name="txtUsername" size="20" value="<?php echo $objResult["username"];?>"></td>
    <td><div align="center"><input type="text" name="txtPassword" size="25" value="<?php echo $objResult["password"];?>"></div></td>
	<td><input type="text" name="txtFName" size="20" value="<?php echo $objResult["fname"];?>"></td>
	<td><input type="text" name="txtLevel" size="20" value="<?php echo $objResult["level"];?>"></td>
    <td align="right"><input type="text" name="txtDepartment" value="<?php echo $objResult["department"];?>"></td>
    <td align="right"><input type="text" name="txtCompany" size="5" value="<?php echo $objResult["company"];?>"></td>
	<td align="right"><input type="text" name="txtSection" size="5" value="<?php echo $objResult["section"];?>"></td>
  </tr>
  </table>
  <input type="submit" name="submit" value="submit">
  <?php
  }

  ?>
  </form>
</body>
</html>
