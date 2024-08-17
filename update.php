<?php 
$koneksi = mysqli_connect("localhost","root","","dbpustaka_200504");

//Menangkap Parameter Nobp Pada Link Ubah
$kdbuku = $_GET['Kdbuku'];

//Query Update Berdasarkan Nobp
$query = mysqli_query($koneksi, "SELECT * FROM tblbuku_200504 WHERE Kdbuku = '$kdbuku'");

$tampil = mysqli_fetch_array($query);

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Entri Data Buku</title>
</head>
<body>
	<center>
		<h1>Form Input Data Buku</h1>
		<form method="POST">
			<table>
	<tr>
		<td>Kode Buku</td>
		<td><input type="text" name="txt_kdbuku" value="<?php echo $tampil ["Kdbuku"] ?>"></td>
	</tr>
		<tr>
		<td>Judul</td>
		<td><input type="text" name="txt_judul" value="<?php echo $tampil ["Judul"] ?>"></td>
	</tr>
	<tr>
		<td>Penulis</td>
		<td><input type="text" name="txt_penulis" value="<?php echo $tampil ["Penulis"] ?>"></td>
	</tr>
	<tr>
		<td>Penerbit</td>
		<td><input type="text" name="txt_penerbit" value="<?php echo $tampil ["Penerbit"] ?>"></td>
	</tr>
	</tr>
	<tr>
		<td>Tahun Terbit</td>
		<td><input type="text" name="txt_tahun" value="<?php echo $tampil ["Tahun"] ?>"></td>
	</tr>
	</tr>
	<tr>
		<td>Jumlah Buku</td>
		<td><input type="text" name="txt_jumlah" value="<?php echo $tampil ["Jumlah"] ?>"></td>
	</tr>
	<tr>
			<td></td>
			<td ><button type="submit" name="update">Edit</button></td>
	</tr>
	
			</table>
		</form>
		<a href="index.php">Lihat Data</a>
</body>
</html>

<?php 
//Update Data Mahasiswa Yang Telah Diubah
if (isset($_POST['update'])){

//ambil data yang baru diubah pada elemen form
	$txtkdbuku=$_POST['txt_kdbuku'];
	$txtjudul=$_POST['txt_judul'];
	$txtpenulis=$_POST['txt_penulis'];
	$txtpenerbit=$_POST['txt_penerbit'];
	$txtahun=$_POST['txt_tahun'];
	$txtjumlah=$_POST['txt_jumlah'];

//query update data 
	$query = "UPDATE tblbuku_200504 SET
			Kdbuku = '$txtkdbuku',
			Judul = '$txtjudul',
			Penulis = '$txtpenulis',
			Penerbit = '$txtpenerbit',
			Tahun = '$txttahun',
			Jumlah = '$txtjumlah' 
			WHERE Kdbuku ='$kdbuku'";

	$update = mysqli_query($koneksi,$query);

//pesan data berhasil diupdate
if ($update) {
	echo "<script>
	alert('Data Berhasil Diupdate');
	window.location.href='index.php';
	</script>";
}else{
	echo "<script>
	alert('Data Gagal Diupdate');
	window.location.href='index.php';
	</script>";
}
}

 ?>