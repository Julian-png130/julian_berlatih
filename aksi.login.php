<?php
include 'koneksi.php';
$username = $_POST('user');
$password = $_POST('password');

$data =mysqli_query ($koneksi,"SELECT * FROM amggota where username ='$username' AND password='$pasword'");


$cek mysqli_num_rows($data);
IF ($cek> 0)(
    header("location :admin.php")
)else(
    header("location : ")
)
?>