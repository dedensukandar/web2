<?php 
$con = mysqli_connect("localhost","root",""); 
if (!$con) 
 { 
 die('Could not connect: ' . mysqli_connect_error()); 
 } 
mysqli_select_db($con,"web_latihan12"); 
mysqli_query($con,"DELETE FROM tbl_mhs WHERE LastName='Prabowo'"); 
echo " berhasil Hapus Data";
?> 