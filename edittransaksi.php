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
$id=$_POST['id'];
$nama_transaksi = $_POST ['nama_transaksi'];
$tgl_transaksi = $_POST ['tgl_transaksi'];
$harga = $_POST ['harga'];
$qty = $_POST ['qty'];
$id_barang = $_POST ['id_barang'];
$diskon = $_POST ['diskon'];
$id_pelanggan = $_POST ['id_pelanggan'];
	$update=mysqli_query($koneksi,"UPDATE transaksi SET nama_transaksi='$nama_transaksi', tgl_transaksi='$tgl_transaksi',harga='$harga',qty='$qty',id_barang='$id_barang',diskon='$diskon',id_pelanggan='$id_pelanggan' WHERE id_transaksi='$id'");
	if($update){
		header("location:tampiltransaksi.php");
	}else{
		echo mysqli_error();
	}
}
$querybarang = "SELECT * FROM barang";
$resultbarang = mysqli_query($koneksi,$querybarang);

$querypelanggan = "SELECT * FROM pelanggan";
$resultpelanggan = mysqli_query($koneksi,$querypelanggan);

$id = $_GET['id_transaksi'];

	$query_mysqli = mysqli_query($koneksi,"SELECT * FROM transaksi WHERE id_transaksi='$id'")or die(mysqli_error()); 
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysqli)){
?>
<body>
<center><h2>Pemograman 3 2022</h2></center>
	<br/>
	<center><a href="tampiltransaksi.php">KEMBALI</a></center>
	<center><h2><a href="index.php">HOME</a></h2></center>
	<br/>
	<br/>
	<center><h3>EDIT DATA BARANG</h3></center>
	<form method="POST">
		<center><table></center>
        <tr>
				<td>Nama Transaksi</td>
				<td><input type="text" name="nama_transaksi" required value="<?php echo $data['nama_transaksi'];?>"></td>
			</tr>
            <tr>			
				<td>Tanggal Transaksi</td>
				<input type="hidden" name="id" value="<?php echo $data['id_transaksi'];?>"/>
				<td><input type="date" name="tgl_transaksi" required value="<?php echo $data['tgl_transaksi'];?>"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="number" name="harga" required value="<?php echo $data['harga'];?>"></td>
			</tr>
			<tr>
				<td>Qty</td>
				<td><input type="number" name="qty" required value="<?php echo $data['qty'];?>"></td>
			</tr>
			<tr>
			<td>Id Barang</td>
				<td><select name="id_barang" required>
				       <option value="">-----Pilih--------</option>
					   <?php
	while ($databarang=mysqli_fetch_array($resultbarang))
	{
		echo "<option value=$databarang[id_barang]>$databarang[nama]</option>";
	}
	?>
				</select>
				</td>
			</tr>
			<tr>
			<td>Diskon</td>
				<td><input type="text" name="diskon" required value="<?php echo $data['diskon'];?>"></td>
			</tr>
			<tr>
			<td>Id Pelanggan</td>
				<td><select name="id_pelanggan" required>
				       <option value="">-----Pilih--------</option>
<?php
	while ($datapelanggan=mysqli_fetch_array($resultpelanggan))
	{
		echo "<option value=$datapelanggan[id_pelanggan]>$datapelanggan[nama_pelanggan]</option>";
	}
	?>
				</select>
				</td>
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