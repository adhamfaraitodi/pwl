<?php
include"config.php";
$id_beritanya =$_GET['id_barang'];

$sql ="delete from barang where id_barang='$id_beritanya'";
mysqli_query($config,$sql);
echo "<script> alert('data berhasil dihapus')</script>";
header("location:halamanberita.php");
?>