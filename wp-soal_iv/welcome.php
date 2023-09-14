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
$query=mysql_query("select user_id from  hasil where user_id='$id' and tes4='ok'");
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
    ?> <script language="javascript">document.location.href="/psikotest/wp-soal_v/welcome.php";</script>
	<?php
}
else
{ ?>
	<div class="form-2">
        <div class="login-header bordered">
            <h3><b>Tes 4 - Petunjuk dan contoh</b></h3>
        </div>
        <hr>
<h4 align="left"><b>Persoalan berikut ialah soal – soal hitungan.<br>
<br>
<b> Contoh 03: </b>
<br>
Sebatang pensil harganya 25 rupiah.Berapakah harga 3 batang?
<br>
Jawabannya ialah 75
<br><br>
<b>Perhatikanlah untuk cara menjawabnya!</b>
<br>
<br>
Pada bagian jawaban lihatlah pada baris nomor 03.<br>
Pada baris ini terdiri atas angka – angka  1  sampai  9  dan  0.<br>
Untuk menunjukkan jawaban suatu soal, maka pilihlah angka-angka yang terdapat pada baris jawaban itu<br>
Dalam menjawab, jika hasilnnya berupa puluhan maka harus memilih 2 angka. Kedua angka tersebut tidak harus berurutan<br><br>
Pada contoh 03 jawaban ialah 75.<br>
Oleh karena itu, pada baris jawaban di belakang nomor 03, klik angka 5 dan 7.<br>
<br>
<table width="100%" class="">
	<tr  height="40" align="center">
		<td><input type="checkbox" id="1"><label for="1">1</label></td>
		<td><input type="checkbox" id="2"><label for="2">2</label></td>
		<td><input type="checkbox" id="3"><label for="3">3</label></td>
		<td><input type="checkbox" id="4"><label for="4">4</label></td>
		<td><input type="checkbox" id="5" checked><label for="5">5</label></td>
		<td><input type="checkbox" id="6"><label for="6">6</label></td>
		<td><input type="checkbox" id="7" checked><label for="7">7</label></td>
		<td><input type="checkbox" id="8"><label for="8">8</label></td>
		<td><input type="checkbox" id="9"><label for="9">9</label></td>
		<td><input type="checkbox" id="0"><label for="0">0</label></td>
	</tr>
</table>
<br>
<b>Contoh Lain : </b><br><br>
Dengan sepeda Husin dapat mencapai 2 km dalam waktu 1 jam. Berapa km-kah yang dapat ia capai dalam waktu 4 jam?<br>
Jawabannya ialah   :   8 
Maka untuk menunjukkan jawaban itu, angka  8  yang seharusnya diklik
<br><br><br>
<table width="100%" class="">
	<tr  height="40" align="center">
		<td><input type="checkbox" id="1"><label for="1">1</label></td>
		<td><input type="checkbox" id="2"><label for="2">2</label></td>
		<td><input type="checkbox" id="3"><label for="3">3</label></td>
		<td><input type="checkbox" id="4"><label for="4">4</label></td>
		<td><input type="checkbox" id="5"><label for="5">5</label></td>
		<td><input type="checkbox" id="6"><label for="6">6</label></td>
		<td><input type="checkbox" id="7"><label for="7">7</label></td>
		<td><input type="checkbox" id="8" checked><label for="8">8</label></td>
		<td><input type="checkbox" id="9"><label for="9">9</label></td>
		<td><input type="checkbox" id="0"><label for="0">0</label></td>
	</tr>
</table>
<br>
Jangan lupa bahwa soal ini berbatas waktu dan jangan lupa untuk berdoa dulu sebelum mengerjakannya.
<br><br><p align="center"><a href="soal.php"><button id="sub">Mulai Psikotest Online </button></a></h3>
    </div>



</body></html>
<?php
}}
?>
