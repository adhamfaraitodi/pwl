<?php 
include "config.php";
$namabarang = $_POST["namabarang"];
$deskripsi = $_POST["deskripsi"];
$tanggal = $_POST["tanggal"];
$harga = $_POST["harga"];
$jml = $_POST["jml"];

$lokasifile = $_FILES['gambar']['tmp_name']; 
$namafile = $_FILES['gambar']['name']; 
 

$uploaddir = "uploads/"; 
$uploadfile = $uploaddir.$namafile; 
 
if(move_uploaded_file($lokasifile, $uploadfile)){
echo "Nama File : <b>$namafile</b> sukses di upload";

$sqli = "insert into barang(nama_barang,deskripsi_barang,harga_barang,jml_barang,foto_barang,tanggal) 
value('$namabarang','$deskripsi','$harga','$jml','$uploadfile','$tanggal');";
$hasil = mysqli_query($config, $sqli);
header('location:halamanbarang.php');
} else {
echo "File gagal disimpan";
}
?>
