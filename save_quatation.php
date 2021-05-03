<?php
session_start();
include 'connect.php';
$_POST['section'] = $_SESSION['section'];
$_POST['username'] = $_SESSION['username'];
$_POST['status'] = 'non approve';

echo $strSQL = "INSERT INTO qutation (attn,company,section,username,product1,amount1,produce1,price1,product2,amount2,produce2,price2,product3,amount3,produce3,price3,product4,amount4,produce4,price4,product5,amount5,produce5,price5,strdate,fax,email,kind_send,status,
day,xrate,lead_w,lead_d,op1,op2,op3)
VALUES ('".$_POST['attn']."','".$_POST['company']."','".$_POST['section']."','".$_POST['username']."','".$_POST['product1']."','".$_POST['amount1']."','".$_POST['produce1']."','".$_POST['price1']."','".$_POST['product2']."',
'".$_POST['amount2']."','".$_POST['produce2']."','".$_POST['price2']."','".$_POST['product3']."','".$_POST['amount3']."','".$_POST['produce3']."','".$_POST['price3']."','".$_POST['product4']."','".$_POST['amount4']."',
'".$_POST['produce4']."','".$_POST['price4']."','".$_POST['product5']."','".$_POST['amount5']."','".$_POST['produce5']."','".$_POST['price5']."','".$_POST['strdate']."','".$_POST['fax']."',
'".$_POST['email']."','".$_POST['kind_send']."','".$_POST['status']."','".$_POST['day']."','".$_POST['xrate']."','".$_POST['lead_w']."','".$_POST['lead_d']."','".$_POST['op1']."','".$_POST['op2']."',
'".$_POST['op3']."')";
$objQuery = mysqli_query($objCon,$strSQL);

date_default_timezone_set("Asia/Bangkok");
$time = date('Y-m-d H:i:s');
$_POST["time"] = $time;
$event = "save_quatation";
$_POST["event"] = $event;

echo
$strSQL2 = "INSERT INTO log_file (log_username,log_event,log_date) VALUES ('".$_POST["username"]."','".$_POST["event"]."','".$_POST["time"]."')";
$objQuery2 = mysqli_query($objCon,$strSQL2);




if($objQuery2)
{
  ?>

      <?php
  if($_SESSION["level"] == "admin"){

   ?>
   <script>
   alert('Complete');
   location.href='admin_page.php';
   </script>
   <?php

}elseif($_SESSION["level"] == "supervior"){
  ?>

  <script>
  alert('Complete');
  location.href='leader_page.php';
  </script>
  <?php

  }elseif($_SESSION["level"] == "manager"){
    ?>

    <script>
    alert('Complete');
    location.href='manager_page.php';
    </script>
    <?php
}elseif($_SESSION["level"] == "sec"){
  ?>

  <script>
  alert('Complete');
  location.href='sec_page.php';
  </script>
  <?php
}elseif($_SESSION["level"] == "officer"){
  ?>

  <script>
  alert('Complete');
  location.href='user_page.php';
  </script>
  <?php
}else{
  header("location:index.php");
  echo "not success";
}
}


mysqli_close($objCon);

 ?>
