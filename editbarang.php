<!DOCTYPE html>
<html>
<head>
<center><title>pemograman3.com</title></center>
    <link rel="stylesheet" type="text/css" href="bg.css">
</head>
<?php 
// koneksi database
include 'koneksi.php';
if(isset($_POST['save'])){
	$id_barang=$_POST['id_barang'];
	$nama=$_POST['nama'];
	$kategori_id=$_POST['kategori_id'];
	$satuan_id=$_POST['satuan_id'];
	$update=mysqli_query($koneksi,"UPDATE barang SET nama='$nama', kategori_id='$kategori_id',satuan_id='$satuan_id' WHERE id_barang='$id_barang'");
	if($update){
		header("location:tampilbarang.php");
	}else{
		echo mysqli_error();
	}
}
$id_barang = $_GET['id_barang'];

	$query_mysqli = mysqli_query($koneksi,"SELECT * FROM barang WHERE id_barang='$id_barang'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysqli)){
?>
<body>
<center><h2>Pemograman 3 2022</h2></center>
	<br/>
	<center><a href="tampilbarang.php">KEMBALI</a></center>
	<center><h2><a href="index.php">HOME</a></h2></center>
	<br/>
	<br/>
	<center><h3>EDIT DATA BARANG</h3></center>
	<form method="POST">
		<table>
			<tr>			
				<td>Nama</td>
				<input type="hidden" name="id_barang" value="<?php echo $data['id_barang'];?>"/>
				<td><input type="text" name="nama" required value="<?php echo $data['nama'];?>"></td>
			</tr>
			<tr>
				<td>Kategori_id</td>
				<td><input type="text" name="kode_barang" required value="<?php echo $data['kategori_id'];?>"></td>
			</tr>
			<tr>
				<td>satuan_id</td>
				<td><input type="text" name="satuan_id" required value="<?php echo $data['satuan_id'];?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="save"></td>
			</tr>		
		</table>
	</form>
<?php	}?>
</body>
</html>