<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Data Barang</title>
</head>
<body>
<p align="left">Anda Login Sebagai "<?php include "config.php"; isset($_SESSION['username']); echo $_SESSION['username']; ?>" | Klik <a
href="logout.php">disini</a> untuk logout.</p>
<h3>Data Barang</h3>
<p><a href="barang_tambah.php">[+Tambah Barang]</a> </p>
<table width='900' border='1' cellpadding="5" cellspacing="0">
<tr>
<th width='30'>No.</th>
<th width='100'>nama barang</th>
<th width='300'>deskripsi barang</th>
<th width='100'>tanggal barang</th>
<th width='200'>harga barang</th>
<th width='100'>jml barang</th>
<th width='350'>foto barang</th>
<th width="100">Kelola</th>
</tr>
<?php
include "config.php";
$sql="SELECT id_barang, nama_barang, deskripsi_barang,tanggal,
harga_barang, jml_barang,foto_barang FROM barang ORDER BY id_barang";
$hasil = mysqli_query($config, $sql);
$no=1;
while ($data=mysqli_fetch_array($hasil)){
?>
<tr>
<td><?php echo $no;?></td>
<td><?php echo $data['nama_barang']?></td>
<td><?php echo $data['deskripsi_barang']?></td>
<td><?php echo $data['tanggal']?></td>
<td><?php echo $data['harga_barang']?></td>
<td><?php echo $data['jml_barang']?></td>
<td><img src="<?php echo $data['foto_barang']?>"
width="100%"></td>
<td align="center">
<a href="barang_ubah.php?berita_id=<?php echo
 $data['id_barang'];?>">Edit</a> |
<a href="barang_hapus.php?berita_id=<?php echo
 $data['id_barang'];?>">Hapus</a>
</td>
</tr>
<?php
 $no++;
}
echo "</table>";
?>
</body>
</html>