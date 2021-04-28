<HTML>
<HEAD>
<TITLE> Tanggal </TITLE>
</HEAD>
<BODY>
<font size="10px"> 
<?php
echo "Sekarang tanggal ";
echo date('d-F-Y');
echo "<br>dan jam ";
echo date('h:i:s A');
$a = date ("h");
if (($a>=6) && ($a<=11)){
echo "<br> Selamat Pagi !!";
}
else if(($a>11) && ($a<=15))
{
echo ", Selamat Pagi !!";}
else if (($a>15) && ($a<=18)){
echo ", Selamat Siang !!";}
else { echo "<br> Selamat Malam ";}
?>
</FONT>
</BODY>
</HTML> 
