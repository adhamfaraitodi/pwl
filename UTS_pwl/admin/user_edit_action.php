<?php
include "config.php";
$user =$_POST['username'];
$pass =$_POST['password'];
$email =$_POST['email'];
$kelamin =$_POST['kelamin'];

$sql="update user set pass_user ='$pass',email_user='$email',jns_kelamin='$kelamin' 
where nama_user='$user';";
$hasil =mysqli_query($config, $sql);
if($hasil){
	echo"data berhasil diubah ";
}else{
	echo"data gagal diubah";
}
?>
<br>kembali ke <a href="halamanuser.php">halaman user</a>