<body>
<table border="1">
<tr>

	<th>Pelanggan</th>
	<th>Status</th>
	<th>Kategori</th>
	<th>barang</th>
	<th>qty</th>
	<th>harga</th>
	<th>diskon</th>
	<th>Total</th>
	</tr>
<?php
	include"koneksi.php";
	$no=1;
	$ambildata=mysqli_query($koneksi,"select * from transaksi t join pelanggan p on t.pelanggan_id = p.id_pelanggan join barang b on t.barang_id = b.id_barang left join kategori k on t.kategori_id=k.id_kategori ");
	while ($tampil = mysqli_fetch_array($ambildata)){
		?>
		<tr>
			
			<td><?php echo $tampil['nama_pelanggan']; ?></td>
			<td><?php echo $tampil['status']; ?></td>
			<td><?php echo $tampil['nama_kategori']; ?></td>
			<td><?php echo $tampil['nama_barang']; ?></td>
			<td><?php echo $tampil['qty']; ?></td>
			<td><?php echo $tampil['harga']; ?></td>
			<td><?php echo $tampil['diskon']; ?></td>
			<td><?php echo $tampil['total']; ?></td>
			<td>
			</tr>
		<?php
	}
			

?>
</table>
</body>
	</html>