<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Buku Tamu Sederhana</title>
  </head>
  <body>
 <!-- Karya Deden Sukandar,Jangan dimaling ya guys -->
  <?php include ("koneksi.php"); 
$query = mysqli_query($connection,"SELECT * FROM kunjungan ");
?>

  <div class="container">
  <h2>Data Pengunjung</h2>
  <p>Input Data Pengunjung</p>
  <form class="form-horizontal" action="insert.php" method="POST">
  <div class="input-group mb-3">
  <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Pengunjung" autofocus>
</div>
<div class="input-group mb-3">
  <input type="text" class="form-control" name="ttl" placeholder="Tempat Tanggal Lahir" >
</div>
<div class="input-group mb-3">
  <input type="text" class="form-control" name="alamat" placeholder="Alamat Pengunjung" >
</div>
<div class="input-group mb-3">
  <input type="text" class="form-control" name="no_hp" placeholder="Nomor HP Pengunjung" >
  <input type="hidden" name="tgl_kunjungan" value="<?php echo date("Y-m-d"); ?>">
</div>
<button type="submit" class="btn btn-primary" name="submit">Tambah Data</button>
  </form>
  <center><div>Data Pengunjung Per  <?php echo date('d F Y h:i:s A'); ?></div></center>
  <br>
  <div class="row">
  <div class="col">
  <table class="table table-sm table-striped">
  <thead>
    <tr>
      
      <th scope="col">ID</th>
      <th scope="col">Nama Pengunjung</th>
      <th scope="col">Tempat Tanggal Lahir</th>
      <th scope="col">Alamat</th>
      <th scope="col">No HP</th>
      <th scope="col">Waktu Kunjungan</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  <?php 
            while($tamu = mysqli_fetch_assoc($query)){
        ?>
    <tr>
      
      <th scope="row"><?php echo $tamu["id"]; ?></th>
      <td><?php echo $tamu["nama"]; ?></td>
      <td><?php echo $tamu["ttl"]; ?></td>
      <td><?php echo $tamu["alamat"]; ?></td>
      <td><?php echo $tamu["no_hp"]; ?></td>
      <td><?php echo $tamu["tgl_kunjungan"]; ?></td>
      <td><a href="delete.php?id=<?= $tamu['id'] ?>" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ini?')">DELETE</a></td>
      
    </tr>
    <?php } ?>
  </tbody>
</table>
                    </div>
  </div>


     </body>
</html>
