<?php
    class Mahasiswa extends Database
    {

        public function index()
        {
            $datapemesanan = mysqli_query($this->koneksi, 
           "SELECT pemesanan.nama_pemesan, kereta.asal, kereta.tujuan, kereta.nama_kereta,
           kereta.jam_pergi, kereta.jam_sampai, kereta.harga, kelas.nama_kelas, kelas.harga
           from pemesanan
           join kereta
           on kereta.id = pemesanan.id_kereta
           join kelas
           on kelas.id = pemesanan.id_kelas;
           ");

            return $datapemesanan;
        }
        public function create($id_kereta,$id_kelas,$nama_pemesan,$tanggal_pemesanan,$jumlah)
        {
            mysqli_query($this->koneksi,
                        "insert into mahasiswa values (null,'$id_kereta','$id_kelas','$nama_pemesan','$tanggal_pemesanan','$jumlah')"
                    );

        }
        public function edit($id)
        {
            $datapemesanan = mysqli_query($this->koneksi, 
                        "select * from pemesanan  where id='$id'"
                    );

            return $datapemesanan;
        }
         // mengupdate data berdasarkan id
        public function update($id, $id_kereta,$id_kelas,$nama_pemesan,$tanggal_pemesanan,$jumlah)
        {
            mysqli_query(
                $this->koneksi,
                "UPDATE pemesanan set nama_pemesan='$nama_pemesan', tanggal_pemesanan='$tanggal_pemesanan', jumlah='$jumlah' where id='$id'"
            );
        }

        // menghapus data berdasarkan id
        public function delete($id)
        {
            mysqli_query($this->koneksi, "DELETE from pemesanan where id='$id'");
        }
    }
?>