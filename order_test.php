<?php
ที่มาส่งของ , มารับของ และมารับตัวอย่าง 
	$strSQL = "SELECT * FROM member";
	$objQuery = mysql_query($strSQL) or die ($strSQL);
?>
<select class="form-control" id="ddlsection" name="ddlsection">
 <?php

while($objResult = mysql_fetch_array($objQuery))
{
?>

<option value="savorysc"><?php echo $objResult["company"]; ?></option>
<option value="savorysc"><?php echo $objResult["company"]; ?></option>
<option value="savorysc"><?php echo $objResult["company"]; ?></option>
<option value="savorysc"><?php echo $objResult["company"]; ?></option>

</select>


  </tr>

  </form>
  <?php
}
  ?>
 </table>

 <?php
mysql_close($objConnect);
?>
