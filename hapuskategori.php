<?php
include'koneksi.php';
$id_kategori = $_GET['id_kategori'];
$query_delete = mysqli_query($koneksi,"DELETE FROM kategori WHERE id_kategori='$id_kategori'")
or die(mysqli_error());
if($query_delete){
	header("location:tampilkategori.php");
	
}else{
	echo mysqli_error();
}