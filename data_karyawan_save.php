<?php
session_start(); 
include 'koneksi.php';
if (isset($_POST['simpan'])) {
	
	$id_karyawan = $_POST['id_karyawan'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$nama = $_POST['nama'];
	$tmp_tgl_lahir = $_POST['tmp_tgl_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$alamat = $_POST['alamat'];
	$no_tlp = $_POST['no_tlp'];
	$jabatan = $_POST['jabatan'];

	//untuk gambar
	$foto     = $_FILES['foto']['name'];
	$tmp      = $_FILES['foto']['tmp_name'];
	$fotobaru = date('dmYHis').$foto;
	$path     = "images/".$fotobaru;
}

if (move_uploaded_file($tmp, $path)) {
	$sql = "SELECT * FROM tb_karyawan WHERE id_karyawan = '".$id_karyawan."'";
	$tambah = mysqli_query($koneksi, $sql);
}

if ($row = mysqli_fetch_row($tambah)) {
echo "<script>alert('Data Dengan NIP = ".$id_karyawan." sudah ada') </script>";
		echo "<script>window.location.href = \"data_karyawan.php\" </script>";

}

$query = "INSERT INTO tb_karyawan set id_karyawan='$id_karyawan', username='$username', password='$password', nama='$nama', tmp_tgl_lahir='$tmp_tgl_lahir', jenis_kelamin='$jenis_kelamin', agama='$agama', alamat='$alamat', no_tlp='$no_tlp', jabatan='$jabatan', foto='$fotobaru'";
mysqli_query($koneksi, $query);

if ($query) {
	header("location: data_karyawan.php");
}else{
	echo "gagal";
}

 ?>