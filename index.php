<?php 


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="icon" href="asset/img/logo.png">
	<title>Scrim . Turnamen</title>
	<style>
	* {
		box-sizing: border-box;
	}
	body{
		background-color: rgba(26, 26, 26, 1);
	}
	@media only screen and (max-width: 600px) {
		#gambar1 {
			display: none;
		}
	}

	#jumbo{

	}
</style>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark">
		<img src="asset/img/logo.png" width="70" height="60" alt="">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav mx-auto">
				<a class="nav-link active" href="#">HOME</a>
				<div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
					<ul class="navbar-nav">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Game
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Free Fire</a>
								<a class="dropdown-item" href="#">Mobile Legends</a>
								<a class="dropdown-item" href="#">Pubg Mobile</a>
							</div>
						</li>
					</ul>
				</div>
				<a class="nav-link active" href="scrim.php">SCRIM</a>
			</div>
			<div class="navbar-nav ml-auto">
				<a class="nav-link btn btn-dark font-weight-bold" href="#">Daftar</a>
			</div>
		</div>
	</nav>

	<div class="container mt-1 rounded" >
		<div class="row p-5 text-white">
			<div class="col-lg-6 px-4 my-auto mt-3">
				<h1 class="bold">Buat squadmu Menjadi Juara
				dan jadi yang terbaik</h1>
				<span><p style=" color: rgba(183, 183, 183, 1); font-size: 30px; ">buat scrim sekarang</p></span>
				<a class="nav-link btn btn-primary font-w-bold" style=" width: 120px; " href="buat.php">Buat scrim</a>
			</div>
			<div class="col-lg-6 mx-auto rounded mt-4">
				<img class="mx-auto" id="gambar1" width="600" src="asset/img/conat.png" alt="">
			</div>
		</div>
	</div>
	<br><br><br>
	<div class="jumbotron jumbotron-fluid" id="jumbo" style="background-color: rgba(26, 26, 26, 1); " align="center">
		<div class="container">
			<h1 class="display-4" style=" color: white; ">Tidak Perlu Ribet Untuk Mendata Pemain</h1>
			<p class="lead" style=" color:rgba(183, 183, 183, 1); font-size: 30px;">Daftar Lalu Bermain</p>
			<a href="buat.php"><img src="asset/img/pubg.png" alt="" style=" border-radius: 10px; width: 160px; "></a>
			<a href="buat.php"><img  src="asset/img/free-fire.png" alt="" style=" border-radius: 10px; width: 160px; "></a>
			<a href="buat.php"><img src="asset/img/ml.png" alt="" style=" border-radius: 10px; width: 160px; "></a>
			<br><br><br>
			<a class="nav-link btn btn-primary font-w-bold" style=" width: 200px; " href="logout.php">Buat scrim</a>
		</div>
	</div>

	<div class="footer mt-5 p-5 text-white text-center" style="background-color: rgba(26, 26, 26, 1); background-image: linear-gradient(0deg, rgba(26,26,26,1) 90%, rgba(68,68,68,1) 100%);">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mx-auto mx-3">
					<h2>Contact Person</h2>
					<p class="mt-2">Email : fahmijha12@gmail.com <br> Linkedin : fahmijha <br> Github : Fahmijha</p>
				</div><div class="col-lg-6 mx-auto">
					<h2>Social Media</h2>
					<div class="socmed" style="font-size: 40px;">
						<a href="#" class="text-white m-2"><img src="asset/img/instagram.png" style=" width: 30px; " alt=""></a>
						<a href="#" class="text-white m-2"><img src="asset/img/yt.png" style=" width: 90px; " alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>







	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>