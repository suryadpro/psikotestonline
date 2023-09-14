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
$query=mysql_query("select * from hasil where user_id='$id' AND tes5='ok'");
$cek=mysql_num_rows($query);
if($cek)
{
    ?> <br /><br /><script language="javascript">alert('Anda sudah menyelesaikan seluruh tahapan tes . Terima kasih');document.location.href="../wp-user/logout.php";</script><?php
}
else
{ 
//$query2=mysql_query("update hasil set tes5='ok' where user_id='$id'"); ?>
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
    <body  style="">
	<br>
	<div class="form-1" align="center">
	<img src="../logo.png">
	</div>
	<div class="form-2">
        <div class="login-header bordered">
            <h3><b>Tes 5 - Soal</b></h3>
        </div>
        <hr>
<p align="center"><b><font size="+1">Pada buku persoalan ini terdapat 90 pasang pernyataan.</b><br />
Dari setiap pasang pernyataan , Anda diminta untuk memilih <br />
<u><b>SATU PERNYATAAN YANG PALING SESUAI</b></u> dengan diri anda. <br />isilah jawaban sesuai dengan pertanyaan masing-masing dengan cara memilih salah satu lingkaran dari pertanyaan tersebut . Apabila ingin merubahnya , langsung pilih lingkadan disampingnya untuk merubah jawaban . harap perhatikan bahwa ada batasan waktu yang akan habis sewaktu-waktu </b></p>
<hr />
<form action="jawaban.php" method="POST" target="_self">
<table border="0" width="100%">
<?php 
$rumus=mysql_query("SELECT a.jawaban_a,a.jawaban_b FROM jawaban_soal a WHERE a.kode_soal LIKE 'iv-%' ORDER BY '$kode' ");
$i=0;
while($row = mysql_fetch_array($rumus))
{
?>
    <tr align="left" height="50">
        <td valign="top"> <b><?php echo $i=$i+1; ?>.) </b> </td>
		<td valign="top"><input type="radio" name="jawaban<?php echo $i; ?>" value="A" id="jwb<?php echo $i; ?>" required/></td>
		<td valign="top"><label for="jwb<?php echo $i; ?>"><font size="+1"> <?php echo "A"; ?></label></td>
		<td valign="top"><label for="jwb<?php echo $i; ?>"><font size="+1"><?php echo $row['jawaban_a'] ?></label></td>
        <td valign="top"><input type="radio" name="jawaban<?php echo $i; ?>" value="B" id="jwba<?php echo $i; ?>" required/></td>
        <td valign="top"><label for="jwba<?php echo $i; ?>"><font size="+1"> <?php echo "B"; ?></label></td>
        <td valign="top"><label for="jwba<?php echo $i; ?>"><font size="+1"><?php echo $row['jawaban_b']; ?><label></td>
    </tr>
<?php
}
?>
</table>
<p align="center"><button id="sub" type="submit">Kirim Jawaban </button></p>
</form>
    </div>


<?php }} ?>
</body></html>
