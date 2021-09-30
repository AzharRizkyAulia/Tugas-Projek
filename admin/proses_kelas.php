<?php
include '../koneksi.php';
$datakelas = new Kelas();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $nama_kelas = $_POST['nama_kelas'];
    $harga = $_POST['harga'];

    if ($aksi == "create") {
        $datakelas->create($nama_kelas, $harga);
        header("location:daftar_kelas.php");
    } 
    elseif ($aksi == "update") {
        $datakelas->update($id, $nama_kelas, $harga);
        header("location:daftar_kelas.php");
    } 
    elseif ($aksi == "delete") {
        $datakelas->delete($id);
        header("location:daftar_kelas.php");
    }

}