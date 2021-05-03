<?php
	session_start();
	ob_start();
	function get_ip()
	{

	 $ip_address=$_SERVER['REMOTE_ADDR'];

	 if ($_SERVER['HTTP_X_FORWARDED_FOR']==NULL)
	{
	$ip_address=$_SERVER['REMOTE_ADDR'];
	}
	else
	{
	$ip_address=$ip_address."|".$_SERVER['HTTP_X_FORWARDED_FOR'];
				}
	return $ip_address;
	}
  include 'connect.php';
	$log_date  = date('Y-m-d H:i:s');
	$_POST["log_date"] = $log_date;
	$event = $txtUserid."  ".$txtUsername." Registered  ".$dep_name;
	$_POST["event"] = $event;
	$ip = get_ip();
	$_POST["ip"] = $ip;
	$sql2 ="INSERT INTO log_file (log_ip,log_event,log_date) values ('".$_POST["ip"]."','".$_POST["event"]."','".$_POST["log_date"]."')";
	$query2 = mysql_query($sql2);
	echo $sql;

  ?>
