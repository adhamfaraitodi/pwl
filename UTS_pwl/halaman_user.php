<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        <title>E-commerce</title>
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/linearicons.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/bootsnav.css" >	
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        
    </head>
	
	<body>
		<?php
 include "config.php";
 $sql = "SELECT nama_barang,deskripsi_barang, harga_barang,jml_barang,foto_barang FROM barang WHERE id_barang = 1";
 $hasil = mysqli_query($config, $sql);
 $data=mysqli_fetch_array($hasil);
 $sql1 = "SELECT nama_barang,deskripsi_barang, harga_barang,jml_barang,foto_barang FROM barang WHERE id_barang = 2";
 $hasil1 = mysqli_query($config, $sql1);
 $data1=mysqli_fetch_array($hasil1);
  $sql2 = "SELECT nama_barang,deskripsi_barang, harga_barang,jml_barang,foto_barang FROM barang WHERE id_barang = 3";
 $hasil2 = mysqli_query($config, $sql2);
 $data2=mysqli_fetch_array($hasil2);

 ?>

		<header id="home" class="welcome-hero">

			<div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
				<!--/.carousel-indicator -->
				 <ol class="carousel-indicators">
					<li data-target="#header-carousel" data-slide-to="0" class="active"><span class="small-circle"></span></li>
					<li data-target="#header-carousel" data-slide-to="1"><span class="small-circle"></span></li>
					
				</ol><!-- /ol-->
				<!--/.carousel-indicator -->

				<!--/.carousel-inner -->
				<div class="carousel-inner" role="listbox">
					<!-- .item -->
					<div class="item active">
						<div class="single-slide-item slide1">
							<div class="container">
								<div class="welcome-hero-content">
									<div class="row">
										<div class="col-sm-7">
											<div class="single-welcome-hero">
												<div class="welcome-hero-txt">
													
													<h4>Sikat Gigi Terbaru</h4>
													<h2><?php echo $data['nama_barang']; ?></h2>
													<p>
														<?php echo $data['deskripsi_barang']; ?>
													</p>
													<div class="packages-price">
															<h5><?php echo "Rp. " ; echo  $data['harga_barang']; ?></h5>
														
													</div>
												</div><!--/.welcome-hero-txt-->
											</div><!--/.single-welcome-hero-->
										</div><!--/.col-->
										<div class="col-sm-5">
											<div class="single-welcome-hero">
												<div class="welcome-hero-img">
													<a class="navbar-brand" href="index.php"><img
                                                       src="admin/<?php echo $data['foto_barang']?>" ></a>

												</div><!--/.welcome-hero-txt-->
											</div><!--/.single-welcome-hero-->
										</div><!--/.col-->
									</div><!--/.row-->
								</div><!--/.welcome-hero-content-->
							</div><!-- /.container-->
						</div><!-- /.single-slide-item-->

					</div><!-- /.item .active-->

					<div class="item">
						<div class="single-slide-item slide3">
							<div class="container">
								<div class="welcome-hero-content">
									<div class="row">
										<div class="col-sm-7">
											<div class="single-welcome-hero">
												<div class="welcome-hero-txt">
													
													<h4>Gayung Air Terpopuler</h4>
													<h2><?php echo $data2['nama_barang']; ?></h2>
													<p>
														<?php echo $data2['deskripsi_barang']; ?>
													</p>
													<div class="packages-price">
														<h5><?php echo "Rp. " ; echo  $data2['harga_barang']; ?></h5>
													</div>
												</div><!--/.welcome-hero-txt-->
											</div><!--/.single-welcome-hero-->
										</div><!--/.col-->
										<div class="col-sm-5">
											<div class="single-welcome-hero">
												<div class="welcome-hero-img"><a class="navbar-brand" href="index.php"><img
                                                     src="admin/<?php echo $data2['foto_barang']?>" ></a>
												</div><!--/.welcome-hero-txt-->
											</div><!--/.single-welcome-hero-->
										</div><!--/.col-->
									</div><!--/.row-->
								</div><!--/.welcome-hero-content-->
							</div><!-- /.container-->
						</div><!-- /.single-slide-item-->
						
					</div><!-- /.item .active-->
				</div><!-- /.carousel-inner-->

			</div><!--/#header-carousel-->

			<!-- top-area Start -->
			<div class="top-area">
				<div class="header-area">
					<!-- Start Navigation -->
				    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

				        <!-- Start Top Search -->
				        <div class="top-search">
				            <div class="container">
				                <div class="input-group">
				                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
				                    <input type="text" class="form-control" placeholder="Search">
				                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
				                </div>
				            </div>
				        </div>
				        <!-- End Top Search -->

				        <div class="container">            
				            <!-- Start Atribute Navigation -->
				            <div class="attr-nav">
				                <ul>
				                	<li class="search">
				                		<a href="#"><span class="lnr lnr-magnifier"></span></a>
				                	</li><!--/.search-->
				                	<li class="nav-setting">
				                		<a href="#"><span class="lnr lnr-home"></span></a>
				                	</li><!--/.search-->
				                	
<?php
include "config.php";
$kode=$_SESSION['username'];
 $sqlker = "SELECT count(b.id_belanja) as banyaker,sum(R.harga_barang*B.banyak) AS total FROM belanja B INNER JOIN barang R on B.id_barang=R.id_barang INNER JOIN user u on u.id_user=b.id_user where u.nama_user='$kode'; ";
 $hasilker = mysqli_query($config, $sqlker);
 $dataker=mysqli_fetch_array($hasilker);
 ?>
 


                                      <li class="dropdown">
				                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
				                            <span class="lnr lnr-cart"></span>
											<span class="badge badge-bg-1"><?php echo $dataker['banyaker']?></span>
				                        </a>
				                        <ul class="dropdown-menu cart-list s-cate">
	<?php
 include "config.php";

 $sqlee = "SELECT B.id_belanja,B.id_barang,R.nama_barang,R.harga_barang,B.banyak,R.foto_barang FROM belanja B INNER JOIN barang R on B.id_barang=R.id_barang INNER JOIN user u on u.id_user=b.id_user where u.nama_user='$kode'; ";
 $hasilee = mysqli_query($config, $sqlee);
 $no=1;
 while ($dataee=mysqli_fetch_array($hasilee)){
 
 ?>			                        

				                    
				                            <li class="single-cart-list">
				                          
				                                <a class="navbar-brand" href="index.php"><img
                                                     src="admin/<?php echo $dataee['foto_barang']?>" ></a>
				                                <div class="cart-list-txt">
				                                	<h6><?php echo $dataee['nama_barang']; ?></h6>
				                                	<p><?php echo $dataee['banyak'];echo " X Rp. " ; echo  $dataee['harga_barang']; ?></p>
				                                </div><!--/.cart-list-txt-->
				                                
				                                <div class="cart-close">
				                                	<span class="lnr lnr-cross"></span>
				                                </div><!--/.cart-close-->
				                            </li>
				 <?php
 }
 ?>

				                            <li class="total">
				                                <?php echo "Rp. " ; echo  $dataker['total']; ?> 
				                                <button class="btn-cart pull-right" onclick="window.location.href='#'">keranjang </button>
				                            </li>
				                              
				                        </ul>
				                        
				                    </li><!--/.dropdown-->
				                   

				                    <li class="dropdown">
				                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
				                            <span class="lnr lnr-user"></span>
											
				                        </a>
				                        <ul class="dropdown-menu cart-list s-cate">
				                            <li class="single-cart-list">
				                          
				                                
				                                <div class="cart-list-txt">
				                                	<h4>nama akun <?php include "config.php"; isset($_SESSION['username']); echo $_SESSION['username']; ?></h4>

				                                    <h3><a href="barang_tambah.php">MULAI JUAL</a></h3>
				                                    <h3><a href="logout.php">LOGOUT</a></h3>
				                                </div>
				                            
				                        </li>
				                        </ul>
				                    </li><!--/.dropdown-->

				                    </li>
				                
				                </ul>
				            </div><!--/.attr-nav-->
				            <!-- End Atribute Navigation -->

				            <!-- Start Header Navigation -->
				            <div class="navbar-header">
				                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
				                    <i class="fa fa-bars"></i>
				                </button>
				                <a class="navbar-brand" href="index.html">Adham<span>mart</span>.</a>

				            </div><!--/.navbar-header-->
				            <!-- End Header Navigation -->

				            <!-- Collect the nav links, forms, and other content for toggling -->
				            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
				                <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
				                    <li class=" scroll active"><a href="#home">home</a></li>
				                    <li class="scroll"><a href="#produk">produk</a></li>
				                    <li class="scroll"><a href="#newsletter">contact us</a></li>
				                </ul><!--/.nav -->
				            </div><!-- /.navbar-collapse -->
				        </div><!--/.container-->
				    </nav><!--/nav-->
				    <!-- End Navigation -->
				</div><!--/.header-area-->
			    <div class="clearfix"></div>

			</div><!-- /.top-area-->
			<!-- top-area End -->

		</header><!--/.welcome-hero-->
		<!--welcome-hero end -->
		<section id="produk" class="new-arrivals">
			<div class="container">
				<div class="section-header">
					<h2>Produk</h2>
				</div><!--/.section-header-->
								<div class="new-arrivals-content">
					
<?php
 include "config.php";
 $sqlall = "SELECT nama_barang,deskripsi_barang, harga_barang,jml_barang,foto_barang FROM barang ORDER BY id_barang";
 $hasilall = mysqli_query($config, $sqlall);
 $no=1;
 while ($dataall=mysqli_fetch_array($hasilall)){
 
 ?>

						<div class="col-md-3 col-sm-4">
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
                                    <a class="navbar-brand" href="index.php">
									<img src="admin/<?php echo $dataall['foto_barang'] ?>"></a>
									<div class="single-new-arrival-bg-overlay"></div>
									<div class="new-arrival-cart">
										<p>
											<span class="lnr lnr-cart"></span>
											<a href="#">tambahkan <span>ke </span> keranjang</a>
										</p>
										<p class="arrival-review pull-right">
											<span class="lnr lnr-frame-expand"></span>
										</p>
									</div>
								</div>
								<h4><a href="#"><?php echo $dataall['nama_barang']; ?></a></h4>
								<p><?php echo $dataall['deskripsi_barang']; ?></p>
								<h3>    </h3>
								<p class="arrival-product-price"><?php echo $dataall['harga_barang']; ?></p>
							</div>
						</div>
	 <?php
 }
 ?>

		
		</section><!--/.new-arrivals-->
		<!--new-arrivals end -->



		<!--newsletter strat -->
		<section id="newsletter"  class="newsletter">
			<div class="container">
				<div class="hm-footer-details">
					<div class="row">
						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>information</h4>
								</div><!--/.hm-foot-title-->
								<div class="hm-foot-menu">
									<ul>
										<li><a href="#">about us</a></li><!--/li-->
										<li><a href="#">contact us</a></li><!--/li-->
										<li><a href="#">news</a></li><!--/li-->
										<li><a href="#">store</a></li><!--/li-->
									</ul><!--/ul-->
								</div><!--/.hm-foot-menu-->
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->
						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>collections</h4>
								</div><!--/.hm-foot-title-->
								<div class="hm-foot-menu">
									<ul>
										<li><a href="#">Peralatan mandi</a></li><!--/li-->
										<li><a href="#">Sabun mandi</a></li><!--/li-->
										<li><a href="#">Handuk</a></li><!--/li-->
										<li><a href="#">Sikat WC</a></li><!--/li-->
										
									</ul><!--/ul-->
								</div><!--/.hm-foot-menu-->
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->
						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>my accounts</h4>
								</div><!--/.hm-foot-title-->
								<div class="hm-foot-menu">
									<ul>
										<li><a href="#">my account</a></li><!--/li-->
										<li><a href="#">order history</a></li><!--/li-->
										<li><a href="#">my cart</a></li><!--/li-->
									</ul><!--/ul-->
								</div><!--/.hm-foot-menu-->
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->
						<div class=" col-md-3 col-sm-6  col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>Informasi lebih lanjut</h4>
								</div><!--/.hm-foot-title-->
								<div class="hm-foot-para">
									<p>
										Berlangganan untuk mendapatkan informasi terbaru.
									</p>
								</div><!--/.hm-foot-para-->
								<div class="hm-foot-email">
									<div class="foot-email-box">
										<input type="text" class="form-control" placeholder="Masukan Email">
									</div><!--/.foot-email-box-->
									<div class="foot-email-subscribe">
										<span><i class="fa fa-location-arrow"></i></span>
									</div><!--/.foot-email-icon-->
								</div><!--/.hm-foot-email-->
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.hm-footer-details-->

			</div><!--/.container-->

		</section><!--/newsletter-->	
		<!--newsletter end -->

		<!--footer start-->
		<footer id="footer"  class="footer">
			<div class="container">
				<div class="hm-footer-copyright text-center">
					<div class="footer-social">
						<a href="#"><i class="fa fa-facebook"></i></a>	
						<a href="#"><i class="fa fa-instagram"></i></a>	
					</div>
					<p>
						
					</p><!--/p-->
				</div><!--/.text-center-->
			</div><!--/.container-->

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>
				
			</div><!--/.scroll-Top-->
			
        </footer><!--/.footer-->
		<!--footer end-->
		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/bootsnav.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="assets/js/custom.js"></script>
        
    </body>
	
</html>