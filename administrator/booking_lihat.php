<?php 
    include "login/koneksi.php";
    session_start();
    if(!isset($_SESSION['level'])){
        if (!isset($_SESSION['6LfQTxcUAAAAAH4-Boh5YZmTknrd7beQTh-Vtvr9'])) {
        ?>
        <script type="text/javascript">
            alert("Maaf anda tidak berhak mengakses halaman ini");
            window.location="login/index.php";
        </script>
        <?php
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="galileo.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="galileo.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="galileo.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="galileo.png">
    <link rel="apple-touch-icon-precomposed" href="galileo.png">
    <title>Glade Hotel</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <div id="wrapper" style="background-color: white;">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php"><img src="../logoku.png" width="100px"></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['6LfQTxcUAAAAAH4-Boh5YZmTknrd7beQTh-Vtvr9']; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                        <a href="settings.php"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="login/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="tambah_kamar.php"><i class="fa fa-fw fa-plus"></i> Tambah Kamar</a>
                    </li>
                    <li>
                        <a href="kamar_lihat.php"><i class="fa fa-fw fa-list-alt"></i> Lihat Kamar</a>
                    </li>
                    <li>
                        <a href="terbooking.php"><i class="fa fa-fw fa-book"></i> Booking Kamar</a>
                    </li>
                    <li>
                        <a href="booking_lihat.php"><i class="fa fa-fw fa-home"></i> Status Booking</a>
                    </li>
                    <li>
                        <a href="tambah_pegawai.php"><i class="fa fa-fw fa-plus"></i> Tambah Pegawai</a>
                    </li>
                    <li>
                        <a href="pegawai_lihat.php"><i class="fa fa-fw fa-list-alt"></i> Lihat Daftar Pegawai</a>
                    </li>
                     <li>
                        <a href="pengunjung.php"><i class="fa fa-fw fa-users"></i> Pengunjung</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>


        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-book"></i> Booking Hotel
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <h4>Daftar Booking Hotel</h4>
                        <form class="" method="POST">
                            <div class="col-lg-2">
                                <input type="text" name="cari" placeholder="Kode Booking" class="form form-control">
                            </div>
                                <input type="submit" name="tombol" value="Cari" class="btn btn-primary">
                        </form>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                    	<th>No</th>
                                        <th>Kode</th>
                                        <th>Id Kamar</th>
                                        <th>Nama Kamar</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <!-- <th>Batas Pembayaran</th> -->
                                        <th>Tgl Check In</th>
                                        <th>Tgl Check Out</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    @$cari = $_POST['cari'];
                                    if (!empty(@$_POST['tombol'])) {
                                    $sql = "SELECT * from booking, tb_kamar where booking.id_kamar = tb_kamar.id_kamar and booking.kode like '%$cari%'";
                                     }else{
                                    $sql = "SELECT * from booking, tb_kamar where booking.id_kamar = tb_kamar.id_kamar";
                                    }
                                    $querynya = $mysql->query($sql);
                                    $i=1;
                                    while ($informasi = mysqli_fetch_array($querynya)) {
                                    date_default_timezone_set("Asia/Jakarta");
                                    $hapus = date("Y-m-d H:i:s");
                                    $batas = $informasi['tgl_batas'];
                                    $kode = $informasi['kode'];

                                    if ($batas<=$hapus) {
                                        $mysql->query("DELETE FROM `booking` WHERE `booking`.`kode` ='$kode'");
                                    }else{
                                        ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $informasi['kode']; ?></td>
                                        <td><?php echo $informasi['id_kamar']; ?></td>
                                        <td><?php echo $informasi['nama_kamar']; ?></td>
                                        <td><?php echo $informasi['nama']; ?></td>
                                        <td><?php echo $informasi['email']; ?></td>
                                        <!-- <td><?php echo $informasi['tgl_batas']; ?></td> -->
                                        <td><?php echo $informasi['tgl_checkin']; ?></td>
                                        <td><?php echo $informasi['tgl_checkout']; ?></td>
                                        <td><?php echo "Rp. ".number_format($informasi['total'],2,",","."); ?></td>
                                        <?php
                                    }
                                        $status = $informasi['Status'];
                                        if ($status=='Dibayar') {
                                        	echo "<td><b>Dibayar</b></td>";
                                        }else{ ?>
                                        <td><a href="booking_bayar.php?kode=<?php echo $informasi['kode']; ?>" onclick="return confirm('Lanjutkan untuk Membayar ?');"><button>Bayar</button></a></td><?php } ?>
                                    </tr>
                                    <?php $i=$i+1;} ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="panel-footer">
                    <div class="footer">
                        Copyright &copy; 2018 | All Reserverd Rahadhian Dinnur Rahman
                    </div>
                </div>
                <!-- /.footer -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
    <script src="js/plugins/morris/morris.js"></script>
</body>
</html>
<?php include 'cek_pengunjung.php'; ?>