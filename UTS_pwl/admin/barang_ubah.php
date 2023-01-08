<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Halaman Edit Barang</title>
</head>
<body>
<?php
include 'config.php';
$berita_id = $_GET['berita_id'];
$sql = "SELECT * FROM barang WHERE id_barang=$berita_id";
$hasil = mysqli_query($config, $sql);
$data = mysqli_fetch_assoc($hasil);
?>
<h2>Edit Barang</h2>
<form method="POST" action="barang_ubah_action.php"
enctype="multipart/form-data">
<table>
<tr><td width="100">nama barang</td>
<td>:</td>
<td>
<input type="hidden" name="berita_id"
 value="<?php echo $data['id_barang']?>">
<input type="text" name="namabarang" size="50"
 value="<?php echo
$data['nama_barang']?>"></td>
</tr>
<tr>
<td>deskripsi barang</td>
<td>:</td>
<td>
<input type="text" name="deskripsi" size="50"
 value="<?php echo
$data['deskripsi_barang']?>"></td>
</tr>
<tr>
<td>tanggal barang</td>
<td>:</td>
<td><input type="date" name="tanggal"></td>
</tr>
<tr>
<td>harga barang</td>
<td>:</td>
<td><input type="number" name="harga" size="60"></td>
</tr>
<tr>
<td>jumlah barang</td>
<td>:</td>
<td><input type="number" name="jml" size="60"></td>
</tr>
<tr>
<td>foto barang</td>
<td>:</td>
<td><input type="file" name="gambar"> </td>
</tr>
<tr>
<tr>
<td colspan="3"><input type="submit"
 name="simpan" value="simpan">
<input type="reset" value="reset">
</td>
</tr>
</table>
</form>
</body>
</html>