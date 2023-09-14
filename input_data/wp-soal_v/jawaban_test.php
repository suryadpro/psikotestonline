<?php session_start();
include "sql_connect.php";
//$user_name=$_SESSION['user_name'];
//$id=$_SESSION['user_id'];
for($x=1;$x<=90;$x++)
#for start
{
echo $x;
    $test=$_POST['jawaban'.$x];
	if ($test == "") { $test="-"; }
    $test2=$_POST['jawaban_b'.$x];
	
	if($x == 1 || $x == 11 || $x == 21 || $x == 31 || $x == 41 || $x == 51 || $x == 61 || $x == 71 || $x == 81) {
echo "insert into papi values('','$id','iv-$x','$test','G')<br>";}

	if($x == 2 || $x == 13 || $x == 24 || $x == 35 || $x == 46 || $x == 57 || $x == 68 || $x == 79 || $x == 90) {
		if($x == 2) { echo "insert into papi values('','$id','iv-$x','$test','N')<br>";}}

	if($x == 2 && $test == "A" || $x == 3 || $x == 14 || $x == 25 || $x == 36 || $x == 47 || $x == 58 || $x == 69 || $x == 80) {
echo "insert into papi values('','$id','iv-$x','$test','A')<br>";
}
//	if($x == 2 || $x == 3 || $x == 14 || $x == 25 || $x == 36 || $x == 47 || $x == 58 || $x == 69 || $x == 80) {
//$query2=mysql_query("insert into papi values('','$id','iv-$x','$test','A')");
//}
		
//$query=mysql_query("insert into jawaban values('','$id','iv-$x','$test')");
}
//$query2=mysql_query("select * from jawaban where user_name='$id' and kode_soal like 'iv-%' and jawaban='-'");
//$query3=mysql_num_rows($query2);

//if ($query3 == 0) { $query4="update Hasil set tes4='ok',tanggal=date(now()) where user_name='$id'"; $query5=mysql_query($query4); $query6=mysql_query("update register set status='done' where user_name='$id'");
    //$query5=mysql_query("update register set status='ok' where user_name='$id'"); ?><!-- <script language="javascript">document.location.href="/psikotest_online/wp-user/logout.php";</script> <?php
    //} elseif ($query3  != 0) {
    //include "soal_kurangan.php";
    //} else {
    //echo "gagal";
//}
?>  