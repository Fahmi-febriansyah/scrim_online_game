<?php 
$id = $_GET['id'];
$koneksi = mysqli_connect("localhost","root","","scrim");
$quary = mysqli_query($koneksi,"SELECT * FROM team WHERE nama_scrim = '$id' ");
$pa = mysqli_query($koneksi,"SELECT * FROM buat Where nama_scrim = '$id'");
$quary = mysqli_fetch_assoc($pa);
$apus = mysqli_fetch_assoc($pa);
if (isset($apus['password'])) {
	// code...
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
				<a class="nav-link btn btn-dark font-weight-bold" href="pengalihan.php?nama=<?php echo $apus['id_scrim'];?>">Daftar</a>
			</div>
		</div>
	</nav>
	<br>
	<table class="table table-dark" style=" background-color: black; ">
		<thead>
			<tr>
				<th scope="col">no</th>
				<th scope="col">Nama Team</th>
				<th scope="col">Player</th>
				<th scope="col">Point</th>
				<th scope="col">Posisi</th>
				<th scope="col">aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$tambah = 1;
			while ($data = mysqli_fetch_assoc($quary)){ ?>
				<tr>
					<th scope="row"><?php echo $tambah ?></th>
					<td><?php echo $data['nama_team'] ?></td>
					<td><?php echo $data['player'] ?></td>
					<td><?php echo $data['point'] ?></td>
					<td><?php echo $data['posisi'] ?></td>
					<td><a href="player.php?id=<?php echo $data['nama_team'] ?>"><button type="button" class="btn btn-dark">Lihat</button></a> <a href="coba.php?id=<?php echo $data['id_team'] ?>"><button type="button" class="btn btn-dark">edit</button></a></td>
				</tr>
				<?php $tambah++; ?>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>
