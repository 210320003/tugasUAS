<?php
include'koneksi.php';
$id_satuan = $_GET['id_satuan'];
$query_delete = mysqli_query($koneksi,"DELETE FROM satuan WHERE id_satuan = '$id_satuan'")
or die(mysqli_error());
if($query_delete){
	header("location:tampilsatuan.php");
	
}else{
	echo mysqli_error();
}