<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
 {
 die('Could not connect: ' . mysqli_connect_error());
 }
mysqli_select_db($con,"web_latbase");
$input = mysqli_query($con,"INSERT INTO tbl_mhs (FirstName, LastName, Age)
VALUES ('Deden ', 'Sukandar', '23'),('Muhammad ', 'Ibnu', '26')");
// mysqli_query($con,"INSERT INTO tbl_mhs (FirstName, LastName, Age)
// VALUES ('Glenn', 'Gandari', '32')");
if  ($input)
{
    echo " Berhasil memasukan data";
}
else {
    echo " gagal memasukan data";
}
mysqli_close($con);
?> 