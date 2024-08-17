<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Laporan Data Buku</title>
</head>
<body>
	<center>
		<h1>LAPORAN DATA BUKU PUSTAKA</h1>
	<table border="1" cellpadding="10" cellspacing="0" style="background-color: lightpink; align-content: center;">
		<tr bgcolor="lightblue">
			<th>No</th>
			<th>Kode Buku</th>
			<th>Judul</th>
			<th>Penulis</th>
			<th>Penerbit</th>
			<th>Tahun Terbit</th>
			<th>Jumlah Buku</th>
		</tr>

<?php 
//Koneksi Ke Database
//Gunakan Function mysqli_connect
$koneksi = mysqli_connect("localhost","root","","dbpustaka_200504");

//Ambil data tbl_mahasiswa (query data mahasiswa)
//Gunakan Function mysqli_query
$hasil = mysqli_query($koneksi,"SELECT * FROM tblbuku_200504");

//Ambil data (fetch) mahasiswa dari object
//fetch (kunci untuk membuka data dari database)
$no=1;
while ($tampil = mysqli_fetch_array($hasil)){?>
<tr>
	<td><?php echo $no ?></td>
	<td><?php echo $tampil ["Kdbuku"] ?></td>
	<td><?php echo $tampil ["Judul"] ?></td>
	<td><?php echo $tampil ["Penulis"] ?></td>
	<td><?php echo $tampil ["Penerbit"] ?></td>
	<td><?php echo $tampil ["Tahun"] ?></td>
	<td><?php echo $tampil ["Jumlah"] ?></td>
	<td><a href="update.php?Kdbuku=<?php echo $tampil ["Kdbuku"]; ?>">Update</a>
	<a href="hapus.php?Kdbuku=<?php echo $tampil ["Kdbuku"]; ?>">Delete</a></td>	
</tr>

<?php $no++;} ?>

	</table>
	<br>
	<a href="form_entri_data.php">Tambah Data</a>
</body>
</html>