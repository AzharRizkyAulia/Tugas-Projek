<?php
include '../../koneksi.php';
$reg = new Registrasi();

if (isset($_POST['simpan'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if ($aksi == "update") {
        $reg->update($id, $email, $pass);
        header("location:../home.php");
    } elseif ($aksi == "delete") {
        $reg->delete($id);
        header("location:home.php");
    }

}