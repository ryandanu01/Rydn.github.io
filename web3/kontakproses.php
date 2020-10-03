<!DOCTYPE html>
<html>
<head>
	<title>Data Regristrasi</title>
</head>
<body bgcolor="pink">
	<h1>Data Regristrasi</h1>
	<hr> <br> <br>
	<?php 
	$nama =$_POST["nama"];
	$email =$_POST["email"];
	$nohp  =$_POST["nohp"];
	$kota =$_POST["kota"];
	?>	
	<table border="4" bgcolor="white">
	<tr>
		<td colspan=3 align="center"><b>DATA MAHASISWA</b></td>
	</tr>
	<tr>
	<td>Nama</td><td> <?php echo $nama; ?></td>
</tr>
	<tr>
	<td>Email</td><td> <?php echo $email; ?></td>
</tr>
<tr>
	<td>No. HP</td><td> <?php echo $nohp; ?></td>
</tr>
	<td>Kota</td><td> <?php echo $kota; ?></td>
</tr>
</table>
<br>
<a href="kontak.html">BACK TO HOME</a>
</body>
</html>