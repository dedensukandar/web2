<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
 {
 die('Could not connect: ' . mysqli_connect_error());
 }
mysqli_select_db($con,"web_latbase");
$sql=mysqli_query($con,"INSERT INTO tbl_mhs (FirstName, LastName, Age) 
VALUES
('$_POST[firstname]','$_POST[lastname]','$_POST[age]')");
if (!$sql)
 {
 die('Error: ' . mysqli_connect_error());
 }
echo "1 record added,<a href = pert11_input.php>Kembali</a>";
mysqli_close($con)
?> 