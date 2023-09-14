<html>
<head>
<script language="javascript">
    function selesai() 
{document.forms["test"].submit(); clearTimeout(timeID); } 
    function timer()
    { timeID=setTimeout("selesai()",60000);}
</script></head>
<body onload="timer()">
<?php
include "sql_connect.php";
$query=mysql_query("SELECT a.jawaban_a,a.jawaban_b,a.jawaban_c,a.jawaban_d FROM jawaban_soal a WHERE a.kode_soal LIKE 'ii-%'");
$i=1;
while($row=mysql_fetch_array($query))
{
?>
<form action="jawaban.php" method="POST" target="_self">
<hr />
<table border="0"align="center">
    <tr align="center">
        <td> <?php echo $i ?> </td>
        <td>
            <input type="checkbox" value="A"name="jawaban_a<?php echo $i?>" /> <?php echo $row['jawaban_a'] ?>
        </td>
        <td> <input type="checkbox" value="B"name="jawaban_b<?php echo $i?>" /> <?php echo $row['jawaban_b'] ?></td>
        <td> <input type="checkbox" value="C"name="jawaban_c<?php echo $i?>" /> <?php echo $row['jawaban_c'] ?></td>
        <td> <input type="checkbox" value="D"name="jawaban_d<?php echo $i?>" /> <?php echo $row['jawaban_d'] ?></td>
    </tr>
<hr />
<?php
$i=$i+1;
}
?>
<p align="center">
        <td colspan="5"> <input type="submit"value="kirim" /> </td>
</p>
</form>
</body>
</html>      