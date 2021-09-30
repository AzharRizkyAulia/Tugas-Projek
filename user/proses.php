<?php
include '../koneksi.php';
$reg = new Registrasi();

if (isset($_POST['simpan'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if ($aksi == "create") {
        $reg->create($email, $pass);
        header("location:login.php");
    }

}