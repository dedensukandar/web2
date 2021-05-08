<?php
 $con = mysqli_connect("localhost","root","","web_latbase");
 // mysql_select_db("lat_dbase");
 $hasil=mysqli_query($con,"select * from tbl_mhs");
 While($data=mysqli_fetch_row($hasil))
 {
 echo "$data[0] $data[1] $data[2] $data[3]<br>";
 }
?>