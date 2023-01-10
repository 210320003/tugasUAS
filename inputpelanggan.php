<! DOCTYPE html>
<html>
<html>
<center><title>Zodiac.com</title></center>
<link rel="stylesheet" type="text/css" href="bg.css">
</head>
<?php
//koneksi database
include "koneksi.php";
if(!empty($_POST['save'])){
$nama_pelanggan = $_POST['nama_pelanggan'];
$no_tlp = $_POST['no_tlp'];
$status = $_POST['status'];
$a=mysqli_query($koneksi,"insert into pelanggan values('','$nama_pelanggan','$no_tlp','$status')");
if ($a){
header("location:tampilpelanggan.php");
}else{
	echo mysqli_error();
}
}
?>
<body>
<center><h2>Zodiac.com<h/2></center>
<br/>
<center><a href="tampilpelanggan.php">KEMBALI<a/></center>
<center><h2><a href="index.php">HOME</a></h2></center>
<br/>
<br/>
<center><h3>TAMBAH DATA PELANGGAN</h3></center>
<form method="POST">
	<center><table></center>
	<tr>
	<td>Nama Pelanggan</td>
	<td><input type="char" name="nama_pelanggan"></td>
	</tr>
    <tr>
	<td>No Tlp</td>
	<td><input type="text" name="no_tlp"></td>
	</tr>
	<tr>
	<td>Status</td>
	<td><select name="status">
	<option value="">-----Pilih</option>
	<option value="baru">baru</option>
	<option value="lama">lama</option>
	<option value="tetap">tetap</option>
	</select>
	<td>
	</tr>
	<tr>
	<td></td>
	<td><input type="submit" name="save"><td>
	</tr>
	</table>
	</form>
	</body>
	</html>