<?php 
$koneksi = mysqli_connect("localhost","root","","scrim");
$ngatur = $_GET['pala'];
if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];

	$kuari = mysqli_query($koneksi,"SELECT * FROM team WHERE nama_team = $nama");
	if ($kuari == true) {
		echo "<script>
		alert('Nama sudah ada');
		document.location.href = 'scrim.php'
		</script>";
	}else{
		$masuk = mysqli_query($koneksi,"INSERT INTO team VALUES ('','$nama','0','0','0','$password','$ngatur')");
		if ($masuk) {
			echo "<script>
			alert('berhasil');
			document.location.href = 'scrim.php'
			</script>";
		}else{
			echo "<script>
			alert('gagal');
			document.location.href = 'scrim.php'
			</script>";
		}
	}
}
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
	body{
		background-color: rgba(26, 26, 26, 1);

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
				<a class="nav-link active" href="index.php">HOME</a>
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
				<a class="nav-link btn btn-dark font-weight-bold" href="logout.php">Daftar</a>
			</div>
		</div>
	</nav>
	<div class="jumbotron jumbotron-fluid" style=" background-color: rgba(26, 26, 26, 1);  color: white;">
		<div class="container">
			<h1 class="bold" align="center">Daftar Scrim Mobile legends</h1>
			<br><br>
			<form method="POST">
				<div class="form-group">
					<label for="exampleFormControlInput1">Nama team</label>
					<input style=" background-color: black; color: white;" name="nama" type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukan nama team ">
				</div>
				<div class="form-group">
					<label for="exampleFormControlInput1">Password (opsinal)</label>
					<input style=" background-color: black; color: white;" name="password" type="password" class="form-control" id="exampleFormControlInput1" placeholder="masukan Password scrim">
				</div>
				<div class="form-group">
					<label for="exampleFormControlInput1">Password (Scrim ini jika ada)</label>
					<input style=" background-color: black; color: white;" name="password2" type="password" class="form-control" id="exampleFormControlInput1" placeholder="masukan Password scrim ini">
				</div>
				<button type="submit" name="submit" class="btn btn-dark">BUAT</button>
			</form>
		</div>
	</div>

	<script src="asset/package/src/sweetalert2.all.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>