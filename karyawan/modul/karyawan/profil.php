<?php 
error_reporting(0);

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="view/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="view/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="view/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="view/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>
<?php date_default_timezone_set('Asia/Jakarta'); ?>
<body>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="#">
                           
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="?m=awal">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li> 
                        <li>
                            <a href="?m=karyawan&s=profil">
                            <i class="fas fa-user"></i>Account</a>
                        </li>
                        <li>
                            <a href="logout.php">
                            <i class="fas fa-power-off"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="?m=awal">
                    <h1>Karyawan</h1>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="?m=awal"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li> 
                        <li>
                            <a href="?m=karyawan&s=profil">
                            <i class="fas fa-user"></i>Account</a>
                        </li>
                        <li>
                            <a href="logout.php">
                            <i class="fas fa-power-off"></i>Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" value="Profil" readonly="" />
                           
                            </form>
                            <div class="header-button">
                               
                                 <?php
                                    $id = $_SESSION['idsi'];
                                    include '../koneksi.php';
                                    $sql = "SELECT * FROM tb_karyawan WHERE id_karyawan = '$id'";
                                    $query = mysqli_query($koneksi, $sql);
                                    $r = mysqli_fetch_array($query);

                                     ?>

                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="../images/<?php echo $r['foto'];?>" class="img-circle" alt="<?php echo $r['nama'];?>" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $r['nama']; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                         <img src="../images/<?php echo $r['foto'];?>" class="img-circle" \ />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $r['nama']; ?></a>
                                                    </h5>
                                                    
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="?m=karyawan&s=profil">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php"><i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1" style="text-align: center;">Profil anda <?php echo $_SESSION['namasi']; ?></h2>
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        
                                </div>
                            </div>
                        </div>

                        <!-- FORM -->
                        <div class="row">
                           <div class="table-responsive table--no-card m-b-30">
                                <form action="modul/karyawan/keterangan_sv.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        
                                        <?php
                                        $id = $_SESSION['idsi'];
                                        include 'koneksi.php';
                                        $sql = "SELECT * FROM tb_karyawan WHERE id_karyawan = '$id'";
                                        $query = mysqli_query($koneksi, $sql);
                                        $r = mysqli_fetch_array($query);

                                        ?>

                                        <table class="table table-borderless table-striped table-earning" >
                                            <tbody>
                                                <tr>
                                                    <td>NIP</td>
                                                    <td>
                                                        <?php echo $r['id_karyawan'];?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nama</td>
                                                    <td><?php echo $r['nama'];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Tempat & tanggal lahir</td>
                                                    <td><?php echo $r['tmp_tgl_lahir'];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Jenis Kelamin</td>
                                                    <td><?php echo $r['jenis_kelamin'];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Agama</td>
                                                    <td><?php echo $r['agama'];?></td>
                                                </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td><?php echo $r['alamat'];?></td>
                                            </tr>
                                            <tr>
                                                <td>Nomor telepon</td>
                                                <td><?php echo $r['no_tlp'];?></td>
                                            </tr>
                                            <tr>
                                                <td>Jabatan</td>
                                                <td><?php echo $r['jabatan'];?> </td>
                                            </tr>
                                            <tr>
                                                <td>Foto</td>
                                                <td><img src="../images/<?php echo $r['foto'];?>" style="width: 128px;height: 128px;"></td>
                                            </tr>
                                                <tr>
                                                    <td><a href="?m=karyawan&s=edit&id_karyawan=<?php echo $id;?>">EDIT</a></td>
                                                </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                </form> 
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="view/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="view/bootstrap-4.1/popper.min.js"></script>
    <script src="view/bootstrap-4.1/bootstrap.min.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
