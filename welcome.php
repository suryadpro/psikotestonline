<?php session_start();
include "sql_connect.php";
$user_name=$_SESSION['user_name'];
$query=mysql_query("select user_name from  jawaban where user_name='$user_name' and kode_soal like 'i_%'");
$cek=mysql_num_rows($query);
if($cek)
{
    ?> <script language="javascript">document.location.href="wp-soal_i/welcome.php";</script> <?php
}
else
{
    ?>
<html>
<head>
<title> Psikotest Online Persada</title>
<style type="text/css">
table.sample {
	border-width: thick;
	border-spacing: 2px;
	border-style: inset;
	border-color: green;
	border-collapse: separate;
	background-color: white;
}
table.sample th {
	border-width: thin;
	padding: 3px;
	border-style: dashed;
	border-color: gray;
	background-color: white;
	-moz-border-radius: ;
}
table.sample td {
	border-width: thin;
	padding: 3px;
	border-style: dashed;
	border-color: gray;
	background-color: white;
	-moz-border-radius: ;
}
#wrapper {
	width: 860px;
	background-color: #FFF;
	margin: auto;
	padding-top: 10px;
	padding-right: 10px;
	padding-bottom: 10px;
	padding-left: 20px;
	height: auto;
	border-top-style: double;
	border-right-style: double;
	border-bottom-style: double;
	border-left-style: double;
	border-top-width: 10px;
	border-right-width: 10px;
	border-bottom-width: 10px;
	border-left-width: 10px;
}
body {
	margin-left: 75px;
	margin-top: 25px;
	margin-right: 75px;
	margin-bottom: 25px;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body background="image/background_green.png">
<div id="#wrapper">
  <div id="wrapper">
    <p align="center">
    <a href="homepage.php"><img src="image/logo_persada.png"align="center"></a></p>
    <p align="center">&nbsp;</p>
    <h3 align="center">Form Log In Psikotest Online Persada</h3>
    <p>&nbsp;</p>
    <h3 align="center" >Selamat datang dan terima kasih anda telah bergabung di Psikotes Online Persada.</h3><br /><br />
<p align="center">
Dalam Psikotes ini anda akan diberikan sebanyak 4 Tahapan Tes<br />
<h3 align="center"><b>Mohon untuk diperhatikan waktu penyelesaian soal<br />
Karena soal soal dalam tahapan ini menggunakan batasan waktu</b></h3>
<p align="center">
Bila anda sudah siap jangan lupa berdoa dan <a href="wp-soal_i/welcome.php">KLIK START</a>
</p><p>&nbsp;</p>
    <h3 align="center">Copyright Persada 2013.</h3>
  </div>
</div>
</body></html>

<?php }
?>
