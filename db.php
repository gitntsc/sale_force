<?php
$conn = mysqli_connect("localhost","root","","sale_support") ;

if (!$conn)
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
