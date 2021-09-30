<?php
class Kelas extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $datakelas = mysqli_query($this->koneksi, "SELECT * from kelas");
        // var_dump($datadosen);
        return $datakelas;
    }

    // Menambah Data
    public function create($nama_kelas,$harga)
    {
        mysqli_query(
            $this->koneksi,
            "INSERT into kelas values (null,'$nama_kelas','$harga')"
        );
    }

    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $datakelas = mysqli_query(
            $this->koneksi,
            "SELECT * from kelas where id='$id'"
        );
        return $datakelas;
    }
    // mengupdate data berdasarkan id
    public function update($id, $nama_kelas, $harga)
    {
        mysqli_query(
            $this->koneksi,
            "UPDATE kelas set 
            nama_kelas='$nama_kelas', 
            harga='$harga' where id='$id'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "DELETE from kelas where id='$id'");
    }
}
?>