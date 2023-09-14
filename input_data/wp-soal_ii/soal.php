<?php session_start();
include "sql_connect.php";
$user_name=$_SESSION['user_name'];
$id=$_SESSION['user_id'];
if ($user_name == "")
{
?> <script language="javascript">document.location.href="/psikotest/";</script> <?php
}
else
{
$query=mysql_query("select * from hasil where user_id='$id' AND tes2='ok'");
$cek=mysql_num_rows($query);
if($cek)
{
    ?> <br /><br /><script>alert('Anda sudah pernah melakukan psikotes di tahap  II. silahkan bepindah ke tahap III');document.location.href="../wp-soal_iii/welcome.php";</script> <?php
}
else
{

 ?><html> <title>Psikotest Online</title>
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
	width:1200px;
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
	<script language="javascript">
    function selesai() 
{document.forms["test"].submit(); clearTimeout(timeID); } 
    function timer()
    { timeID=setTimeout("selesai()",360000);}

   function preventBack(){window.history.forward();}

    setTimeout("preventBack()", 0);

    window.onunload=function(){null};

</script>
    <body  style="" onload="timer()">
	<br>
	<div class="form-1" align="center">
	<img src="../logo.png">
	</div>
	<div class="form-2">
        <div class="login-header bordered">
            <h3><b>Tes 2 - Soal berbatas waktu</b></h3>
        </div>
        <hr>
<h4 align="center"><b><font size="+2.5">Pada setiap soal akan mempunyai lima kata. Pada 4 dari 5 kata itu terdapat suatu kesamaan.<br>
Carilah satu kata yang tidak memiliki kesamaan dengan keempat kata lainnya.
<br>
<hr>
<form action="jawaban.php" method="POST" id="test">

<table width="100%" cellpadding="">
<?php
$rumus="select * from tes2";
$query=mysql_query($rumus);
$no=0;
while($row=mysql_fetch_array($query)) { $no=$no+1; ?>
	<tr height="40">
		<td><?php echo $no."."; ?></td>
		<td>A.</td>
		<td><input type="radio" required name="jwb<?php echo $no; ?>" id="a<?php echo $no; ?>" value="A"> <label for="a<?php echo $no; ?>"><font size="+1"><?php echo $row['soal_a']; ?></font></label> </td>
		<td>B.</td>
		<td><input type="radio" required name="jwb<?php echo $no; ?>" id="b<?php echo $no; ?>" value="B"> <label for="b<?php echo $no; ?>"><font size="+1"><?php echo $row['soal_b']; ?></font></label> </td>
		<td>C.</td>
		<td><input type="radio" required name="jwb<?php echo $no; ?>" id="c<?php echo $no; ?>" value="C"> <label for="c<?php echo $no; ?>"><font size="+1"><?php echo $row['soal_c']; ?></font></label> </td>
		<td>D.</td>
		<td><input type="radio" required name="jwb<?php echo $no; ?>" id="d<?php echo $no; ?>" value="D"> <label for="d<?php echo $no; ?>"><font size="+1"><?php echo $row['soal_d']; ?></font></label> </td>
		<td>E.</td>
		<td><input type="radio" required name="jwb<?php echo $no; ?>" id="e<?php echo $no; ?>" value="E"> <label for="e<?php echo $no; ?>"><font size="+1"><?php echo $row['soal_e']; ?></font></label> </td>
	</tr>
	<tr><Td colspan="11"><hr></td></tr>
<?php } ?>
</table>
<hr>
<p align="center"><input id="sub" type="submit" value="Kirim Jawaban"></p>
</form><br>
    </div>



</body></html>
<?php
$i=$i+1;
}}
?>
