<?php 
$nama = $_GET['id'];
$koneksi = mysqli_connect("localhost","root","","scrim");
$quary = mysqli_query($koneksi,"SELECT * FROM player WHERE team = '$nama'");

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
				<a class="nav-link btn btn-dark font-weight-bold" href="Daftarplayer.php?nama=<?php echo $nama ?>">Daftar</a>
			</div>
		</div>
	</nav>
	<div class="jumbotron jumbotron-fluid" align="center" style=" background-color: rgba(26, 26, 26, 1);  color: white;">
		<div class="container">
			<h1 class="display-4">Data Player</h1>
			<br>
			<table border="1" >
				<?php 
				$tambah = 1;
				while ($data = mysqli_fetch_assoc($quary)){ ?>
					<tr>
						<td colspan="3" align="center"><img src="asset/img/user.png" width="100" align="center" alt=""></td>
					</tr>
					<tr>
						<td>username </td>
						<td>:</td>
						<td><?php echo $data['nama'] ?> </td>
					</tr>
					<tr>
						<td>role</td>
						<td>:</td>
						<td><?php echo $data['role'] ?></td>
					</tr>
					<?php $tambah++; ?>
				<?php } ?>
			</table>
		</div>
	</div>

	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>	
</body>
</html>