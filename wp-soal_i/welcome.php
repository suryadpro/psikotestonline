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
$query2=mysql_query("select * from kandidat_persada where user_id='$id'");
$ar=mysql_fetch_array($query2);
$ru=mysql_num_rows($query2);
if($ru == "") { ?><script language="javascript">document.location.href="../verify_data.php";</script><?php } 
$_SESSION['lvl']=$ar['level_pend'];
$query=mysql_query("select user_id from  hasil where user_id='$id' and tes1='ok'");
$cek=mysql_num_rows($query);
?>
<html> <title>Psikotest Online</title>
    <link href="../bootstrap.css" rel="stylesheet">
    <link href="../stylesheet.css" rel="stylesheet">
	<link href="../ribbon.css" rel="stylesheet" type="text/css" />
	<script language='JavaScript' type='text/JavaScript'> 
 // http://html-generator.weebly.com/html-right-click-disable-code.html 
 var tenth = ''; 
 
 function ninth() { 
   if (document.all) { 
     (tenth); 
     alert("Right Click Disable"); 
     return false; 
   } 
 } 
 
 function twelfth(e) { 
   if (document.layers || (document.getElementById && !document.all)) { 
     if (e.which == 2 || e.which == 3) { 
       (tenth); 
       return false; 
     } 
   } 
 } 
 if (document.layers) { 
   document.captureEvents(Event.MOUSEDOWN); 
   document.onmousedown = twelfth; 
 } else { 
   document.onmouseup = twelfth; 
   document.oncontextmenu = ninth; 
 } 
 document.oncontextmenu = new Function('alert("Right Click Disable"); return false') 
</script>
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
    ?><script language="javascript">document.location.href="/psikotest/wp-soal_ii/welcome.php";</script> 
	<?php
}
else
{
 ?>
	<div class="form-2">
        <div class="login-header bordered">
            <h3><b>Tes 1 - Petunjuk dan contoh</b></h3>
        </div>
        <hr>
<h4 align="left"><b><font face="tahoma">Soal-soal 01-20 terdiri atas kalimat-kalimat dengan <b>batasan waktu</b>. Pada setiap kalimat satu kata hilang dan disediakan 5 (lima) kata pilihan sebagai penggantinya.
Pilihlah kata yang tepat yang dapat menyempurnakan kalimat itu !
<br>
<br>
<b> Contoh : </b>
<br>
<br>
Seekor Kuda mempunyai kesamaan terbanyak dengan seekor ……………….<br><br>
<table border width="100%" class="a">
	<tr>
		<td>a.</td>
		<td> <input type="radio" name="tes"> Kucing </td>
		<td>b.</td>
		<td> <input type="radio" name="tes"> Bajing </td>
		<td>c.</td>
		<td> <input type="radio" name="tes"> Keledai </td>
		<td>d.</td>
		<td> <input type="radio" name="tes"> Lembu </td>
		<td>e.</td>
		<td> <input type="radio" name="tes"> Anjing </td>
	</tr>
</table>		
<br>
Jawaban yang benar ialah : C)  Keledai . Oleh karena itu klik huruf c pada soal nomor 1 <input type="radio" checked>c. keledai<br><br>
Soal ini hanya bisa 1x dikerjakan . jadi harap berhati hati dan jangan lupa bahwa soal ini berbatas waktu.
Bila anda sudah siap jangan lupa berdoa lalu klik link di bawah ini <br><br>
<div align="center"><a href="soal.php"><button id="sub">Mulai Psikotest Online </button></a></h3>
    </div>
<?php }
 ?>


</body></html>
<?php } ?>
