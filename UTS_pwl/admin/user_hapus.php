<?php
include "config.php";
$user =$_GET['nama_user'];

$sql="delete from user where nama_user='$user';";
$hasil =mysqli_query($config, $sql);
echo "<script> alert('data berhasil dihapus')</script>";
header("location:halamanuser.php")
?>
