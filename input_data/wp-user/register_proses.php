<?php
include "sql_connect.php";
$nama = $_POST['nama_lengkap'];
$pecah = explode (" ",$nama);
$ktp=$_POST['no_ktp'];
if ($pecah[1] == "") { $user_name = $pecah[0]; } else {$user_name = $pecah[0].".".$pecah[1]; }
$user_name = strtolower($user_name);
$pw = "Persada2013";
$email = $_POST['email'];
$ttl = $_POST['tempat_tanggal_lahir'];
$almt = $_POST['alamat'];
$kota = $_POST['kota'];
$hp = $_POST['no_hp'];
$lulusan = $_POST['pendidikan'];
$sekolah = $_POST['nama_sekolah'];
$ipk = $_POST['ipk'];
$referensi = $_POST['referensi'];
$pekerjaan = $_POST['pekerjaan_dicari'];
$query = mysql_query("insert into register values('','$nama','$ktp','$user_name','$pw','$email','$ttl','$almt','$kota','$hp','$lulusan','$sekolah','$ipk','$referensi','$pekerjaan','on progress')");
if ($query) {
    ?> <p align="center"> Anda Telah berhasil mendaftar di website kami. <br> Berikut ini datanya . <br> USER NAME : <?php echo $user_name; ?> <br> Password : <?php echo $pw; ?> <br>
	silahkan anda menuju ke <a href="/menu_login.php">HOME</a></p> <?php
} else {
    echo " Guagal";
}
?>