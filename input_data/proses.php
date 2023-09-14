<?php session_start();

date_default_timezone_set('Asia/Jakarta');
$date=date('Y-m-d');
$jam=date('h:m:s');
include("sql_connect.php");
$a=$_POST['nama_lengkap'];
$c=$_POST['tempat_lahir'];
$d=$_POST['tgl_lahir'];
$g=$_POST['gender'];
$h=$_POST['status_kawin'];
$i=$_POST['agama'];
$j=$_POST['alamat_lengkap']; $rt=$_POST['rt']; $rw=$_POST['rw']; $kel=$_POST['kel']; $kec=$_POST['kec'];
$k=$_POST['kota'];
$l=$_POST['kode_pos'];
$m=$_POST['level_pend'];
$n=$_POST['jurusan'];
$o=$_POST['tahun_lulus'];
$p=$_POST['ipk'];
$q=$_POST['sekolah_universitas'];
$r=$_POST['nmr_ktp'];
$s=$_POST['tlp_rumah'];
$t=$_POST['mobile_phone'];
$u=$_POST['tgl_psikotest'];
$x=$_POST['info'];
$y=$_POST['ibu'];
$z=$_POST['gaji'];
$lokasi1=$_POST['lokasi1'];
$lokasi2=$_POST['lokasi2'];
$tinggi=$_POST['tinggi'];
$j=$j." RT ".$rt." RW ".$rw." Kel. ".$kel." Kec. ".$kec;
$berat=$_POST['berat'];
$url="../../foto_kandidat/";
$paths="/cv_persada/";
$filep=$_FILES['userfile']['tmp_name'];
$ftp_server="202.152.39.254";
$ftp_user_name="surya";
$ftp_user_pass="p3rs4d@2014";
$name=$_FILES['userfile']['name'];
$split=$_FILES['userfile'];
$split2=$_FILES['tmp_name'];

$pengalaman1=$_POST['posisi1']." - ".$_POST['perusahaan1']." - ".$_POST['durasi1'];
$pengalaman2=$_POST['posisi2']." - ".$_POST['perusahaan2']." - ".$_POST['durasi2'];
$pengalaman3=$_POST['posisi3']." - ".$_POST['perusahaan3']." - ".$_POST['durasi3'];

	
$query2=mysql_query("delete from kandidat_persada where user_id='$_SESSION[user_id]'");
$rumus="insert into kandidat_persada value
('','$_SESSION[user_id]','$a','$c','$d','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s',
'$t','$x','$y','$date','$jam','$z','$lokasi1','$lokasi2','$pengalaman1','$pengalaman2','$pengalaman3','$tinggi','$berat','$name')";
$perintah=mysql_query($rumus);
if($_SESSION['user_id'] != 548 || $_SESSION['user_id'] != 550) {
//$query3=mysql_query("select kebutuhan from register where user_id='$_SESSION[user_id]'"); $while=mysql_fetch_array($query3);
//$query2=mysql_query("insert into hasil values('','$_SESSION[user_id]','','','','','',date(now()),'$while[kebutuhan]')");
//$query4=mysql_query("insert into skor_tes value('','$_SESSION[user_id]','$_SESSION[lvl]','','','','')");
}
if($perintah)
{
	?> <script language="javascript">alert('Data berhasil diinput'); document.location.href="wp-user/logout.php";</script> <?php
}
else
{
	echo "<script>alert('Data sudah pernah di input . Terima kasih')</script>"; ?>
	<script language="javascript">document.location.href="wp-soal_i/welcome.php";</script> <?php
}
?>
