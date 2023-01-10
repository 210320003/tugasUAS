</html>
	<head>
	<center><title>Zodiac.com</title></center>
    <link rel="stylesheet" type="text/css" href="bg.css">
	</head>
	<body>
	<center><h2>Zodiac.com</h2></center>
	<br/>
	<center><a href="inputsatuan.php">TAMBAH SATUAN</a></center>
	<center><h2><a href="index.php">HOME</a></h2></center>
	<br/>
	<center><table border="1"></center>
	<tr>
		<th>Jenis Satuan</th>
		<th>OPSI</th>
	</tr>
	<?php
	include 'koneksi.php';
	$no =1;
	$data = mysqli_query($koneksi,"select * from satuan");
	while($d= mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $d['nama']; ?></td>
			<td>
				<a href="editsatuan.php?id_kategori=<?php echo $d['id_satuan']; ?>">EDIT</a>
				<a href="hapussatuan.php?id_kategori=<?php echo $d['id_satuan']; ?>">HAPUS</a>
			<td>
		</tr>
	<?php
	}
	?>
	</table>
	</body>
	</html>