<?php
session_start();
include "connect.php";

 $strSQL = "UPDATE member SET password = '".md5($_POST['txtPassword'])."', name = '".$_POST['txtName']."', surname = '".$_POST['txtSName']."'
,fname = '".$_POST['txtFName']."',leader = '".$_POST['txtlead']."',leader2 = '".$_POST['txtlead2']."',level = '".$_POST['ddllevel']."'
,company = '".$_POST['ddlcompany']."',section = '".$_POST['ddlsection']."' where u_id = '".$_SESSION['u_id']."'";
$objQuery = mysqli_query($objCon,$strSQL);
if($objQuery){
             ?>
              <script>
    alert('Complete');
    location.href='user.php';
    </script>
             <?php
}else{
              ?>
              <script>
              alert('Something Wrong');
              location.href='user.php';
              </script>
              <?php
}

?>