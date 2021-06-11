<?php
session_start();
include 'connect.php';
 $strSQL = "UPDATE example SET ref_no = '".$_POST['ref_no']."' ,status = '".$_POST['status']."' where ex_id = '".$_GET['ex_id']."'";
$objQuery = mysqli_query($objCon,$strSQL);

if($objQuery){
    echo "<script>alert('บันทึกสำเร็จ');</script>";
    echo "<script>window.location.href='example_final.php'</script>";
}else{
   echo "<script>alert('เกิดข้อผิดพลาด');</script>";
echo "<script>window.location.href='example_final.php'</script>";
}

?>