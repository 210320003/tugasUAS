<?php
include'koneksi.php';
$id_barang = $_GET['id_barang'];
$query_delete = mysqli_query($koneksi,"DELETE FROM barang WHERE id_barang='$id_barang'")
or die(mysqli_error());
if($query_delete){
	header("location:tampilbarang.php");
	
}else{
	echo mysqli_error();
}