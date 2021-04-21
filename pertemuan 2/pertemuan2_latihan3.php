<html>
<head>
    <title>Pertemuan 2 Latihan 3</title>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
<?php

    if(isset($_POST['hitung'])){
                                 
        $txt_1 = $_POST['txt_1'];
        $txt_2 = $_POST['txt_2'];
        $operator = $_POST['operator'];
                                                
            switch ($operator) {
                case 'tambah':
                    $hasil = $txt_1+$txt_2;
                break;
                case 'kurang':
                    $hasil = $txt_1-$txt_2;
                break;
                case 'kali':
                    $hasil = $txt_1*$txt_2;
                break;
                case 'bagi':
                    $hasil = $txt_1/$txt_2;
                break;
            }
    }
 
?>

<div class="hitung">
    <h1 class="Judul"><b>Perhitungan</b></h1>
        <form method="post" action="pertemuan2_latihan3.php">
            <input type="text" name="txt_1" class="Text" placeholder="Masukan Nilai pertama">
            <input type="text" name="txt_2" class="Text" placeholder="Masukan Nilai kedua">
                <select class="Operator" name="operator">
                    <option value="tambah">+</option>
                    <option value="kurang">-</option>
                    <option value="kali">x</option>
                    <option value="bagi">:</option>
                </select>
            <input type="submit" name="hitung" value="HITUNG" class="Tombol">
            <input type="submit" name="reset" value="RESET" class="Tombol"> 
        </form>

<?php if(isset($_POST['hitung'])){ ?>
<div><h3><b>Hasilnya : </b></h3></div>
    <input type="text" value="<?php echo $hasil; ?>" class="Text">
<?php }else{ ?>
<?php } ?>

</div>

</body>
 
</html>

 
 
