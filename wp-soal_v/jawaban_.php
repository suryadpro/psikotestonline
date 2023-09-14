<?php session_start();
include "sql_connect.php";
$user_name=$_SESSION['user_name'];
$id=$_SESSION['user_id'];
$g=0;$a=0;$xx=0;
$b=0;$z=0;$k=0;
$e=0;$o=0;$d=0;
$n=0;$s=0;$c=0;
for($x=1;$x<=90;$x++)
#for start
{
echo $x;
    $test=$_POST['jawaban'.$x];
	if ($test == "") { $test="-"; }
    $test2=$_POST['jawaban_b'.$x];
	
echo "insert into jawaban values('','$id','iv-$x','$test')";
echo"<br>";
$query4=mysql_query("select grade from papi_key where no_papi='$x' and jawaban='$test'");
$ar=mysql_fetch_array($query4);
if($ar['grade'] != "")
{
//$query5=mysql_query("insert into papi values('','$id','iv-$x','$test','$ar[grade]')");
if($ar['grade'] == "g") { $g=$g+1; }
if($ar['grade'] == "a") { $a=$a+1; }
if($ar['grade'] == "x") { $x=$x+1; }
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
$query2=mysql_query("select * from jawaban where user_name='$id' and kode_soal like 'iv-%' and jawaban='-'");
$query3=mysql_num_rows($query2);

//if ($query3 == 0) { $query4="update Hasil set tes4='ok',tanggal=date(now()) where user_name='$id'"; $query5=mysql_query($query4); $query6=mysql_query("update register set status='done' where user_name='$id'");
//    $query5=mysql_query("update register set status='ok' where user_name='$id'"); //    } elseif ($query3  != 0) {
//    include "soal_kurangan.php";
//    } else {
//    echo "gagal";
//}
?>  