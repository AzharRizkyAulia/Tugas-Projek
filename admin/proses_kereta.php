<?php
include '../koneksi.php';
$datakereta = new Kereta();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $nama_kereta = $_POST['nama_kereta'];
    $asal = $_POST['asal'];
    $tujuan = $_POST['tujuan'];
    $jam_pergi = $_POST['jam_pergi'];
    $jam_sampai = $_POST['jam_sampai'];
    $harga = $_POST['harga'];

    if ($aksi == "create") {
        $datakereta->create($nama_kereta, $asal, $tujuan, $jam_pergi, $jam_sampai, $harga);
        header("location:daftar_kereta.php");
    } 
    elseif ($aksi == "update") {
        $datakereta->update($id, $nama_kereta, $asal, $tujuan, $jam_pergi, $jam_sampai, $harga);
        header("location:daftar_kereta.php");
    } 
    elseif ($aksi == "delete") {
        $datakereta->delete($id);
        header("location:daftar_kereta.php");
    }

}