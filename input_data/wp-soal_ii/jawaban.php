<?php session_start();
include "sql_connect.php";
$user_name=$_SESSION['user_name'];
$id=$_SESSION['user_id'];
if ($user_name == "")
{
	?> <script language="javascript">document.location.href="/psikotest";</script> <?php
}
else
{
echo "<script>alert('Terima kasih. Silahkan melanjutkan ke tahap ke III');</script>";
for($x=1;$x<=20;$x++)
{
$nomor=$_POST['jwb'.$x];
$rumus="insert into jawaban values('','$id','ii-$x','$nomor')";
$query=mysql_query($rumus);
$query2=mysql_query("select jawaban from kunci where kode='ii-$x'");
$ar=mysql_fetch_array($query2);
if($ar['jawaban'] == $nomor) { $skor=$skor+1; }
}
$query3=mysql_query("update skor_tes set skor_ii='$skor' where user_id='$id' order by id_skor desc limit 1");
$query4=mysql_query("update hasil set tes2='ok' where user_id='$id'"); 
if ($query) {
	$query4=mysql_query("update register set status='on progres 2' where user_id='$id'");
    ?> <script language="javascript">document.location.href="/psikotest/wp-soal_iii/welcome.php";</script> <?php
} else {
    echo "gagal";
}}
?>