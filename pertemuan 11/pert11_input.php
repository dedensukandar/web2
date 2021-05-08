<html>
<?php
$con = mysqli_connect("localhost","root","","web_latbase");
if (!$con)
 {
 die('Could not connect: ' . mysqli_connect_error());
 }
$record = mysqli_query($con,"Select * from tbl_mhs");
?>
<body>
<form action="insert3.php" method="post">
Firstname: <input type="text" name="firstname" />
Lastname: <input type="text" name="lastname" />
Age: <input type="text" name="age" />
<input type="submit" />
</form>
<table border="1">
<thead>
<tr>
<th>ID</th>
<th>FirstName</th>
<th>LastName</th>
<th>Age</th>

</tr>
</thead>
<tbody>
<?php while ($query = mysqli_fetch_assoc($record)){

?>
<tr>
<td><?php echo $query["mhsID"]; ?></td>
<td><?php echo $query["FirstName"]; ?></td>
<td><?php echo $query["LastName"]; ?></td>
<td><?php echo $query["Age"]; ?></td>
</tr>
<?php }?>
</tbody>
</table>
</body>
</html>