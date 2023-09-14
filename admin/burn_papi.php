<?php
#for start
include "sql_connect.php";
$id=$_GET['id'];
for($x=1;$x<=90;$x++)
{
$rumus="select * from jawaban where user_name='$_GET[id]' and kode_soal='iv-$x'";
echo $rumus;
$query=mysql_query($rumus);
$row=mysql_fetch_array($query);
$query4=mysql_query("select grade from papi_key where no_papi='$x' and jawaban='$row[jawaban]'");
echo "select grade from papi_key where no_papi='$x' and jawaban='$row[jawaban]'";
$ar=mysql_fetch_array($query4);
if($ar['grade'] != "")
{
$query5=mysql_query("insert into papi values('','$id','iv-$x','$test','$ar[grade]')");
echo "insert into papi values('','$id','iv-$x','$test','$ar[grade]')"."<br>";
if($ar['grade'] == "g") { $g=$g+1; }
if($ar['grade'] == "a") { $a=$a+1; }
if($ar['grade'] == "x") { $xx=$xx+1; }
if($ar['grade'] == "b") { $b=$b+1; }
if($ar['grade'] == "z") { $z=$z+1; }
if($ar['grade'] == "k") { $k=$k+1; }
if($ar['grade'] == "e") { $e=$e+1; }
if($ar['grade'] == "o") { $o=$o+1; }
if($ar['grade'] == "d") { $d=$d+1; }
if($ar['grade'] == "n") { $n=$n+1; }
if($ar['grade'] == "s") { $s=$s+1; }
if($ar['grade'] == "c") { $c=$c+1; }
}
}
$query6=mysql_query("insert into papi_raw values('','$id','$g','$a','$xx','$b','$z','$k','$e','$o','$d','$n','$s','$c')");
echo "insert into papi_raw values('','$id','$g','$a','$xx','$b','$z','$k','$e','$o','$d','$n','$s','$c')";
$query7=mysql_query("select * from basic_papi");
$komit=($g+$n)/2; $komit=floor($komit);
$nurtu=($s+$o)/2; $nurtu=floor($nurtu);
while($ro=mysql_fetch_array($query7)) { 
if($ro['grade'] == 'n' && $ro['nilai'] == $komit) { $n_get=$ro['norma']; } //komitmen pada tugas
if($ro['grade'] == 's' && $ro['nilai'] == $s) { $s_get=$ro['norma']; } // hubungan interpersonal 
if($ro['grade'] == 's' && $ro['nilai'] == $nurtu) { $nur_get=$ro['norma']; } // nurturance
if($ro['grade'] == 'c' && $ro['nilai'] == $c) { $c_get=$ro['norma']; } // sistematika kerja
if($ro['grade'] == 'a' && $ro['nilai'] == $a) { $a_get=$ro['norma']; } // Motivasi Berprestasi
if($ro['grade'] == 'z' && $ro['nilai'] == $z) { $z_get=$ro['norma']; } //  Mobilitas
if($ro['grade'] == 'k' && $ro['nilai'] == $k) { $k_get=$ro['norma']; } // agresifitas verbal
if($ro['grade'] == 'e' && $ro['nilai'] == $e) { $e_get=$ro['norma']; } // emosi	
if($ro['grade'] == 'x' && $ro['nilai'] == $xx) { $x_get=$ro['norma']; } // kepercayaan
//if($ro['grade'] == 'n' && $ro['nilai'] == $n) { $n_get=$ro['norma']; }
//if($ro['grade'] == 'n' && $ro['nilai'] == $n) { $n_get=$ro['norma']; }
if($ro['grade'] == 'b' && $ro['nilai'] == $b) { $b_get=$ro['norma']; } // Kerjasama
if($ro['grade'] == 'd' && $ro['nilai'] == $d) { $d_get=$ro['norma']; } // ketelitian dan detail
}
$query8=mysql_query("insert into papi_final values('','$id','$n_get','$s_get','$nur_get','$c_get','$a_get','$z_get','$k_get','$e_get','$x_get','$b_get','$d_get')");
echo "insert into papi_final values('','$id','$n_get','$s_get','$nur_get','$c_get','$a_get','$z_get','$k_get','$e_get','$x_get','$b_get','$d_get')";
echo "<script>alert('sukses cek nilai papi');</script>";
?>
<script language="javascript">document.location.href="menu.php?data=monitoring_&update=yes";</script>