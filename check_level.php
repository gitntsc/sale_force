<?php
if($_SESSION['level']=="sec"){
include "main_sec.php";
}elseif($_SESSION['level']=="manager"){
include "main_mgr.php";
}elseif($_SESSION['level']=="supervisor"){
  include "main_leader.php";
}elseif($_SESSION['level']=="admin"){
  include "main_admin.php";
}elseif($_SESSION['level']=="saleco"){
  include "main_saleco.php";
}elseif($_SESSION['level']=="hr"){
  include "main_hr.php";
}elseif($_SESSION['level']=="account"){
  include "main_acc.php";
}else{
    include "main_user.php";
}
?>
