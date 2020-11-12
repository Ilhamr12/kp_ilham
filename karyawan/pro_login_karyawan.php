
<?php 

  include_once "../koneksi.php";

  $username = $_POST['username'];
  $pass = md5($_POST['password']);
  $sql = "SELECT * FROM tb_karyawan WHERE username='$username' AND password='$pass'";
 $login=mysqli_query($koneksi,$sql);
  $ketemu=mysqli_num_rows($login);
  $b=mysqli_fetch_array($login);

  if($ketemu>0){
    session_start();
    $_SESSION['id']   = $b['id_karyawan'];
    $_SESSION['user'] = $b['username'];
    $_SESSION['nama'] = $b['nama'];
    $_SESSION['tmp_tgl_lahir']  = $b['tmp_tgl_lahir'];
    $_SESSION['jenis_kelamin'] = $b['jenis_kelamin'];
    $_SESSION['agama'] = $b['agama'];
    $_SESSION['alamat'] = $b['alamat'];
    $_SESSION['telepon'] = $b['no_tlp'];
    $_SESSION['jabatan'] = $b['jabatan'];
    $_SESSION['foto'] = $b['foto'];
    header("location: index.php?m=awal");
}else{
    
    echo '<script language="javascript">';
        echo 'alert ("Username/Password ada yang salah, atau akun anda belum Aktif")';
    echo '</script>';
    header("location: login_karyawan.php");
}
  
 ?>

