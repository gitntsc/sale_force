<?php
$info = array(
    'host' => 'localhost',
    'user' => 'nutriti_sup',
    'password' => 'hWkS!}eU(E$3',
    'dbname' => 'nutriti_support'
);
$conn = mysqli_connect($info['host'], $info['user'], $info['password'], $info['dbname']) or die('Error connection database!');
mysqli_set_charset($conn, 'utf8');

