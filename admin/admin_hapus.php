<?php 
include '../koneksi.php';

$id = $_GET['id'];

$sql_h = "DELETE FROM tb_daftar WHERE id = '$id'";
$query = mysqli_query($koneksi, $sql_h);

if ($query) {
	header("location: ../data_user.php");
}else{
	echo "gagal dihapus";
}
 ?>

