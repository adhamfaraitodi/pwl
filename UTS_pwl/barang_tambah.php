<?php
session_start(); //memulai session
?>
<!DOCTYPE html>
<html>
<head>
<title>Halaman Input barang</title>
</head>
<body>
<h2>Tambah barang</h2>
<form method="POST" action="barang_tambah_action.php"
enctype="multipart/form-data">
<table>
<tr>
<td width="150">nama barang</td>
<td>:</td>
<td><input type="text" name="namabarang" size="60"></td>
</tr>
<tr>
<td>deskripsi barang</td>
<td>:</td>
<td><textarea name="deskripsi" rows="6"
 cols="60"></textarea></td>
</tr>
<tr>
<td>tanggal barang dimasukan</td>
<td>:</td>
<td><input type="date" name="tanggal" ></td>
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
<td colspan="3">
<input type="submit" name="simpan" value="simpan">
<input type="reset" value="reset">
</td>
</tr>
</table>
</form>
</body>
</html>
