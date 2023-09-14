<?php session_start();
include "sql_connect.php";
$user_name=$_SESSION['user_name'];
$id=$_SESSION['user_id'];
if ($user_name == "")
{
	?> <script language="javascript">document.location.href="/psikotest_online/psikotest";</script> <?php
}
else
{
$rumus=mysql_query("select * from Hasil where user_name='$id' AND tes4='ok'");
$creck=mysql_num_rows($rumus);
if ($creck != '')
{
	?> <script language="javascript">document.location.href="/psikotest_online/wp-user/logout.php";</script> <?php
}
else
{
$a='SPLIT_STR(a.kode_soal,"-",2)+1';
$kode1="RIGHT(a.kode_soal, 2)";
if ($user_name)
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
<form action="jawaban_kurangan.php" method="POST">
<H3 ALIGN="center">Pernyataan Yang anda lewatkan . mohon dilengkapi semua</H3>
<hr />
<table border="0"align="center">
<?php 
$query=mysql_query("SELECT b.kode_soal,a.jawaban_a,a.jawaban_b,b.jawaban FROM jawaban_soal a,jawaban b
WHERE a.kode_soal=b.kode_soal and b.user_name='$id' AND b.jawaban='-'");
$i=1;
while($row=mysql_fetch_array($query))
{
$x=$row['kode_soal'];
$xx= explode("-",$x);
$xxx=$xx[1];
?>
<table border="0">
    <tr align="center">
        <td> <?php echo $xxx."<br>"; ?> </td>
        <td>
            <input type="radio" name="jawaban<?php echo $x; ?>" value="A" required/><!-- <input type="checkbox" value="A"name="jawaban_a<?php echo $x; ?>" /> --> <?php echo $row['jawaban_a'] ?>
        </td>
        <td> <input type="radio" name="jawaban<?php echo $x; ?>" value="B" required/><!-- <input type="checkbox" value="B"name="jawaban_b<?php echo $x; ?>" /> --><?php echo $row['jawaban_b'] ?></td>
    </tr>
</table>
<hr />
<?php
$i=$i+1;
}
?>
<p align="center"> <input type="submit"value="kirim"align="center" /></p>
</form>
 </div>
</div>
</body>
</html>
<?php
}}}
?>