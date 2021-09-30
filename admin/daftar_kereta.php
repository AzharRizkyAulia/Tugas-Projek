<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Startmin</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="../Home/home.php"><i class="fa fa-home fa-fw"></i> Website</a></li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

            <ul class="nav" id="side-menu">
                    <li>
                        <a href="home.php" class="active"><i class="fa fa-person-fill fa-fw"></i> Daftar Akun User</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-person-fill fa-fw"></i> Pendataan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="kereta.php">Data Kereta</a>
                            </li>
                            <li>
                                <a href="kelas.php">Data Kelas Kereta</a>
                            </li>
                            <li>
                                <a href="daftar_kereta.php">Daftar Data Kereta</a>
                            </li>
                            <li>
                                <a href="daftar_kelas.php">Daftar Data Kelas Kereta</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="login/login.php" class="active"><i class="fa fa-person-fill fa-fw"></i> Logout</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Daftar Kereta</h1>
                </div>
            </div>
    <br>
    <table class="table mt-5">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Kereta</th>
                <th>Asal</th>
                <th>Tujuan</th>
                <th>Jam Pergi</th>
                <th>Jam Sampai</th>
                <th>Harga</th>
                <th colspan=2>Tindakan</th>
            </tr>
        </thead>
        <?php
                include '../koneksi.php';
                $datakereta = new Kereta();
                $no = 1;
                // var_dump($dosen->index());
                foreach ($datakereta->index() as $data) {
        ?>
        <tbody>
            <tr>
            <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nama_kereta']; ?></td>
                    <td><?php echo $data['asal']; ?></td>
                    <td><?php echo $data['tujuan']; ?></td>
                    <td><?php echo $data['jam_pergi']; ?></td>
                    <td><?php echo $data['jam_sampai']; ?></td>
                    <td><?php echo $data['harga']; ?></td>

                    <td>
                    <form action="edit_data_kereta.php?id=<?php echo $data['id']; ?>" method="post">
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                            <input type="hidden" name="aksi" value="update">
                            <button type="submit" name="save" class="btn btn-success">
                                Edit
                            </button>
                        </form>
                    </td>
                    <td>
                    <form action="proses_kereta.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                            <input type="hidden" name="aksi" value="delete">
                            <button type="submit" name="save"
                             onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')"
                             class="btn btn-danger">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
<?php
}
?>
        </tbody>
    </table>


            <!-- ... Your content goes here ... -->

        </div>
    </div>

</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/startmin.js"></script>

</body>
</html>
