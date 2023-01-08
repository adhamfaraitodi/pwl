<?php
session_start();
include "config.php";
$berita_id = $_POST["berita_id"];
$namabarang = $_POST["namabarang"];
$deskripsi = $_POST["deskripsi"];
$harga = $_POST["harga"];
$tanggal =$_POST["tanggal"];
$jml = $_POST["jml"];
$lokasifile = $_FILES['gambar']['tmp_name'];
 //nama file temporary yang akan disimpan di server
$namafile = $_FILES['gambar']['name'];
 //membaca nama file yang akan diupload
$uploaddir = "uploads/"; //folder penyimpanan berkas/file
$uploadfile = $uploaddir.$namafile;
 //menggabungkan nama folder dan nama file
if(!empty($lokasifile)){
$sql = "UPDATE barang SET nama_barang='$namabarang',
 deskripsi_barang='$deskripsi', harga_barang='$harga',
 jml_barang='$jml', foto_barang='$uploadfile',tanggal='$tanggal' WHERE
 id_barang='$berita_id'";
$hasil = mysqli_query($config, $sql);
if($hasil){
move_uploaded_file($lokasifile, $uploadfile);
echo "<script> alert('Data berhasil diubah')</script>";
echo "Nama File : <b>$namafile</b> sukses di
 upload<br/><br/>";
echo "<a href='halamanbarang.php'>kembali</a>";
} else {
echo "Data gagal disimpan";
}
} else {
$sql = "UPDATE barang SET nama_barang='$namabarang',
 deskripsi_barang='$deskripsi', jml_barang='$jml' WHERE
 id_barang=$berita_id";
$hasil = mysqli_query($config, $sql);
header('location:halamanbarang.php');
}
?>