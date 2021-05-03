<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- FONT AWESOME -->
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>	
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="Home.php">
				<img class="auto-hw-logo" style=" height:68px;" src="https://nutrigrow-plus.com/images/sampledata/logos/logo-bmm.jpg" alt="Nutrigrow Plus | Fitgrow | Pupuk Organik Cair">
			</a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarScroll">
				<ul class="navbar-nav me-auto my-2 my-lg-0 ulnav" style="--bs-scroll-height: 100px;">
					<li class="nav-item linav">
						<a class="nav-link active anav" aria-current="page" href="Home.php">HOME</a>
					</li>
					<li class="nav-item dropdown linav">
						<a class="nav-link anav" href="Perusahaan.php">PERUSAHAAN</a>
						<ul class="dropdown-menu dropdown-multicol">
							<div class="container">
								<div class="row">
									<div class="dropdown-col">
										<a class="dropdown-item anav1" href="ProfilP.php">Profil Perusahaan</a>
										<li><hr class="dropdown-divider"></li>
										<a class="dropdown-item anav1" href="#">Profil Bisnis</a>
										<li><hr class="dropdown-divider"></li>
										<a class="dropdown-item anav1" href="#">Visi Misi</a>
										<li><hr class="dropdown-divider"></li>
										<a class="dropdown-item anav1" href="#">Managemen</a>
										<li><hr class="dropdown-divider"></li>
										<a class="dropdown-item anav1" href="#">Struktur</a>
									</div>
									<div class="dropdown-col">
										<a class="dropdown-item anav1" href="Direksi.php">Direksi</a>
										<li><hr class="dropdown-divider"></li>
										<a class="dropdown-item anav1" href="#">Nilai Budaya</a>
										<li><hr class="dropdown-divider"></li>
										<a class="dropdown-item anav1" href="#">Makna Logo</a>
										<li><hr class="dropdown-divider"></li>
										<a class="dropdown-item anav1" href="#">Anak Perusahaan & Afilasi</a>
										<li><hr class="dropdown-divider"></li>
										<a class="dropdown-item anav1" href="#">Sertifikat</a>
										<li><hr class="dropdown-divider"></li>
									</div>
								</div>
							</div>
						</ul>
					</li>
					<li class="nav-item dropdown linav">
						<a class="nav-link anav" href="Produk.php">PRODUK</a>
						<ul class="dropdown-menu dropdown-multicol">
							<div class="container">
								<div class="row">
									<div class="dropdown-col">
										<a class="dropdown-item anav1" href="#"><strong>Nutrigrow® Plus</strong></a>
										<li><hr class="dropdown-divider"></li>
										<a class="dropdown-item anav1" href="Tentang.php">Tentang Nutrigrow® Plus</a>
										<a class="dropdown-item anav1" href="#">Jenis Nutrigrow® Plus</a>
									</div>
									<div class="dropdown-col">
										<a class="dropdown-item anav1" href="#"><strong>Fitgrow™</strong></a>
										<li><hr class="dropdown-divider"></li>
										<a class="dropdown-item anav1" href="Tentang1.php">Tentang Fitgrow™</a>
										<a class="dropdown-item anav1" href="#">Jenis Fitgrow™</a>
									</div>
								</div>
							</div>
						</ul>
					</li>
					<li class="nav-item dropdown linav">
						<a class="nav-link anav" href="#">GALERI</a>
						<ul class="dropdown-menu dropdown-multicol">
							<div class="container">
								<div class="row">
									<div class="dropdown-col">
										<a class="dropdown-item anav1" href="#"><strong>Nutrigrow® Plus</strong></a>
										<li><hr class="dropdown-divider"></li>
										<a class="dropdown-item anav1" href="GaleriFoto.php">Foto</a>
										<a class="dropdown-item anav1" href="Testimoni.php">Testimoni</a>
									</div>
									<div class="dropdown-col">
										<a class="dropdown-item anav1" href="#"><strong>Fitgrow™</strong></a>
										<li><hr class="dropdown-divider"></li>
										<a class="dropdown-item anav1" href="GaleriFoto1.php">Foto</a>
										<a class="dropdown-item anav1" href="Testimoni1.php">Testimoni</a>
									</div>
								</div>
							</div>
						</ul>
					</li>
					<li class="nav-item linav">
						<a class="nav-link anav" href="Tips.php">TIPS & NEWS</a>
					</li>
					<li class="nav-item linav">
						<a class="nav-link anav" href="Faq.php">FAQ</a>
					</li>
					<li class="nav-item linav">
						<a class="nav-link anav" href="Contact.php">CONTACT</a>
					</li>
				</ul>
				<ul class="navbar-nav ml-auto my-2 my-lg-0 ulnav" style="--bs-scroll-height: 100px;">
					<form class="d-flex">
						<input class="form-control me-2" type="search" placeholder="Search">
						<button class="btn" style="background-color: #effdb7; margin-left: 10px;" type="submit"><span class="fas fa-search"></span></button>
					</form>
				</ul>
			</div>
		</div>

		<button class="navbar-collapse btn" style="background-color: #effdb7;" type="button" data-toggle="collapse" data-target="#ham"><span class="dark-blue-text"><i class="fas fa-bars fa-1x"></i></span></button>

		<div class="collapse" id="ham">
			<div class="row" style="background-color: #effdb7">
				<div class="col-3">
					<ul class="nav navbar-nav">
						<li class ="nav-item">
							<a class ="nav-link" href="#"> Home</a>
						</li>
						<li class ="nav-item">
							<a class ="nav-link" href="Perusahaan.php">Perusahaan</a>
							<a class ="kec nav-link" href="ProfilP.php">Profil Perusahaan</a>
							<a class ="kec nav-link" href="Direksi.php">Direksi</a>
						</li>
						<li class ="nav-item">
							<a class ="nav-link" href="Product.php">Product</a>
							<a class ="nav-link" href="#">Nutrigrow® Plus</a>
							<a class ="kec nav-link" href="Tentang.php">Tentang Nutrigrow Plus</a>
							<a class="dropdown-item anav1" href="#">Fitgrow™</a>										
							<a class="dropdown-item anav1" href="Tentang1.php">Tentang Fitgrow™</a>
						</li>
						<li class ="nav-item">
							<a class ="nav-link" href="#">Galeri</a>
							<a class ="nav-link" href="#">Nutrigrow® Plus</a>
							<a class ="kec nav-link" href="GaleriFoto.php">Foto</a>
							<a class ="kec nav-link" href="Testimoni.php">Testimoni</a>
							<a class ="nav-link" href="#">Fitgrow™</a>
							<a class ="kec nav-link" href="GaleriFoto1.php">Foto</a>
							<a class ="kec nav-link" href="Testimoni1.php">Testimoni</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="Tips.php">Tips & News</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="Faq.php">FAQ</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="Contact.php">Contact</a>
						</li>      
					</ul>
				</div>
			</div>
		</div>
	</nav>

	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #EDE6E4;">
		<div class="container-fluid" style="height: 30px;">
			<span style="color: #d03772;"> <strong>PHONE / WHATSAPP:</strong> +62 821 3245 4545</span><span style="color: #007251;"><strong>OPENING HOURS:</strong> 9:00AM-04:00PM</span> 
		</div>
	</nav>

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ul>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="https://img.inews.co.id/media/822/files/inews_new/2021/04/21/21_antara_jokowi_panen__3_.jpg" style="object-fit: contain; width:100%;">
			</div>
			<div class="carousel-item">
				<img src="https://img.inews.co.id/media/822/files/inews_new/2021/04/21/21_antara_jokowi_panen__3_.jpg" style="object-fit: contain; width:100%;">
			</div>
			<div class="carousel-item">
				<img src="https://img.inews.co.id/media/822/files/inews_new/2021/04/21/21_antara_jokowi_panen__3_.jpg" style="object-fit: contain; width:100%;">
			</div>
		</div>
		<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#myCarousel" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
	</div>
	<br><br><br>
</body>
<style>
	.ulnav {
		list-style-type: none;
		margin-left: 5em;
	}
	.linav {
		padding: 5px;
		height: 5em;
		font-size: 14px;
		position: relative;
		margin-bottom: 0.8em;
		margin-left: 1em;
		cursor: pointer;
		z-index:10;
	}
	.linav::before,
	.linav::after {
		content: '';
		position: absolute;
		width: inherit;
		margin-left: -2px;
		z-index: -1;
	}
	.linav::before {
		height: 80%;
		top: 10%;
	}
	.linav::after {
		height: 60%;
		top: 20%;
	}
	.linav ,.anav {
		text-decoration: none;
		height: 92%;
		display: flex;
		align-items: center;
		justify-content: center;
		font-family: sans-serif;
		text-transform: capitalize;
		transform: translateX(-0.55em);
		transition: 0.5s;
		border-radius: 5px 5px;
		font-family: 'Ubuntu', sans-serif;
	}
	.linav:hover .anav {
		transform: translateX(0.15em);
	}
	.linav,.dropdown {
		display: inline-block;
	}
	.dropdown-menu {
		display: none;
		position: absolute;
		background-color: #f9f9f9;
		min-width: 160px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
		/*background-color: #effdb7;*/
	}
	.dropdown-menu .anav1{
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
		text-align: left;
	}
	.dropdown-menu .anav1:hover {background-color: #f1f1f1;}
	.dropdown:hover .dropdown-menu {
		display: block;
	}
	.dropdown-multicol{
		width: 25em;
	}


</style>
</html>