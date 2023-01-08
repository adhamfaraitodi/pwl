<!DOCTYPE html>
<html>
<head>
<title>Data User</title>
</head>
<body>
<h3>Data User</h3>
<h4>nama akun <?php include "config.php";session_start(); isset($_SESSION['username']); echo $_SESSION['username'];  ?></h4>
<p>[<a href="user_tambah.php"> +tambah user </a>]
[<a href="logout.php"> logout </a>]</p>
<table width="720" border="1" cellpadding="5" cellspacing="0">
<tr>
<th width="30"> id user </th>
<th width="30"> Username </th>
<th width="30"> Password </th>
<th width="30"> E-Mail </th>
<th width="30"> jns kelamin </th>
<th width="150"> kelola </th>
</tr>
<?php
include "config.php";
$sql = "SELECT nama_user, pass_user,jns_kelamin, email_user FROM user ORDER BY id_user";
$hasil = mysqli_query($config, $sql);
$no = 1;
while ($data = mysqli_fetch_array($hasil)){
?>
<tr>
<td><?php echo $no ; ?></td>
<td><?php echo $data['nama_user'] ; ?></td>
<td><?php echo $data['pass_user'] ; ?></td>
<td><?php echo $data['email_user'] ; ?></td>
<td><?php echo $data['jns_kelamin'] ; ?></td>
<td align="center"><a href="user_edit.php?user_name=<?php echo$data['nama_user'];?>">edit</a> |
	<a href="user_hapus.php?nama_user=<?php echo$data['nama_user'];?>">hapus</a>
</tr>
<?php
$no++;
}
echo "</table>";
?>
</body>
</html>