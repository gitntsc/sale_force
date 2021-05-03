<?php
include "connect.php";
date_default_timezone_set('Asia/Bangkok');
$strSQL4 = "SELECT * FROM tbl_event WHERE id=36";
$objQuery4 = mysqli_query($objCon,$strSQL4);
$objResult4 = mysqli_fetch_array($objQuery4,MYSQLI_ASSOC);
$timetest = $objResult4["start"];
echo $timetest.'<br>';


  $calculate =strtotime("now")-strtotime("$timetest");
$summary=floor($calculate / 86400); // 86400 มาจาก 24*360 (1วัน = 24 ชม.) 60*60*24
echo $summary;

?>
