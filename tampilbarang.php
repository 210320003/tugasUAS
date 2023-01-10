</html>
	<head>
	<title>Zodiac.com</title>
	<link rel="stylesheet" type="text/css" href="bg.css">
	</head>
	<center><h2>zodiac.com</h2></center>
	<br/>
	<center><a href="inputbarang.php">+ TAMBAH BARANG</a></center>
	<center><h2><a href="index.php">HOME</a></h2></center>
	<br/>
	<center><table border="1">
	<tr>
		<th>nama barang</th>
		<th>ID Kategori</th>
		<th>ID Satuan</th>
		<th>OPSI</th>
	</tr>
	<?php
	include 'koneksi.php';
	$no =1;
	$data = mysqli_query($koneksi,"select * from barang");
	while($d= mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['kategori_id']; ?></td>
			<td><?php echo $d['satuan_id']; ?></td>
			<td>
				<a href="editbarang.php?id_barang=<?php echo $d['id_barang']; ?>">EDIT</a>
				<a href="hapusbarang.php?id_barang=<?php echo $d['id_barang']; ?>">HAPUS</a>
			<td>
		</tr>
	<?php
	}
	?>
	</table>
	</body>
	</html>