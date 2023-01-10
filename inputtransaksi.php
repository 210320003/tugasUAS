<! DOCTYPE html>
<html>
<html>
<center><title>Zodiac.com></title></center>
<link rel="stylesheet" type="text/css" href="bg.css">
</head>
<?php
//koneksi database
include "koneksi.php";
if(!empty($_POST['save'])){
$nama_transaksi = $_POST ['nama_transaksi'];
$tgl_transaksi = $_POST ['tgl_transaksi'];
$harga = $_POST ['harga'];
$qty = $_POST ['qty'];
$id_barang = $_POST ['id_barang'];
$diskon = $_POST ['diskon'];
$id_pelanggan = $_POST ['id_pelanggan'];
$total = $_POST ['total'];

$a=mysqli_query($koneksi,"insert into transaksi values('','$nama_transaksi','$tgl_transaksi','$harga','$qty','$id_barang','$diskon','$id_pelanggan','$total')");
if ($a)
{
header("location:tampiltransaksi.php");
}
else
{
	echo mysqli_error($koneksi);
	
}
}
$querybarang = "SELECT * FROM barang";
$resultbarang = mysqli_query($koneksi,$querybarang);

$querypelanggan = "SELECT * FROM pelanggan";
$resultpelanggan = mysqli_query($koneksi,$querypelanggan);

?>
<body>
<center><h2>Zodiac.com<h/2></center>
<br/>
<center><a href="tampiltransaksi.php">KEMBALI<a/></center>
<center><h2><a href="index.php">HOME</a></h2></center>
<br/>
<br/>
<center><h3>TAMBAH DATA TRANSAKSI</h3></center>
<form method="POST">
	<center><table></center>
	<tr>
	<td>Nama Transaksi</td>
	<td><input type="text" Name = "nama_transaksi"></td>
	</tr>
	<tr>
	<td>Tgl Transaksi</td>
	<td><input type="date" Name = "tgl_transaksi"></td>
	</tr>
    <tr>
    <td>Harga</td>
	<td><input type="number" Name = "harga"></td>
	</tr>
	<tr>
	<td>Qty</td>
	<td><input type="number" Name = "qty"></td>
	</tr>
	<tr>
	<td>Id Barang</td>
	<td><select name = "id_barang">
	<option value="">---Pilih---</option>
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
	<td><input type="text" name="diskon"></td>
	</tr>
	<td>Id Pelanggan</td>
	<td><select name = "id_pelanggan">
	<option value="">---Pilih---</option>
	<?php
	while ($datapelanggan=mysqli_fetch_array($resultpelanggan))
	{
		echo "<option value=$datapelanggan[id_pelanggan]>$datapelanggan[id_pelanggan]</option>";
	}
	?>
	</select>
	</td>
	</tr>
	<tr>
	<td>Total Transaksi</td>
	<td><input type="number" name="total"></td>
	</tr>
	<tr>
	<td></td>
	<td><input type="submit" name="save"><td>
	</tr>
	</table>
	</form>
	</body>
	</html>