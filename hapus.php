<?php 
//Koneksi ke database
$koneksi = mysqli_connect("localhost","root","","dbpustaka_20-0504");

//Menangkap Parameter kdbuku 
$kdbuku = $_GET['kdbuku'];

//Query Hapus Data
$hapus = mysqli_query($koneksi,"DELETE FROM tblbuku_200504 WHERE Kdbuku = '$kdbuku'");

//Pesan Data Berhasil Dihapus
if ($hapus) {
	echo "<script>
	alert('Data Berhasil Dihapus');
	window.location.href='index.php';
	</script>";
}else{
	echo "<script>
	alert('Data Berhasil Dihapus');
	window.location.href='index.php';
	</script>";
}
 ?>