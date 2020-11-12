<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['user']);
unset($_SESSION['nama']);
unset($_SESSION['tmp_tgl_lahir']);
unset($_SESSION['jenis_kelamin']);
unset($_SESSION['agama']);
unset($_SESSION['alamat']);
unset($_SESSION['telepon']);
unset($_SESSION['jabatan']);
unset($_SESSION['foto']);
echo "<script>window.location='../'</script>";	
//session_destroy();
//  unset($_SESSION["sessidpks"]);
?>
