<?php
$config = mysqli_connect("localhost","root","","ecommerce_2203");
if (!$config) {
	die('gagal terhubung ke mysql :'.mysqli_connect_error());
}
?>