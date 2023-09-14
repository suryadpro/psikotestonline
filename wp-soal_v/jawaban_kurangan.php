<?php session_start();
include "sql_connect.php";
$user_name=$_SESSION['user_name'];
$id=$_SESSION['user_id'];
if ($user_name == "")
{
	?> <script language="javascript">document.location.href="/psikotest_online/";</script> <?php
}
else
{
$query=mysql_query("select * from jawaban where jawaban='-' and user_name='$id'");
$cek=mysql_num_rows($query);
while($row=mysql_fetch_array($query))
#for start
{
    $x=$row['kode_soal'];
    $test=$_POST['jawaban'.$x];
	if ($test == "") { $test="-"; }
    $test2=$_POST['jawaban_b'.$x];
$query2=mysql_query("update jawaban set jawaban='$test' where kode_soal like '$x' and user_name='$id'");
}
$q2=mysql_query("SELECT a.jawaban_a,a.jawaban_b FROM jawaban_soal a,jawaban b
WHERE a.kode_soal=b.kode_soal AND b.jawaban='-' and user_name='$id'");
$cek2=mysql_num_rows($q2);
if ($cek2) {
    ?><script language="javascript">document.location.href="soal_kurangan.php";</script> </p><?php 
} else 
{
	$kode=mysql_query("update Hasil set tes4='ok',tanggal=date(now()) where user_name='$id'");
	$kode3=mysql_query("update register set status='ok' where user_name='$id'");
    ?> <script language="javascript">document.location.href="/psikotest_online/wp-user/logout.php";</script> <?php
}}
?>  