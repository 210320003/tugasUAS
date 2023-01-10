<center><h2>Report Penjualan</h2></center>
<center><h2><a href="index.php">HOME</a></h2></center>
<link rel="stylesheet" type="text/css" href="bg.css">

<center><table border="3"></center>
<tr>
	<th>kategori</th>
	<th>nama</th>
	<th>barang</th>
	<th>qty</th>
    <th>harga</th>
	<th>total</th>
</tr>
<?php
	include"koneksi.php";
	$no=1;
	$data=mysqli_query($koneksi,"select * from transaksi inner join barang WHERE transaksi.id_transaksi=barang.id_barang");
	while ($d=mysqli_fetch_array ($data)){
		?>
		<tr>
			<th><?php echo $d['kategori_id']; ?></th>
			<th><?php echo $d['nama_transaksi']; ?></th>
			<th><?php echo $d['id_barang']; ?></th>
			<th><?php echo $d['qty']; ?></th>
			<th><?php echo $d['harga']; ?></th>
            <th><?php echo $d['total']; ?></th>
			</tr>
		<?php
	}
?>
</table>
</body>
	</html>