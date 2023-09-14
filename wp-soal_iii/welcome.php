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
$query=mysql_query("select user_id from  hasil where user_id='$id' and tes3='ok'");
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
	width:900px;
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
    ?> <script language="javascript">document.location.href="/psikotest/wp-soal_iv/welcome.php";</script>
	<?php
}
else
{ ?>
	<div class="form-2">
        <div class="login-header bordered">
            <h3><b>Tes 3 - Petunjuk dan contoh</b></h3>
        </div>
        <hr>
<h4 align="left"><b>Pada persoalan berikut akan diberikan deret angka. Setiap deret tersusun menurut suatu aturan tertentu dan dapat dilanjutkan menurut aturan itu.<br>
Carilah untuk setiap deret, angka berikutnya dan pilihlah jawaban saudara pada pilihan yang tersedia
<br>
<br>
<b> Contoh : </b>
<br>
<br>
<table width="100%" class="">
	<tr>
		<td>0</td>
		<td>1</td>
		<td>2</td>
		<td>3</td>
		<td>4</td>
		<td>5</td>
		<td>6</td>
		<td>?</td>
	</tr>
</table>		
<br>
Pada deret angka ini, angka berikutnya selalu didapat jika angka di depannya ditambah dengan 1. Maka jawaban ialah   :  <b>7</b><br>
Oleh karena itu, pada pilihan jawaban silakan anda klik angka 7.<br>
<table width="100%" class="">
	<tr  height="40" align="center">
		<td><input type="checkbox" id="1"><label for="1">1</label></td>
		<td><input type="checkbox" id="2"><label for="2">2</label></td>
		<td><input type="checkbox" id="3"><label for="3">3</label></td>
		<td><input type="checkbox" id="4"><label for="4">4</label></td>
		<td><input type="checkbox" id="5"><label for="5">5</label></td>
		<td><input type="checkbox" id="6"><label for="6">6</label></td>
		<td><input type="checkbox" id="7" checked><label for="7">7</label></td>
		<td><input type="checkbox" id="8"><label for="8">8</label></td>
		<td><input type="checkbox" id="9"><label for="9">9</label></td>
		<td><input type="checkbox" id="0"><label for="0">0</label></td>
	</tr>
</table>
<br>
<b>Contoh Berikutnya : </b><br><br>
<table width="90%" class="">
	<tr>
		<td>9</td>
		<td>7</td>
		<td>10</td>
		<td>8</td>
		<td>11</td>
		<td>9</td>
		<td>12</td>
		<td>?</td>
	</tr>
</table>
Pada deret ini aturannya selalu berganti-ganti, harus dikurangi dengan  2  dan setelah itu ditambah dengan  3.<br>
Jawaban contoh ini ialah  :  10, maka dari itu angka  1  dan angka  0 yang harus diklik.<br><br><br>
<table width="100%" class="">
	<tr  height="40" align="center">
		<td><input type="checkbox" id="1" checked><label for="1">1</label></td>
		<td><input type="checkbox" id="2"><label for="2">2</label></td>
		<td><input type="checkbox" id="3"><label for="3">3</label></td>
		<td><input type="checkbox" id="4"><label for="4">4</label></td>
		<td><input type="checkbox" id="5"><label for="5">5</label></td>
		<td><input type="checkbox" id="6"><label for="6">6</label></td>
		<td><input type="checkbox" id="7"><label for="7">7</label></td>
		<td><input type="checkbox" id="8"><label for="8">8</label></td>
		<td><input type="checkbox" id="9"><label for="9">9</label></td>
		<td><input type="checkbox" id="0" checked><label for="0">0</label></td>
	</tr>
</table>
Kadang – kadang pada beberapa soal harus pula dikalikan atau dibagi <br>
Apabila anda sudah paham . Jangan lupa untuk berdoa dan jangan lupa pula soal ini berbatas waktu.
<br><br>
<p align="center"><a href="soal.php"><button id="sub">Mulai Psikotest Online </button></a></h3>
    </div>



</body></html>
<?php
}}
?>
