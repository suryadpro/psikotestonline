<html>
<head>
<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery-1.9.1.js"></script>
<script src="js/jquery-ui.js"></script>
   <link rel="stylesheet" type="text/css" href="style/tcal.css" />
<script type="text/javascript" src="style/tcal.js"></script>
</head>
<body><?php
include "sql_connect.php";
date_default_timezone_set('Asia/Jakarta');
$today= date('Y-m-d');
$persen="%";
echo "Tanggal : ".$today;
$query2=mysql_query("select * from register");?>
<form action="menu.php?data=monitoring&tanggal=on" method="POST">
Cari Per tanggal : <input type="text" name="tanggal" class="tcal" /> <input type="submit" value="cari" /> </form>
<form action="menu.php?data=monitoring&proses=yes" method="POST">

 Nama kandidat / user : <input type="text" name="user" value="<?php echo $_POST['po']; ?>" id="autocomplete"> 
<script>
$( "#autocomplete" ).autocomplete({
source: [  <?php  while($gogo=mysql_fetch_array($query2)) { echo '"'.$gogo[user_name].'",'; }?>"--"]
});
</script>
<input type="submit" value="cari">
</form>
<table border=1 width="100%">
	<tr>
		<td> NO</td>
		<td> USER NAME </td>
		<td> Tanggal Selesai</td>
		<td> Tes ke-1 </td>
		<td> Tes ke-2 </td>
		<td> Tes ke-3 </td>
		<td> Tes ke-4 </td>
		<td> Action </td>
	</tr>
<?php if ($_GET['proses'] == "yes") { $query=mysql_query("select * from Hasil where nama like '$persen$_POST[user]$persen'"); } elseif ($_GET['tanggal'] == "on") { $query=mysql_query("select * from Hasil where tanggal='$_POST[tanggal]'"); } else  { $query=mysql_query("select * from Hasil where tanggal='$today'"); } $no=0; $ceke=mysql_num_rows($query); if ($ceke == 0) { ?> <tr> <td colspan=6 align="center"> Data yang dicari tidak ditemukan </td> <?php } else { while($row=mysql_fetch_array($query)) { ?>
	<tr>
	 <td> <?php echo $no=$no+1; ?> </td>
	 <td> <?php if ($row[nama] == ' ') { $rumus=mysql_query("select nama_lengkap,pekerjaan_dicari from register where user_name='$row[user_name]'"); } else { $rumus=mysql_query("select nama_lengkap,pekerjaan_dicari from register where user_id='$row[user_name]'"); } $rowe=mysql_fetch_array($rumus); echo $rowe['nama_lengkap']."( ".$rowe['pekerjaan_dicari']." ) ";  ?> </td>
	 <?php if($row['tanggal'] == "") { ?> <td bgcolor="yellow"> - <?php } else { ?><td> <?php echo $row['tanggal']; }?> </td>
	 <?php if($row['tes1'] == "") { ?> <td bgcolor="yellow"> - <?php } else { ?><td> <?php echo $row['tes1'];  }?> </td>
	 <?php if($row['tes2'] == "") { ?> <td bgcolor="yellow"> - <?php } else { ?><td> <?php echo $row['tes2'];  }?> </td>
	 <?php if($row['tes3'] == "") { ?> <td bgcolor="yellow"> - <?php } else { ?><td> <?php echo $row['tes3']; }?> </td>
	 <?php if($row['tes4'] == "") { ?> <td bgcolor="yellow"> - <?php } else { ?><td> <?php echo $row['tes4']; }?> </td>
	 <td> <a href="download.php?user_name=<?php echo $row['user_name']; ?>"> Download jawban psikotest </a> </td>
	</tr> <?php }} ?>
</table>
</body>
</html>