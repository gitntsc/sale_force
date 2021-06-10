
<table class="table">																				<table class="table">
  <thead class="thead-dark">

		<tr>

		 <th width="98"> <div align="center">Example ID</div></th>
	 <th width="198"> <div align="center">รายการ</div></th>
		 <th width="198"> <div align="center">ใช้ในผลิตภัณฑ์</div></th>
	 <th width="198"> <div align="center">จำนวน</div></th>
   <th width="198"> <div align="center">วันที่</div></th>
   <th width="198"> <div align="center">ที่อยู่</div></th>
   <th width="198"> <div align="center">ชื่อผู้ติดต่อ</div></th>
   <th width="198"> <div align="center">โทรศัพท์</div></th>
   <th width="198"> <div align="center">แก้ไข</div></th>





	 </tr>
		<?php
		while($objResult5 = mysqli_fetch_array($objQuery5,MYSQLI_ASSOC))
		{
		?>
		<tr>

		 <td><div align="center"><?php echo $objResult5["ex_id"];?></div></td>
		 <td><div align="center"><?php echo $objResult5["product"];?></div></td>
		 <td><div align="center"><?php echo $objResult5["product_use"];?></div></td>
	 <td><div align="center"><?php echo $objResult5["amount"];?></div></td>
   <td><div align="center"><?php echo $objResult5["strdate"];?></div></td>
   <td><div align="center"><?php echo $objResult5["address_send"];?></div></td>
    <td><div align="center"><?php echo $objResult5["name_contact"];?></div></td>
     <td><div align="center"><?php echo $objResult5["Tel"];?></div></td>




	 <td align="center"><a href="pre_example_mgr.php?ex_id=<?php echo $objResult5["ex_id"];?>">Edit</a></td>




		</tr>
		  </tr>
		<?php
		}
		?>
		</table>