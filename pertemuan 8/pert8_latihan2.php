<html>
<head><title>Contoh Penggunaan UDF</title></head>
<body>
<! Menentukan Form Input>
<form method="post" action="pert8_latihan2.php" >
Masukkan Bilangan Pertama : <br>
<input type="text" name="nilai1" size=10><br>
Masukkan Bilangan Kedua : <br>
<input type="text" name="nilai2" size=10><br>
<input type="submit" value="hitung" name="hitung">
</form>
<!membandingkan 2 buah bilangan yang diinput>
<?php

if (isset($_POST['hitung'])) {
    $A=$_POST['nilai1'];
    $B=$_POST['nilai2'];
    function jumlah($A, $B)
    {
        $jumlahbil=$A + $B;
        return $jumlahbil;
    }
    function kurang($A, $B)
    {
        $kurangbil=$A - $B;
        return $kurangbil;
    }
    function kali($A, $B)
    {
        $kalibil=$A * $B;
        return $kalibil;
    }
    function bagi($A, $B)
    {
        $bagibil=$A / $B;
        return $bagibil;
    }

    echo "<br>";
    echo("Bilangan Pertama : ");
    echo $A;
    echo "<br>";
    echo("Bilangan Kedua : ");
    echo $B;
    echo "<br><br>";
    echo "Hasil Penjumlahan 2 buah bilangan ";
    echo "<br>";
    $jumlahbil=jumlah($A, $B);
    Printf("Penjumlahan antara : %d + %d = %d ", $A, $B, $jumlahbil);
    echo "<br><br>";
    echo "Hasil Pengurangan 2 buah bilangan ";
    echo "<br>";
    $kurangbil=kurang($A, $B);
    Printf("Pengurangan antara : %d - %d = %d ", $A, $B, $kurangbil);
    echo "<br><br>";
    echo "Hasil Perkalian 2 buah bilangan ";
    echo "<br>";
    $kalibil=kali($A, $B);
    Printf("Perkalian antara : %d * %d = %d ", $A, $B, $kalibil);
    echo "<br><br>";
    echo "Hasil Pembagian 2 buah bilangan ";
    echo "<br>";
    $bagibil=bagi($A, $B);
    Printf("Pembagian antara : %d / %d = %d ", $A, $B, $bagibil);
    echo "<br><br>";
}
?>
</body>
</html>