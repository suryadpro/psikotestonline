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
$query=mysql_query("select user_id from  hasil where user_id='$id' and tes5='ok'");
$cek=mysql_num_rows($query);
?>
<html> <title>Psikotest Online</title>
    <link href="../bootstrap.css" rel="stylesheet">
    <link href="../stylesheet.css" rel="stylesheet">
	<link href="../ribbon.css" rel="stylesheet" type="text/css" />
    <style>
		body { 
		  background: url(../blue-sky.jpg) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}
		.form-2 {
    /* Size and position */
	width:1000px;
	margin:40px auto;
	padding:20px;
	position:relative;
    /* Styles */
    background: #fffaf6;
    border-radius: 4px;
    color: #7e7975;
    box-shadow:
        0 2px 2px rgba(0,0,0,0.2),        
        0 1px 5px rgba(0,0,0,0.2),        
        0 0 0 12px rgba(255,255,255,0.4); 
}
		.form-1 {
    /* Size and position */
	width:1050px;
	margin: auto;
	position:relative;
}
#sub {
    /* Width and position */
    width: 30%;
    padding: 8px 5px;
  
    /* Styles */
    border: 1px solid #0273dd; /* Fallback */
    border: 1px solid rgba(0,0,0,0.4);
    box-shadow:
        inset 0 1px 0 rgba(255,255,255,0.3),
        inset 0 10px 10px rgba(255,255,255,0.1);
    border-radius: 3px;
    background: #38a6f0;
    cursor:pointer;
  
    /* Font styles */
    font-family: 'Ubuntu', 'Lato', sans-serif;
    color: white;
    font-weight: 700;
    font-size: 15px;
    text-shadow: 0 -1px 0 rgba(0,0,0,0.8);
}

	</style>
    <body  style="">
	<br>
	<div class="form-1" align="center">
	<img src="../logo.png">
	</div>
		<?php
if($cek)
{
    ?> <script language="javascript">document.location.href="/psikotest/wp-user/logout.php";</script>
	<?php
}
else
{ ?>
	<div class="form-2">
        <div class="login-header bordered">
            <h3><b>Tes 5 - Petunjuk dan contoh</b></h3>
        </div>
        <hr>
<h3 align="center"><b>P</b>erception and <b>p</b>reference <b>i</b>nventory</h3>
<p align="center"><font size="+1">Pada buku persoalan ini terdapat <b>90 pasang pernyataan.</b><br />
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
<p align="center"><a href="soal.php"><button id="sub">Mulai Psikotest Online </button></a></p>
    </div>



</body></html>
<?php
}}
?>
