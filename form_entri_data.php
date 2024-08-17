<?php 
//Koneksi ke database
$koneksi = mysqli_connect("localhost","root","","dbpustaka_20-0504");

//Jika di Klik Tombol Simpan Maka ...
if(isset($_POST['simpan'])){

//Ambil Data Dari Tiap Elemen Dalam Form
$kdbuku = $_POST['kdbuku'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun'];
$jumlah = $_POST['jumlah'];

//Query Insert Data Ke Tabel Mahasiswa
$Query = "INSERT INTO tblbuku_200504 values('$kdbuku','$judul','$penulis','$penerbit','tahun','jumlah')";

//Simpan Data
$simpan = mysqli_query($koneksi, $Query);

//Pesan Data Berhasil Disimpan

if ($simpan){
	echo "<script>
	alert('Data Berhasil Disimpan')
	</script>";
}else{
	echo "<script>
	alert('Data Gagal Disimpan')
	</script>";
}
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Form Buku</title>
 </head>
 <body>
 	<h1>Form Entri Data Buku</h1>
 	<form method="POST">
	<table>
		<tr>
			<td>Kode Buku</td>
			<td><input type="text" name="kdbuku"></td>
		</tr>
		<tr>
			<td>Judul</td>
			<td><input type="text" name="judul"></td>
		</tr>
		<tr>
			<td>Penulis</td>
			<td><input type="text" name="penulis"></td>
		</tr>
		<tr>
			<td>Penerbit</td>
			<td><input type="text" name="penerbit"></td>
		</tr>
		<tr>
			<td>Tahun Terbit</td>
			<td><input type="text" name="tahun"></td>
		</tr>
		<tr>
			<td>Jumlah Buku</td>
			<td><input type="text" name="jumlah"></td>
		</tr>
		<tr>
			<td></td>
			<td><button type="submit" name="simpan">Simpan</button></td>
		</tr>
	</table>
</form>
<br>
<a href="index.php">Lihat Data</a>
 </body>
 </html>