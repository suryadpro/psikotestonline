<?php
$host="localhost";
$user="root";
//$password="p3rs4d@20o9";
$password="";
$database="psikotest_online";
$koneksi=mysql_connect("$host","$user","$password");
mysql_select_db($database,$koneksi);
if($koneksi)
{
    echo "";
}
else
{
    echo "gagal";
}
?>