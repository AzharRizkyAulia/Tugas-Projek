<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Home</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">E-Ticket<i class="bi bi-menu-button-wide"></i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="home.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="pemesanan.php">Pesan Tiket</a></li>
                        <li class="nav-item"><a class="nav-link" href="../login.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header - set the background image for the header in the line below-->
        <header class="py-5 bg-image-full" style="background-image: url('images/train2.jpg')">
            <div class="text-center my-5">
                <img class="img-fluid rounded-circle mb-4" src="images/pesan2.jpg" alt="..." />
                <h1 class="text-black fs-3 fw-bolder">Pemesanan Tiket</h1>
                <p class="text-black-50 mb-0">Layanan Pemesanan Tiket Kereta Api</p>
            </div>
        </header>
        <!-- Content section-->
        <div class="container">
            <div class="card mt-5 mb-5">
                <div class="card-header">
                    Pemesanan Tiket
                </div>
                <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Pemesan</label>
                        <input type="nama_pemesan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="exampleInputEmail1">Tanggal Pemesanan</label>
                        <input type="tanggal_pemesanan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>

                    <div class="form-group mt-3">
                        <label for="exampleInputEmail1">Nama Kereta & Jurusan</label>
                        <select name ="id_kereta" class="form-control">
                        <?php
                            include '../../koneksi.php';
                            $kereta =  new Kereta();
                            foreach ($kereta->index() as $data){
                        ?>
                            <option value="<?php echo $data['id'] ?>"><?php echo $data['nama_kereta'] ?> |
                            Jurusan : <?php echo $data['asal'] ?> - <?php echo $data['tujuan'] ?> |
                            <?php echo $data['jam_pergi'] ?> - <?php echo $data['jam_sampai'] ?></option>

                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group mt-3">
                        <label for="exampleInputEmail1">Jumlah Tiket</label>
                        <input type="jumlah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
            </div>
        </div>
</div>
        <!-- Footer-->
        <footer class="py-3 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
