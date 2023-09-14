<html>
<head>
</head>
<body>

<form action="cari.php"method="POST"name="boogie">
<p align="center">
<select name="surf" onChange="location=document.boogie.surf.options[document.boogie.surf.selectedIndex].value;" value="GO">
<option selected="">Pilih tahapannya</option>
<option value="hasil_cariI.php">Tahap I</option>
<option value="hasil_cariII.php">Tahap II</option>
<option value="hasil_cariIII.php">Tahap III</option>
<option value="hasil_cariIV.php">Tahap IV</option>
</select>
</form>
<form action="cari_nama.php"method="POST">
<p align="center">
<input type="text"name="nama"placeholder="cari berdasarkan nama"/>
<input type="submit"value="cari"/>
</form>
<br />
    <table border="1"align="center">
        <tr>
            <th>Nama Lengkap </th>
            <th>Kode Soal</th>
            <th>Jawaban</th>
        </tr>
<?php
include "sql_connect.php";
$query=mysql_query("SELECT a.nama_lengkap,b.kode_soal,b.jawaban
FROM register a,jawaban b
WHERE a.user_name=b.user_name AND kode_soal like 'ii-%'");
while($row=mysql_fetch_array($query))
{?>
    <tr>
        <td> <?php echo $row['nama_lengkap']; ?> </td>
        <td> <?php echo $row['kode_soal']; ?></td>
        <td> <?php echo $row['jawaban']; ?></td>
        </tr>
<?php } ?>
</table>
<h3 align="center"><a href="/persada/logout.php"> Log out</a></h3>
</p>