<?php 

$nama = $_GET['nama'];
$koneksi = mysqli_connect("localhost","root","","scrim");
$pa = mysqli_query($koneksi,"SELECT * FROM buat Where id_scrim = '$nama'");
$apus = mysqli_fetch_assoc($pa);
$lah = $apus['game'];
$nam = $apus['nama_scrim'];
if ($lah == "Pubg mobile") {
	header("location: daftar-pubg.php?pala=$nam");
}elseif($apus['game'] == "Mobile Legends"){
	header("location: daftar-ml.php?pala=$nam");
}else{
	echo "gagal";
}
?>