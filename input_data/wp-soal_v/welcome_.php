<?php session_start();
include "sql_connect.php";
$user_name=$_SESSION['user_name'];
$id=$_SESSION['user_id'];
$du=mysql_query("select * from Hasil where user_name='$id'");
$qudu=mysql_fetch_array($du);
if ($user_name == "")
{
	?> <script language="javascript">document.location.href="/psikotest_online/psikotest/";</script> <?php
}
elseif ($qudu['tes4'] == "ok") { ?> <script>alert('Terima kasih , Anda sudah menyelesaikan seluruh tahapan psikotest sebelumnya.')</script><script language="javascript">document.location.href="/psikotest_online/wp-user/logout.php";</script> <?php } else 
{
$query=mysql_query("select * from jawaban where user_name='$id' and kode_soal like 'iv-%' and jawaban='-'");
$cek=mysql_num_rows($query);
if($cek)
{
    ?> <script language="javascript">document.location.href="soal_kurangan.php"</script> <?php
}
else
{ ?>
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
<body background="/psikotest_online/image/background_green.png">
<div id="#wrapper">
  <div id="wrapper">
    <p align="center">
    <a href="homepage.php"><img src="/psikotest_online/image/logo_persada.png"align="center"></a></p>
    <p align="center">&nbsp;</p>
    <p>&nbsp;</p>
	<p>&nbsp;</p>
	<h2 align="center"><b>TEST PSIKOTES ONLINE TAHAP IV</b></h2>
     <p>&nbsp;</p>
	<p align="center">
<b align="center">PETUNJUK PENERJAAN  PSIKOTEST TAHAP IV</b><br /><br />
<h3 align="center"><b>P</b>erception and <b>p</b>reference <b>i</b>nventory</h3>
<p align="center">Pada buku persoalan ini terdapat <b>90 pasang pernyataan.</b><br />
Dari setiap pasang pernyataan , Anda diminta untuk memilih <br />
<u><b>SATU PERNYATAAN YANG PALING SESUAI</b></u> dengan diri anda. <br />
Apabila pada suatu pasang pernyataan yang tersedia tampaknya <br />
memiliki tingkat kesesuaian atau tingkat ketidaksesuaian yang<br />
sama besar pada diri anda, maka cobalah pertimbangkan kembali <br />
secara lebih mendalam hingga anda dapat menemukan pernyataan yang paling menggambarkan diri anda.<br /><br />
<b>Contoh bentuk soal :</b><br />
1. <input type="radio">A.  Saya seorang pekerja keras.<input type="radio"> B. Saya tidak suka uring uringan <br />
Apabila anda memilih pernyataan <b> A. saya seorang pekerja keras</b> maka klik tanda <input type="radio" checked> centang di samping kiri piliha jawaban<br />
<b>Perhatian !</b>
<br />
Pilihlah jawaban-jawaban anda dengan <b> SPONTAN</b> dan <b> Secepat mungkin</b>, dengan mengaitkan pilihan pernyataan yang tersedia dengan situasi kerja.<br />
Apapunjawaban yang anda berikan tidak dinilai dengan penilaian "benar" ataupun "salah". Dalam hal ini seluruh jawaban yang anda berikan akan dianggap bernilai positif. <br />
Periksalah kembali ekerjaan anda hingga anda merasa yakin bahwa tidak ada satu nomor soalpun yang terlewatkan.<br />
<b> Jika anda sudah paham dengan petunjuk ini . klik di bawah ini. <br /></p>
<p align="center"> <a href="soal.php">--> START <--</a></b>
</p>
	 <br />
	 <br />
     <h3 align="center">Copyright Persada 2013.</h3>
	 <br />
  </div>
</div>
</body></html>
<?php
}}
?>