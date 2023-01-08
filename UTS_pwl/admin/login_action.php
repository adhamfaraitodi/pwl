<?php
session_start();
include("config.php");

$username = $_POST['txtusername'];
$password = $_POST['txtpassword'];

$sql="select nama_user from user where nama_user='$username' and pass_user='$password'";
$hasil=mysqli_query($config,$sql) or exit("error query :<b>".$sql."</b>");
if (mysqli_num_rows($hasil)>0) {
	$data = mysqli_fetch_array($hasil);
	$_SESSION['username'] =$data['nama_user'];
	header("Location:welcome.php");
	exit();
}else{
	?> <h2>Maaf..</h2>
	<p> username atau password salah. klik <a href="login.php">disini</a> untuk kembali login </p><?php 
}
?>

