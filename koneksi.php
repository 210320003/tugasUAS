<?php 
$koneksi = mysqli_connect("localhost","root","","cupcup");
if (mysqli_connect_errno()){
	echo "Koneksi gagal : " . mysqli_connect_error();
}else{
	echo "koneksi berhasil";
}
?>