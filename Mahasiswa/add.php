<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name ="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">" >
        <title>Aplikasi CRUD</title>
    </head>
    <Body>
        <div class="w-50 mx-auto border p-3 mt-5">
            <a href="index.php">Kembali ke home</a>
            <form action="add.php" method="post">
            <label for="nim">NIM</label>
            <input type="text" id="nim" nama="nim" class="form-control" required>

            <label for="nim">Nama Mahasiswa</label>
            <input type="text" id="nama" name="nama" class="form-control" required>

            <label for="jurusan">Jurusan</label>
            <select name="jurusan" id="jurusan" name="nama" class="form-select" required>
            <option>Pilih Jurusan</option>
                <option value="Informatika">Teknik Informatika</option>
                <option value="arsitek">Teknik Arsitek</option>
                <option value="sipil">Teknik Sipil</option>
                <option value="mesin">Teknik Mesin</option>
                <option value="elektro">Teknik Elektro</option>
           </select>
               <label for="nim">Alamat</label>
               <input type="text" id="alamat" name="alamat" class="form-control">
               
               <label for="nim">Telpon</label>
               <input type="text" id="telpon" name="telpon" class="form-control">

               <input class="btn btn-success mt-3" type="submit" value="Tambah Data">
</form>
</div>
<?php
      if(isset($_POST['tambah'])){
           $nim = $_POST['nim'];
         $nama = $_POST['nama'];
         $jurusan = $_POST['jurusan'];
        $alamat = $_POST['alamat'];
       $telpon = $_POST['telpon'];

  $sqlInsert = "INSERT INTO mahasiswa(nim,nama,jurusan,alamat,telpon)
  VALUES ('$nim','$nama',$jurusan','$alamat','$telpon')";

  mysqli_query($conn, $sqlInsert);

}
?>
    </Body>
</html>