<?php
session_start();
if (isset($_SESSION['username'])) {?>
	<h2>control panel</h2>
	<p>selamat datang
		"<?php echo $_SESSION['username'];?>".klik <a href="logout.php"> disini</a> untuk logout.</p> 
		<?php
		echo "<p align=center> Berikut ini adalah menu navigasi anda </p>";
		echo "<p align=center><a href='halamanbarang.php'> halaman barang</a> | <a href='halamanuser.php'> halaman user</a>";
}else{?>
	<h2> maaf ...</h2>
	<p> anda tidak berhak mengakses halaman ini. silakan <a href="login.php">login</a> terlebih dahulu</p> <?php 

}?>