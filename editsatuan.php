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
	$id_satuan=$_POST['id_satuan'];
	$nama=$_POST['nama'];
	$update=mysqli_query($koneksi,"UPDATE satuan SET nama='$nama' WHERE id_satuan='$id_satuan'");
	if($update){
		header("location:tampilsatuan.php");
	}else{
		echo mysqli_error();
	}
}
$id_satuan = $_GET['id_satuan'];

	$query_mysqli = mysqli_query($koneksi,"SELECT * FROM satuan WHERE id_satuan='$id_satuan'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysqli)){
?>
<body>
<center><h2>Pemograman 3 2022</h2></center>
	<br/>
	<center><a href="tampilsatuan.php">KEMBALI</a></center>
	<center><h2><a href="index.php">HOME</a></h2></center>
	<br/>
	<br/>
	<center><h3>EDIT JENIS SATUAN</h3></center>
	<form method="POST">
		<table>
			<tr>			
				<td>Jenis Satuan</td>
				<input type="hidden" name="id_satuan" value="<?php echo $data['id_satuan'];?>"/>
				<td><input type="text" name="nama" required value="<?php echo $data['nama'];?>"></td>
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