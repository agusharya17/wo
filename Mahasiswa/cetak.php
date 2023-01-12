<!DOCTYPE html>
<html>
    <head>
        <meta charsets="utf-8">
        <meta name="viewport" content="width=device-width, intial-scale=1">
        <title> Laporan Data Diri</title>
    </head>
    <body>
        <h2 align="center"> Laporan Data  Pengunjung</h2>

        <table border="1" align="center" width="100%">
          <tr>
            <th>Nama</th>
            <th>alamat</th>
            <th>Tanggal Datang</th>
            <th>Tanggal Pulang</th>
          </tr>
          <tr>
            <?php
              include 'koneksi.php';
              if(isset($_GET['cari'])){
                $pencarian = $_GET['cari'];
                $_query = "select * from mahasiswa Where Nama like '%".$pencarian or alamat like '%".$pencarian."%' or Tanggal datang like '%"
                .$pencarian."%' or Tanggal pulang like '%" order by Nama asc";
              }else{
                $query = "select * from mahasiswa order by Nama asc";
              }
              $tampil = mysqli_query($koneksi,$query);
              while($data = mysqli_fetch_array($tampil)){
                ?>
                <td><?php echo $data ['nama']; ?></td>
                <td><?php echo $data ['alamat']; ?></td>
                <td><?php echo $data ['Tanggal Datang']; ?></td>
                <td><?php echo $data ['Tanggal Pulang']; ?></td>
            
          </tr>
          <?php
              }
              ?>
        </table>
    </body>
</html>