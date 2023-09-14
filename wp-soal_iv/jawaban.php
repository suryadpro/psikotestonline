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
echo "<script>alert('Terima kasih. Silahkan melanjutkan ke tahap ke V');</script>";
for($x=1;$x<=20;$x++)
{
$a=$_POST['a'.$x];
$b=$_POST['b'.$x];
$c=$_POST['c'.$x];
$d=$_POST['d'.$x];
$e=$_POST['e'.$x];
$f=$_POST['f'.$x];
$g=$_POST['g'.$x];
$h=$_POST['h'.$x];
$i=$_POST['i'.$x];
$j=$_POST['j'.$x];
$jawaban=$a.$b.$c.$d.$e.$f.$g.$h.$i.$j;
$rumus="insert into jawaban values('','$id','iv-$x','$a$b$c$d$e$f$g$h$i$j')";
$query=mysql_query($rumus);
$query2=mysql_query("select jawaban from kunci where kode='iv-$x'");
$ar=mysql_fetch_array($query2);
if($ar['jawaban'] == $jawaban) { $skor=$skor+1; }
}
$query3=mysql_query("update skor_tes set skor_iv='$skor' where user_id='$id' order by id_skor desc limit 1");
$query2=mysql_query("update hasil set tes4='ok' where user_id='$id'"); 
if ($query) {
	$query4=mysql_query("update register set status='on progres 4' where user_id='$id'");
    ?> <script language="javascript">document.location.href="/psikotest/wp-soal_v/welcome.php";</script> <?php
} else {
    echo "gagal";
}}
?>