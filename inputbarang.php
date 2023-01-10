<! DOCTYPE html>
<html>
<html>
<title>zodiac.com></title>
<link rel="stylesheet" type="text/css" href="bg.css">
</head>
<?php
//koneksi database
include "koneksi.php";
if(!empty($_POST['save'])){
$nama = $_POST['nama_barang'];
$kategori_id = $_POST['kategori_id'];
$satuan_id = $_POST['satuan_id'];


$a=mysqli_query($koneksi,"insert into barang values('','$nama','$kategori_id','$satuan_id')");
if ($a)
{
header("location:tampilbarang.php");
}
else
{
	echo mysqli_error($koneksi);
	
}
}
$querykategori = "SELECT * FROM kategori";
$resultkategori = mysqli_query($koneksi,$querykategori);

$querysatuan = "SELECT * FROM satuan";
$resultsatuan = mysqli_query($koneksi,$querysatuan);

?>
<body>
<center><a href="tampilbarang.php">KEMBALI<a/></center>
<center><h2><a href="index.php">HOME</a></h2></center>
<br/>
<br/>
<center><h3>TAMBAH DATA BARANG</h3></center>
<form method="POST">
<center><table></center>
	<tr>
	<td>nama barang</td>
	<td><input type="text" Name="nama_barang"></td>
	</tr>
	<tr>
	<td>kategori</td>
	<td><select name="kategori_id">
	<option value="">-----Pilih-----</option>
	<?php
	while ($datakategori=mysqli_fetch_array($resultkategori))
	{
		echo "<option value=$datakategori[id_kategori]>$datakategori[nama]</option>";
	}
	?>
	</select>
	<td>
	<tr>
	<tr>
	<td>satuan</td>
	<td><select name="satuan_id">
	<option value="">-----Pilih-----</option>
	<?php
	while ($datasatuan=mysqli_fetch_array($resultsatuan))
	{
		echo "<option value=$datasatuan[id_satuan]>$datasatuan[nama]</option>";
	}
	?>
	</select>
	<td>
	<tr>
	<tr>
	<td></td>
	<td><input type="submit" name="save"><td>
	</tr>
	</table>
	</form>
	</body>
	</html>