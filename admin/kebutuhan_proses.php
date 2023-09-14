<?php session_start();
include "sql_connect.php";
$query=mysqli_query($koneksi,"insert into kebutuhan values('','$_POST[kebutuhan]','$_POST[tgl]','$_POST[jumlah]',0,'$_POST[pic]','$_POST[client]','$_POST[reg]','')");
$query2=mysqli_query($koneksi,"select id from kebutuhan where pic='$_POST[pic]' order by id desc limit 0,1");
$ar=mysqli_fetch_array($query2);
echo "<script>alert('Selamat anda berhasil input data')</script>";
?><script language="javascript">document.location.href="menu.php?data=form_register&id=<?php echo $ar['id']; ?>";</script>