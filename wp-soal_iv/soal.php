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
$query=mysql_query("select * from hasil where user_id='$id' AND tes4='ok'");
$cek=mysql_num_rows($query);
if($cek)
{
    ?> <br /><br /><script language="javascript">alert('Anda sudah pernah melakukan psikotes di tahap  IV. silahkan bepindah ke tahap V');document.location.href="../wp-soal_v/welcome.php";</script><?php
}
else
{ 
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

	<script language="javascript">
    function selesai() 
{document.forms["test"].submit(); clearTimeout(timeID); } 
    function timer()
    { timeID=setTimeout("selesai()",600000);}

   function preventBack(){window.history.forward();}

    setTimeout("preventBack()", 0);

    window.onunload=function(){null};

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
	width:1300px;
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
	<script type="text/javascript">

/***********************************************
* Limit number of checked checkboxes script- by JavaScript Kit (www.javascriptkit.com)
* This notice must stay intact for usage
* Visit JavaScript Kit at http://www.javascriptkit.com/ for this script and 100s more
***********************************************/

function checkboxlimit(checkgroup, limit){
	var checkgroup=checkgroup
	var limit=limit
	for (var i=0; i<checkgroup.length; i++){
		checkgroup[i].onclick=function(){
		var checkedcount=0
		for (var i=0; i<checkgroup.length; i++)
			checkedcount+=(checkgroup[i].checked)? 1 : 0
		if (checkedcount>limit){
			alert("Jawaban maximal per soal "+limit+" checkboxes")
			this.checked=false
			}
		}
	}
}

</script>
    <body  style="" onload="timer()">
	<br>
	<div class="form-1" align="center">
	<img src="../logo.png">
	</div>
	<div class="form-2">
        <div class="login-header bordered">
            <h3><b>Tes 4 - Soal ( Berbatas Waktu )</b></h3>
        </div>
        <hr>
<h4 align="center"><b><font size="+1">Persoalan berikut ialah soal – soal hitungan.
<br>
<hr>
<form action="jawaban.php" method="POST" id="test">
<table width="100%" class="" >
<?php
include "sql_connect.php";
$rumus="select * from tes4";
$query=mysql_query($rumus);
$no=0;
while($row=mysql_fetch_array($query)) { $no=$no+1; ?>

	<tr height="40">
		<td><b><?php echo $no.".) "; ?> </td>
		<td colspan="10"><b><?php echo $row['soal']; ?></td>
	</tr>
		<tr  height="40" align="left">
		<td></td>
		<td><input type="checkbox" value="1" id="jwb<?php echo $no; ?>" name="a<?php echo $no; ?>"><label for="1<?php echo $no; ?>"><font size="+1">1</td>
		<td><input type="checkbox" value="2" id="jwb<?php echo $no; ?>" name="b<?php echo $no; ?>"><font size="+1">2</td>
		<td><input type="checkbox" value="3" id="jwb<?php echo $no; ?>" name="c<?php echo $no; ?>"><font size="+1">3</td>
		<td><input type="checkbox" value="4" id="jwb<?php echo $no; ?>" name="d<?php echo $no; ?>"><font size="+1">4</td>
		<td><input type="checkbox" value="5" id="jwb<?php echo $no; ?>" name="e<?php echo $no; ?>"><font size="+1">5</td>
		<td><input type="checkbox" value="6" id="jwb<?php echo $no; ?>" name="f<?php echo $no; ?>"><font size="+1">6</td>
		<td><input type="checkbox" value="7" id="jwb<?php echo $no; ?>" name="g<?php echo $no; ?>"><font size="+1">7</td>
		<td><input type="checkbox" value="8" id="jwb<?php echo $no; ?>" name="h<?php echo $no; ?>"><font size="+1">8</td>
		<td><input type="checkbox" value="9" id="jwb<?php echo $no; ?>" name="i<?php echo $no; ?>"><font size="+1">9</td>
		<td><input type="checkbox" value="0" id="jwb<?php echo $no; ?>" name="j<?php echo $no; ?>"><font size="+1">0</td>
	</tr>
	<script type="text/javascript">

//Syntax: checkboxlimit(checkbox_reference, limit)
checkboxlimit(document.forms.test.jwb<?php echo $no; ?>, 3)

</script>
<?php } ?>
</table>

<hr>
<p align="center"><input id="sub" type="submit" value="Kirim Jawaban"></p>
</form><br>
    </div>



</body></html>
<?php
}}
?>
