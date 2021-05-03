<?php
require_once "db.php";

$title = isset($_POST['title']) ? $_POST['title'] : "";
$detail = isset($_POST['detail']) ? $_POST['detail'] : "";
$start = isset($_POST['start']) ? $_POST['start'] : "";
$end = isset($_POST['end']) ? $_POST['end'] : "";

echo $sqlInsert = "INSERT INTO tbl_event (title,detail,start,end) VALUES ('".$title."','".$detail."','".$start."','".$end ."')";

$result = mysqli_query($conn, $sqlInsert);

if (! $result) {
    $result = mysqli_error($conn);
}
?>
