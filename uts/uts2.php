<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>UTS</title>
  </head>
  <body>
  <?php

if(isset($_POST['submit'])){
                             
    $wilayah = $_POST['wilayah'];
    $jmlp = $_POST['jmlp'];
    $jmln = $_POST['jmln'];
    $jmls = $_POST['jmls'];
    $jmlm = $_POST['jmlm'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    
                                            
}

?>

  <div class="container">
  <h2>UTS WEB 2</h2>
  <p>Input Data Corona 2021</p>
  <form class="form-horizontal" action="uts2.php" method="POST">
  <div class="input-group mb-3">
    
    <select name="wilayah" class="form-control" id="wilayah" placeholder="Pilih Wilayah">
        <option value="DKI Jakarta" selected>DKI Jakarta</option>
        <option value="Jawa Barat">Jawa Barat</option>
        <option value="Banten">Banten</option>
        <option value="Jawa Tengah">Jawa Tengah</option>
        
    </select>
  </div>
  <div class="input-group mb-3">
  <input type="text" class="form-control" name="jmlp" placeholder="Jumlah Positif" >
</div>

<div class="input-group mb-3">
  <input type="text" class="form-control" name="jmln" placeholder="Jumlah Negatif" >
</div>
<div class="input-group mb-3">
  <input type="text" class="form-control" name="jmls" placeholder="Jumlah Sembuh" >
</div>
<div class="input-group mb-3">
  <input type="text" class="form-control" name="jmlm" placeholder="Jumlah Meninggal" >
</div>
<div class="input-group mb-3">
  <input type="text" class="form-control" name="nama" placeholder="Nama Mahasiswa" >
</div>
<div class="input-group mb-3">
  <input type="text" class="form-control" name="nim" placeholder="NIM" >
</div>
<button type="submit" class="btn btn-primary" name="submit">Tambah Data</button>
  </form>


<?php if(isset($_POST['submit'])){ ?>
<center> <div>Data Pemantauan Covid19 Wilayah <?php echo $wilayah;?></div>
<div>Per <?php echo date('d F Y h:i:s A'); ?></div>
<div><?php echo $nama;?>/<?php echo $nim;?>
</center>
<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Jumlah Positif</th>
      <th scope="col">Jumlah Negatif</th>
      <th scope="col">Jumlah Sembuh</th>
      <th scope="col">Jumlah Meninggal</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td><?php echo $jmlp;?></td>
      <td><?php echo $jmln;?></td>
      <td><?php echo $jmls;?></td>
      <td><?php echo $jmlm;?></td>
     
    </tr>
  </tbody>
</table>

<?php }else{ ?>
<?php } ?>
</div>
     </body>
</html>