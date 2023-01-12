<?php
//untuk menghubungkan file koneksi
include 'koneksi.php';

//menangkap data yang dikirim dari form
if(isset($_POST['input'])){
    $username = $_POST['username'];
    $password = $_POST['password'];


    //ambil data dari database tabel login yang sesuai
    $data = mysqli_query($koneksi,"SELECT * FROM login mahasiswa WHERE username='$username' AND password='$password'");

    if(mysqli_num_rows($data)){
        echo " Selamat Login Anda Telah Berhasil";
    }else{
        echo " Maaf Login  Anda Gagal,Silakan Coba Lagi";
    }
}

?>