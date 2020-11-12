<?php 
$koneksi = mysqli_connect("localhost", "root", "", "kp_ilham_ramadhan");

if (mysqli_connect_errno()) {
	echo "koneksi gagal " . mysql_connect_error();
}
 ?>