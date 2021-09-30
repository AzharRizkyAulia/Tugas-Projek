<?php

class Database {
    public $host = "localhost", $user = "root", $password = "", $db = "projek_kereta";
    public $koneksi;

    public function __construct(){
        $this->koneksi = mysqli_connect(
            $this->host, 
            $this->user, 
            $this->password, 
            $this->db
        );
        if ( $this->koneksi ) {
            // echo "berhasil";
        } else {
            echo "Koneksi Database Gagal";
        }
    }
}

// data tabel dosen dan mahasiswa
include 'proses_registrasi.php';
include 'proses_registrasi_admin.php';
include 'proses_pemesanan.php';
include 'data_kereta.php';
include 'data_kelas.php';

// koneksi DB
$db = new Database();

?>