<?php
class Admin extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $dataregister = mysqli_query($this->koneksi, "SELECT * from admin_tiket");
        // var_dump($datalogin);
        return $dataadmin;
    }

    // Menambah Data
    public function create($email, $pass)
    {
        mysqli_query(
            $this->koneksi,
            "INSERT into admin_tiket values(null,'$email','$pass')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $dataadmin = mysqli_query(
            $this->koneksi,
            "SELECT * from admin_tiket where id='$id'"
        );
        return $dataadmin;
    }

    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $dataadmin = mysqli_query(
            $this->koneksi,
            "SELECT * from admin_tiket where id='$id'"
        );
        return $dataadmin;
    }
    // mengupdate data berdasarkan id
    public function update($id, $email, $pass)
    {
        mysqli_query(
            $this->koneksi,
            "UPDATE admin_tiket set email='$email', pass='$pass' where id='$id'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "DELETE from admin_tiket where id='$id'");
    }
}
?>