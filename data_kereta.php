<?php
class Kereta extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $datakereta = mysqli_query($this->koneksi, "SELECT * from kereta");
        // var_dump($datalogin);
        return $datakereta;
    }

    // Menambah Data
    public function create($nama_kereta,$asal,$tujuan,$jam_pergi,$jam_sampai,$harga)
    {
        mysqli_query(
            $this->koneksi,
            "INSERT into kereta values(null,'$nama_kereta','$asal','$tujuan','$jam_pergi','$jam_sampai','$harga')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $datakereta = mysqli_query(
            $this->koneksi,
            "SELECT * from kereta where id='$id'"
        );
        return $datakereta;
    }

    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $datakereta = mysqli_query(
            $this->koneksi,
            "SELECT * from kereta where id='$id'"
        );
        return $datakereta;
    }
    // mengupdate data berdasarkan id
    public function update($nama_kereta,$asal,$tujuan,$jam_pergi,$jam_sampai,$harga)
    {
        mysqli_query(
            $this->koneksi,
            "UPDATE kereta set
            nama_kereta='$nama_kereta',
            asal='$asal',
            tujuan='$tujuan',
            jam_pergi='$jam_pergi',
            jam_sampai='$jam_sampai',
            harga='$harga' where id='$id'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "DELETE from kereta where id='$id'");
    }
}
?>