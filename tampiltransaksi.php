</html>
	<head>
	<center><title>Zodiac.com</title><center>
    <link rel="stylesheet" type="text/css" href="bg.css">
	</head>
	<body>
	<h2>Zodiac.com</h2>
	<br/>
	<center><a href="inputtransaksi.php">+ TAMBAH TRANSAKSI</a></center>
	<center><h2><a href="index.php">HOME</a></h2></center>
	<br/>
	<center><table border="1"></center>
	<tr>
		<th>Nama Transaksi</th>
		<th>Tgl Transaksi</th>
		<th>Harga</th>
		<th>Qty</th>
		<th>Id Barang</th>
		<th>Diskon</th>
		<th>Id Pelanggan</th>
		<th>Total</th>
		<th>OPSI</th>
	</tr>
	<?php
	include 'koneksi.php';
	$no =1;
	$data = mysqli_query($koneksi,"select * from transaksi left join pelanggan on transaksi.id_pelanggan=pelanggan.id_pelanggan");
	while($d= mysqli_fetch_array($data)){
		?>
		<form method="POST">
		<tr>
		<tr>
			<th><?php echo $d['nama_transaksi']; ?></th>
			<th><?php echo $d['tgl_transaksi']; ?></th>
			<th><?php echo $d['harga']; ?></th>
			<th><?php echo $d['qty']; ?></th>
			<th><?php echo $d['id_barang']; ?></th>
			<th><?php echo $d['diskon']; ?></th>
			<th><?php echo $d['id_pelanggan']; ?></th>
			<th><?php echo $d['total']; ?></th>
			<td>
				<a href="edittransaksi.php?id_transaksi=<?php echo $d['id_transaksi']; ?>">EDIT</a>
				<a href="hapustransaksi.php?id_transaksi=<?php echo $d['id_transaksi']; ?>">HAPUS</a>
            </td>
		</tr>
	<?php
	}
	?>
	</table>
	</body>
	</html>