<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>
<?php
$ddlSelect = $_POST["ddlSelect"];

?>
<?

	include ='connect.php';
	// Search By Name or Email
	$strSQL = "SELECT * FROM report WHERE $ddlSelect LIKE ";

	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	?>
	<table width="600" border="1">
    <tr>
      <th width="91"> <div align="center">Case ID</div></th>
      <th width="98"> <div align="center">Username</div></th>
    <th width="198"> <div align="center">Section</div></th>
      <th width="198"> <div align="center">Company Name</div></th>
    <th width="198"> <div align="center">Customer Name</div></th>
    <th width="198"> <div align="center">Customer Level</div></th>
    <th width="198"> <div align="center">Status</div></th>
    <th width="97"> <div align="center">Contact</div></th>
     <th width="71"> <div align="center">Customer Project</div></th>
    <th width="71"> <div align="center">Fullview</div></th>

    </tr>
	<?
	while($objResult2 = mysql_fetch_array($objQuery))
	{
	?>
  <tr>
    <td><div align="center"><?php echo $objResult2["case_id"];?></div></td>
    <td><div align="center"><?php echo $objResult2["username"];?></div></td>
    <td><div align="center"><?php echo $objResult2["section"];?></div></td>
    <td><div align="center"><?php echo $objResult2["company_name"];?></div></td>
  <td><div align="center"><?php echo $objResult2["cus_name"];?></div></td>
  <td><div align="center"><?php echo $objResult2["cus_level"];?></div></td>
  <td><div align="center"><?php echo $objResult2["status"];?></div></td>
  <td align="center"><?php echo $objResult2["contact"];?></td>
    <td align="center"><?php echo $objResult2["cus_project"];?></td>
  <td align="center"><a href="fullview3.php?case_id=<?php echo $objResult2["case_id"];?>">Fullview</a></td>

</tr>
	<?
	}
	?>
	</table>
	<?
	
?>
</body>
</html>
