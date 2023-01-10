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
$a=mysqli_query($koneksi,"insert into satuan values('','$nama')");
if ($a){
header("location:tampilsatuan.php");
}else{
	echo mysqli_error();
}
}

?>
<body>
<center><h2>Zodiac.com<h/2></center>
<br/>
<center><a href="tampilsatuan.php">KEMBALI<a/></center>
<center><h2><a href="index.php">HOME</a></h2></center>
<br/>
<br/>
<center><h3>TAMBAH JENIS SATUAN</h3></center>
<form method="POST">
<center><table></center>
	<tr>
	<td>Bentuk Satuan</td>
	<center><td><input type="text" name="nama"></td></center>
	</tr>
	<tr>
	<td></td>
	<center><td><input type="submit" name="save"><td></center>
	</tr>
	</table>
	</form>
	</body>
	</html>