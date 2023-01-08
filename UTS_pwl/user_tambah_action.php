<?php
include "config.php";
$user =$_POST['username'];
$pass =$_POST['password'];
$kelamin =$_POST['kelamin'];

$sql="insert into user (nama_user,pass_user,email_user,jns_kelamin) values('$user','$pass','$email','$kelamin');";
$hasil =mysqli_query($config, $sql);
if($hasil){
	echo"data berhasil ditambahkan ";
}else{
	echo"data gagal disimpan";
}
?>
<br>kembali ke<a href="index.php">home</a>