<?php
class Registrasi extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $dataregister = mysqli_query($this->koneksi, "SELECT * from user");
        // var_dump($datalogin);
        return $dataregister;
    }

    // Menambah Data
    public function create($email, $pass)
    {
        mysqli_query(
            $this->koneksi,
            "INSERT into user values(null,'$email','$pass')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $datalogin = mysqli_query(
            $this->koneksi,
            "SELECT * from user where id='$id'"
        );
        return $dataregister;
    }

    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $dataregister = mysqli_query(
            $this->koneksi,
            "SELECT * from user where id='$id'"
        );
        return $dataregister;
    }
    // mengupdate data berdasarkan id
    public function update($id, $email, $pass)
    {
        mysqli_query(
            $this->koneksi,
            "UPDATE user set email='$email', pass='$pass' where id='$id'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "DELETE from user where id='$id'");
    }
}
?>