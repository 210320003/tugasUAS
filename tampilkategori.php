</html>
	<head>
	<center><title>Zodiac.com</title></center>
    <link rel="stylesheet" type="text/css" href="bg.css">
	</head>
	<body>
	<center><h2>Zodiac.com</h2></center>
	<br/>
	<center><a href="inputkategori.php">TAMBAH KATEGORI</a></center>
	<center><h2><a href="index.php">HOME</a></h2></center>
	<br/>
	<center><table border="1"></center>
	<tr>
		<th>Nama Kategori</th>
		<th>OPSI</th>
	</tr>
	<?php
	include 'koneksi.php';
	$no =1;
	$data = mysqli_query($koneksi,"select * from kategori");
	while($d= mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $d['nama']; ?></td>
			<td>
				<a href="editkategori.php?id_kategori=<?php echo $d['id_kategori']; ?>">EDIT</a>
				<a href="hapuskategori.php?id_kategori=<?php echo $d['id_kategori']; ?>">HAPUS</a>
			<td>
		</tr>
	<?php
	}
	?>
	</table>
	</body>
	</html>