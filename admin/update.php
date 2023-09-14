<?php
session_start();
date_default_timezone_set('Asia/Jakarta');
$date=date('d F Y');
$jam=date('h:m:s');
$a=$_POST['hasil'];
include "sql_connect.php";
if($_POST['pilih'] == 1) {  echo "insert into psikotest values('','$h','$date','$jam','$_SESSION[id]','1')"; 
if($_POST['tgl_tes'] != ""){
for($x=1;$x<=1000;$x++){
	$h=$_POST['idu'.$x];
	if($h != "") {
	$query=mysql_query("update kandidat_persada set tgl_psikotest='$_POST[tgl_tes]' where id='$h'");
}}}
if($_POST['hasil'] != "") {   echo "insert into psikotest values('','$h','$date','$jam','$_SESSION[id]','1')"; 
for($x=1;$x<=1000;$x++){
	$h=$_POST['idu'.$x];
	if($h != "") {
	if($a == "1") { $query=mysql_query("insert into psikotest_log values('','$h','$date','$jam','$_SESSION[SES_USER]','1')");}
	elseif($a == "2") { $query=mysql_query("insert into psikotest_log values('','$h','$date','$jam','$_SESSION[SES_USER]','2')"); }
	elseif($a == "3") { $query=mysql_query("insert into psikotest_log values('','$h','$date','$jam','$_SESSION[SES_USER]','3')"); }
	elseif($a == "0") { $query=mysql_query("insert into psikotest_log values('','$h','$date','$jam','$_SESSION[SES_USER]','0')"); }
	
	$rumus=mysql_query("select * from kandidat_persada a,psikotest b where a.id=b.id and a.id='$h'");
	$run=mysql_fetch_array($rumus); $num=mysql_num_rows($rumus);
	if($num == 0) {
	if($a == "0") {  $query=mysql_query("insert into psikotest values('','$h','$date','$jam','$_SESSION[user_name]','0')");  echo "insert into psikotest values('','$h','$date','$jam','$_SESSION[SES_USER]','1')"; }
	if($a == "1") {  $query=mysql_query("insert into psikotest values('','$h','$date','$jam','$_SESSION[user_name]','1')"); echo "insert into psikotest values('','$h','$date','$jam','$_SESSION[SES_USER]','1')"; }
	elseif($a == "2") {$query=mysql_query("insert into psikotest values('','$h','$date','$jam','$_SESSION[user_name]','2')"); echo "insert into psikotest values('','$h','$date','$jam','$_SESSION[SES_USER]','1')";  }
	elseif($a == "3") {$query=mysql_query("insert into psikotest values('','$h','$date','$jam','$_SESSION[user_name]','3')"); echo "insert into psikotest values('','$h','$date','$jam','$_SESSION[SES_USER]','1')";  }
	elseif($a == "0") { $query=mysql_query("insert into psikotest_log values('','$b','$date','$jam','$_SESSION[user_name]','0')"); echo "insert into psikotest values('','$h','$date','$jam','$_SESSION[SES_USER]','1')";  } } else {
	if($a == "1") { $query=mysql_query("update psikotest set status=1,tanggal='$date',jam='$jam',pic='$_SESSION[user_name]' where id_psi='$run[id_psi]'"); }
	elseif($a == "2") { $query=mysql_query("update psikotest set status=2,tanggal='$date',jam='$jam',pic='$_SESSION[user_name]' where id_psi='$run[id_psi]'"); }
	elseif($a == "3") { $query=mysql_query("update psikotest set status=3,tanggal='$date',jam='$jam',pic='$_SESSION[user_name]' where id_psi='$run[id_psi]'"); }
	elseif($a == "0") { $query=mysql_query("update psikotest set status=0,tanggal='$date',jam='$jam',pic='$_SESSION[user_name]' where id_psi='$run[id_psi]'"); }
}}}}?> <!--<script language="javascript">document.location.href="new_databank_ass	.php?mode=cari&tanggal=<?php echo $_GET['tanggal']; ?>&jenis=<?php echo $_GET['jenis']; ?>";</script> -->
<script language="javascript">document.location.href="menu.php?data=monitoring_";</script> <?php } elseif($_POST['pilih'] == 2) {
include "infokarnt.php";
}elseif($_POST['pilih'] == 7) {
include "download_rekap.php";
}elseif($_POST['pilih'] == 8) {
include "download3.php";
}
?>