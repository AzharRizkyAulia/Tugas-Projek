<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pengisian Data Kereta</title>

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
                    <h1 class="page-header">Pendataan Kereta Api</h1>
                </div>
            </div>
    <br>
    
                <form action="proses_kereta.php" method="POST">
            <div class="form-group">
            <input class="form-control" type="hidden" name="aksi" value="create">
                <label>Nama Kereta</label>
                <input type="text" class="form-control"  name="nama_kereta" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label>Asal</label>
                <input type="text" class="form-control"  name="asal" required>
                </div>
                <div class="form-group col-md-6">
                <label>Tujuan</label>
                <input type="text" class="form-control"  name="tujuan" required>
                </div>
                <div class="form-group col-md-6">
                <label>Jam Pergi</label>
                <input type="time" class="form-control"  name="jam_pergi" required>
                </div>
                <div class="form-group col-md-6">
                <label>Jam Sampai</label>
                <input type="time" class="form-control" name="jam_sampai" required>
                </div>
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="number" class="form-control" name="harga" required>
            </div>
            <button type="submit" class="btn btn-primary" name="save">Tambahkan</button>
            </form>

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