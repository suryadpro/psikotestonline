<?php session_start();
include "sql_connect.php";
$user_name=$_SESSION['user_name'];
$id=$_SESSION['user_id'];
$query=mysql_query("select user_id from  hasil where user_id='$id' and tes2='ok'");
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
    ?> <script language="javascript">document.location.href="/psikotest/wp-soal_iii/welcome.php";</script> 
	<?php
}
else
{ ?> 
	<div class="form-2">
        <div class="login-header bordered">
            <h3><b>Tes 2 - Petunjuk dan contoh</b></h3>
        </div>
        <hr>
<h4 align="left"><b>Pada setiap soal akan mempunyai lima kata. Pada 4 dari 5 kata itu terdapat suatu kesamaan.<br>
Carilah satu kata yang tidak memiliki kesamaan dengan keempat kata lainnya.
<br>
<br>
<b> Contoh : </b>
<br>
<br>
<table border width="100%" class="a">
	<tr>
		<td>A.</td>
		<td> <input type="radio" name="tes" id="a"> <label for="a"> Meja </label></td>
		<td>B.</td>
		<td> <input type="radio" name="tes" id="b"> <label for="b"> Kursi </label></td>
		<td>C.</td>
		<td> <input type="radio" name="tes" id="c" checked> <label for="c"> Burung </label></td>
		<td>D.</td>
		<td> <input type="radio" name="tes" id="d"> <label for="d"> Lemari </label></td>
		<td>E.</td>
		<td> <input type="radio" name="tes" id="e"> <label for="e"> Tempat tidur </label></td>
	</tr>
</table>		
<br>
a, b, d dan e ialah perabot rumah (meubel). c)	burung, bukan perabot rumah atau tidak memiliki kesamaan dengan keempat kata lainnya.
Oleh karena itu, silahkan klik huruf c pada soal tersebut dengan klik jawaban yang dipilih<br>
Bila anda sudah siap jangan lupa berdoa dan jangan lupa soal ini berbatas waktu<br><br>
<div align="center"><a href="soal.php"><button id="sub">Mulai Psikotest Online </button></a></h3>
    </div>



</body></html>
<?php
}
?>
