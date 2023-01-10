<?php
include 'koneksi.php';
	$data = mysqli_query($koneksi,"select * from pelanggan");
	?>
	<form method="POST">
</html>
	<head>
	<center><title>Zodiac.com</title></center>
    <link rel="stylesheet" type="text/css" href="bg.css">
	</head>
	<body>
	<center><h2>Pemograman 3 2022</h2></center>
	<br/>
	<center><a href="inputpelanggan.php">+ TAMBAH PELANGGAN</a></center>
	<center><h2><a href="index.php">HOME</a></h2></center>
	<br/>
	<center><table border="2"></center>
	<tr>
		<th>Nama_pelanggan</th>
		<th>no_tlp</th>
		<th>status</th>
	</tr>
	<?php
	$data = mysqli_query($koneksi,"select * from pelanggan");
	while($d= mysqli_fetch_array($data)){
		?>
		<tr>
			<th><?php echo $d['nama_pelanggan'];?></th>
			<th><?php echo $d['no_tlp'];?></th>
            <th><?php echo $d['status'];?></th>
		</tr>
	<?php
	}
	?>
	</table>
	</body>
	</html>