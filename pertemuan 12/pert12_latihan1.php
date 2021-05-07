<?php 
$con = mysqli_connect("localhost","root","","web_latihan12"); 
if (!$con) 
 { 
 die('Could not connect: ' . mysqli_connect_error()); 
  
 }

mysqli_select_db($con,"web_latihan12"); 
mysqli_query($con,"UPDATE tbl_mhs SET Age = '36' 
WHERE FirstName = 'Karina' AND LastName = 'Suwandi'");
echo " Berhasil Rubah Data"; 
mysqli_close($con); 
?>