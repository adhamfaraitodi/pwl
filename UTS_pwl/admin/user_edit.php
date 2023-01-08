<!DOCTYPE html>
<html>
<head>
<title>Halaman Ubah Data</title>
</head>
<body>
<?php
include "config.php";

$user = $_GET['user_name'];
$sql = "SELECT * FROM user WHERE nama_user='$user';";
$hasil = mysqli_query($config, $sql);
$data = mysqli_fetch_assoc($hasil);
?>
<h3>Ubah Data Username</h3>
<form method="POST" action="user_edit_action.php">
<table>
<tr>
<td>Username</td>
<td>:</td>
<td>
<input type="text" value="<?php echo
$data['nama_user']?>" disabled>
<input type="text" name="username" value="<?php
echo $data['nama_user']?>" hidden>
</td>
</tr>
<tr>
<td>Password</td>
<td> : </td>
<td>
<input type="text" name="password" value="<?php
echo $data['pass_user']?>">
</td>
</tr>
<tr>
</td>
</tr>
<td>Email</td>
<td> : </td>
<td>
<input type="email" name="email" value="<?php echo
$data['email_user']?>">
</td>
</tr>
<tr>
<td>jenis kelamin</td>
<td> : </td>
<td>
<input type="radio" name="kelamin" value="<L"> Laki-laki
</td>
<td>
<input type="radio" name="kelamin" value="P">Perempuan
</td>
</tr>
<tr>
<td colspan=2>
<input type="submit" name="ubah" value="Simpan">
<input type="reset" value="Batal">
</td>
</tr>
</table>
</form>
</body>
</html>
