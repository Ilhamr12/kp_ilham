<?php 
require_once("koneksi.php");
error_reporting(0);
session_start();
 ?>
 
<?php 
	include 'koneksi.php';
	$id = $_GET['id_karyawan'];
	$data = mysqli_query($koneksi, "SELECT * FROM tb_karyawan WHERE id_karyawan = '$id'");
    while ($d = mysqli_fetch_array($data)) {
      
 ?>

<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Data Karyawan</title>

    <!-- Fontfaces CSS-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all">
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="view/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="view/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="view/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="view/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <title>Ubah Data</title>
</head>
<body>
<form action="proedit_karyawan.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">NIP</label>
  <input type="text" class="form-control" readonly="" name="id_karyawan" autocomplete="off" value="<?php echo $d['id_karyawan'];?>">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">username</label>
  <input type="text" class="form-control" name="username" autocomplete="off" value="<?php echo $d['username'];?>">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">password</label>
  <input type="text" class="form-control"  name="password" autocomplete="off">
    
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Nama</label>
    <input type="text" class="form-control" name="nama" autocomplete="off" value="<?php echo $d['nama'];?>">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Tempat dan Tanggal Lahir</label>
    <input type="text" class="form-control" name="tmp_tgl_lahir" autocomplete="off" value="<?php echo $d['tmp_tgl_lahir'];?>">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Jenis Kelamin</label>
      <select class="form-control" name="jenis_kelamin">
      <option><?php echo $d['jenis_kelamin']; ?></option>
      <option>Laki-laki</option>
      <option>Perempuan</option>
      </select>
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Agama</label>
    <select class="form-control" name="agama">
    <option><?php echo $d['agama']; ?></option>
    <option>Islam</option>
    <option>Kristen</option>
    <option>Katholik</option>
    <option>Hindu</option>
    <option>Buddha</option>
    <option>KongHuCu</option>
    </select>
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <textarea autocomplete="off" class="form-control" name="alamat" value="<?php echo $d['alamat'];?>"></textarea>
  
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Telepon</label>
   <input type="text" class="form-control"  name="no_tlp" value="<?php echo $d['no_tlp'];?>">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Jabatan</label>
    <select class="form-control" name="jabatan">
    <?php 
    include 'koneksi.php';
    $sql = "SELECT * FROM tb_jabatan";
    $hasil = mysqli_query($koneksi, $sql);
    $no = 0;
    while ($data = mysqli_fetch_array($hasil)) {                                         
    $no++;
    ?>
    <option value="<?php echo $data['jabatan'];?>"><?php echo $data['jabatan']; ?></option>
    <?php } ?>                                             
    </select>
 <div class="form-group">
    <label for="exampleInputPassword1">Foto</label><br>
  <?php 
  if ($d['foto']!=''){
    echo "<img src=\"images/$d[foto]\" height=150 />";  
    }
  else{
    echo "tidak ada gambar";
  }
   ?>
  </div>

  <div class="form-group">
    <label>FOTO</label>
      <input type="checkbox" name="ubahfoto" value="true"> Ceklis jika ingin mengubah foto !
      <br>
      <input type="file" name="inpfoto">
  </div>
  <button type="submit" class="btn btn-primary" name="ubahdata">Ubah Data</button>
</form>
</body>
</html>

<?php } ?>
