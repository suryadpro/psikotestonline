<?php session_start();
include "sql_connect.php";
$kode="SPLIT_STR(kode_soal,"-",2)+0";
$user_name=$_SESSION['user_name'];
$id=$_SESSION['user_id'];
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
<body background="/psikotest_online/image/background_green.png">
<div id="#wrapper">
  <div id="wrapper">
    <p align="center">
    <a href="homepage.php"><img src="/psikotest_online/image/logo_persada.png"align="center"></a></p>
    <p align="center">&nbsp;</p>
    <p>&nbsp;</p>
	<p>&nbsp;</p>
<form action="jawaban_test.php" method="POST" target="_self">
<b>Pada buku persoalan ini terdapat 90 pasang pernyataan.</b><br />
Dari setiap pasang pernyataan , Anda diminta untuk memilih <br />
<u><b>SATU PERNYATAAN YANG PALING SESUAI</b></u> dengan diri anda. <br />isilah jawaban sesuai dengan pertanyaan masing-masing dengan cara memilih salah satu lingkaran dari pertanyaan tersebut . Apabila ingin merubahnya , langsung pilih lingkadan disampingnya untuk merubah jawaban . harap perhatikan bahwa ada batasan waktu yang akan habis sewaktu-waktu </b>
<hr />
<?php
$rumus=mysql_query("SELECT a.jawaban_a,a.jawaban_b FROM jawaban_soal a WHERE a.kode_soal LIKE 'iv-%' ORDER BY '$kode' ");
$i=0;
while($row = mysql_fetch_array($rumus))
{
?>
<table border="0">
    <tr align="center">
        <td> <b><?php echo $i=$i+1; ?>.) </b> </td>
        <td>
            <input type="radio" name="jawaban<?php echo $i; ?>" value="A" /> <!-- <input type="checkbox" value="A"name="jawaban_a<?php echo $i; ?>" /> --><?php echo "A. ".$row['jawaban_a'] ?>
        </td>
        <td> <input type="radio" name="jawaban<?php echo $i; ?>" value="B" /> <!-- <input type="checkbox" value="B"name="jawaban_b<?php echo $i; ?>" /> --> <?php echo "B. ".$row['jawaban_b'] ?></td>
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