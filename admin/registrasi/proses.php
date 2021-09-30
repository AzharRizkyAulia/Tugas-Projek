<?php
include '../../koneksi.php';
$reg = new Admin();

if (isset($_POST['simpan'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if ($aksi == "create") {
        $reg->create($email, $pass);
        header("location:../login/login.php");
    } elseif ($aksi == "update") {
        $reg->update($id, $email, $pass);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $reg->delete($id);
        header("location:index.php");
    }

}