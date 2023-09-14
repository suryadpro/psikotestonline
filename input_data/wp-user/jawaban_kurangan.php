<?php session_start();
include "sql_connect.php";
$user_name=$_SESSION['user_name'];
$query=mysql_query("select * from jawaban where jawaban='|||' and user_name='$user_name'");
$cek=mysql_num_rows($query);
while($row=mysql_fetch_array($query))
#for start
{
    $x=$row['kode_soal'];
    $test=$_POST['jawaban_a'.$x];
    $test2=$_POST['jawaban_b'.$x];
$query2=mysql_query("update jawaban set jawaban='|$test|$test2|' where kode_soal like 'iv-$x' and user_name='$user_name'");
}
$q2=mysql_query("SELECT a.jawaban_a,a.jawaban_b FROM jawaban_soal a,jawaban b
WHERE a.kode_soal=b.kode_soal AND b.jawaban='|||' and user_name='$user_name'");
$cek2=mysql_num_rows($q2);
if ($cek2) {
    ?><script language="javascript">document.location.href="soal_kurangan.php";</script> </p><?php 
} else 
{
	$kode=mysql_query("insert into tes values('$user_name',date(now()),time(now()))");
    ?> <script language="javascript">document.location.href="/wp-user/logout.php";</script> <?php
}
?>  