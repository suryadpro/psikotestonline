<?php
$host="localhost";
$user="root";
#$password="p3rs4d@20o9";
$password="P4d@2023!";
$database="psikotest_online";
#$koneksi=mysql_connect("$host","$user","$password");
$koneksi=mysqli_connect("$host","$user","$password");
mysqli_select_db($koneksi, $database);
/*mysql_select_db($database,$koneksi);
if($koneksi)
{
    echo "";
}
else
{
    echo "gagal";
}*/
?>