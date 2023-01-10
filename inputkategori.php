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
	$nama= $_POST['nama'];
$a=mysqli_query($koneksi,"insert into kategori values('','$nama')");
if ($a){
header("location:tampilkategori.php");
}else{
	echo mysqli_error();
}
}

?>
<body>
<center><h2>Zodiac.com<h/2></center>
<br/>
<center><a href="tampilkategori.php">KEMBALI<a/></center>
<center><h2><a href="index.php">HOME</a></h2></center>
<br/>
<br/>
<center><h3>TAMBAH DATA KATEGORI</h3></center>
<form method="POST">
	<center><table></center>
	<tr>
	<td>Nama Kategori</td>
	<td><input type="text" Name="nama"></td>
	</tr>
	<tr>
	<td></td>
	<td><input type="submit" name="save"><td>
	</tr>
	</table>
	</form>
	</body>
	</html>