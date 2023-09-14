<?php session_start();
include "sql_connect.php";
$kode="SPLIT_STR(kode_soal,"-",2)+0";
$user_name=$_SESSION['user_name'];
if ($user_name == "")
{
	?> <script language="javascript">document.location.href="/";</script> <?php
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
<body background="/image/background_green.png">
<div id="#wrapper">
  <div id="wrapper">
    <p align="center">
    <a href="homepage.php"><img src="/image/logo_persada.png"align="center"></a></p>
    <p align="center">&nbsp;</p>
    <p>&nbsp;</p>
	<p>&nbsp;</p>
<form action="jawaban.php" method="POST" target="_self">
<hr />
<?php
$queryu=mysql_query("select * from Hasil where user_name='$user_name' AND tes4='ok'");
$cruek=mysql_num_rows($queryu);
if ($cruek != "")
{
	?> <script language="javascript">document.location.href="/wp-user/logout.php";</script> <?php
}
else
{
$rumus=mysql_query("SELECT a.jawaban_a,a.jawaban_b FROM jawaban_soal a WHERE a.kode_soal LIKE 'iv-%' ORDER BY '$kode' ");
$i=0;
while($row = mysql_fetch_array($rumus))
{
?>
<table border="0">
    <tr align="center">
        <td> <?php echo $i=$i+1; ?> </td>
        <td>
            <input type="checkbox" value="A"name="jawaban_a<?php echo $i; ?>" /> <?php echo $row['jawaban_a'] ?>
        </td>
        <td> <input type="checkbox" value="B"name="jawaban_b<?php echo $i; ?>" /> <?php echo $row['jawaban_b'] ?></td>
    </tr>
</table>
<hr />
<?php
}
?>
<p align="center">
<input type="submit"value="kirim" />
</p>
</form>
</body>
</html>
<?php
}}
?>   