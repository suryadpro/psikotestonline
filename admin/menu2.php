<?php  session_start();
$waktuberakhir=1200; //10 menit
echo "<meta http-equiv='refresh' content='$waktuberakhir; url=index.php?destroy=yes'>";
$usr=$_SESSION['user_name'];
if ($usr == "")
{
	?> <script language="javascript">document.location.href="index.php";</script> <?php
} else { ?>
<html>
<head>
</head>
<body>

<?php if($_SESSION['level'] == 1) { ?>
 <a href="menu.php">Home</a>  ||
 <a href="menu.php?data=kebutuhan">Tambah Kebutuhan</a>  ||
 <a href="menu.php?data=table_kebutuhan">Table Kebutuhan</a>  ||
 <a href="menu.php?data=monitoring_">Monitoring status Psikotest</a> ||
 <a href="menu.php?data=tarik_data">Rekap Hasil Psikotest</a> ||
 <a href="menu.php?data=table_pi">Data PIC</a> ||
 <a href="menu.php?data=table_bu">Data BU</a> ||
 <a href="logout.php">Keluar dari admin</a> User : <?php echo $_SESSION['user_name'];
  } else {?>
  <a href="menu.php">Home</a>  ||
  <a href="menu.php?data=table_kebutuhan_user">Data Kebutuhan</a> ||
 <a href="menu.php?data=monitoring_user">Cek Status Psikotest</a> ||
 <a href="logout.php">Keluar dari admin</a> User : <?php echo $_SESSION['user_name']; }?> <hr>
<?php if($_GET[data] != "") { include ($_GET['data'].".php"); }}?>