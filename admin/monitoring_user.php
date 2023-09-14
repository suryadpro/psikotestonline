<html>
<head>
<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery-1.9.1.js"></script>
<script src="js/jquery-ui.js"></script>
   <link rel="stylesheet" type="text/css" href="style/tcal.css" />
<script type="text/javascript" src="style/tcal.js"></script>
</head>
<body><?php session_start();
include "sql_connect.php";
date_default_timezone_set('Asia/Jakarta');
$today= date('Y-m-d');
$persen="%";
if($_GET['update'] == 'yes') {
for($x=1;$x<=100;$x++){
$usr=$_POST['id'.$x];
$stt=$_POST['status'.$x];
$query=mysql_query("update register set status='$stt' where user_id='$usr'");} }
echo "Tanggal : ".$today;
if($_SESSION['level'] == 2) { $query2=mysql_query("
select a.id,a.used,a.nama,date_format(a.tanggal,'%d %M %Y') as tanggal,a.attempt,d.user_name as pic,c.name_region,b.nama as client from kebutuhan a,client b,region c,admin d where 
a.client=b.id and a.region=c.id_region and a.pic=d.id_admin order by a.id desc"); } elseif($_SESSION['level'] == 1) { $query2=mysql_query("select * from Hasil"); } ?>
<form action="menu.php?data=monitoring_user&tanggal=on" method="POST">
Cari Per tanggal : <input type="text" name="tanggal" class="tcal" /> <input type="submit" value="cari" /> </form>
<form action="menu.php?data=monitoring_user&proses=yes" method="POST">

 Nama kandidat / user : <input type="text" name="user" value="<?php echo $_POST['po']; ?>" id="autocomplete"> 
<script>
$( "#autocomplete" ).autocomplete({
source: [  <?php  while($gogo=mysql_fetch_array($query2)) { echo '"'.$gogo[nama].'",'; }?>"--"]
});
</script>
<input type="submit" value="cari">
</form>
<br>
<form action="menu.php?data=monitoring_user&label=yes" method="POST">
By Label : <?php if($_SESSION['level'] == 1) { ?><select name="label"> <option></option> <?php $rumusan=mysql_query("
			select a.id,a.used,a.nama,date_format(a.tanggal,'%d %M %Y') as tanggal,a.attempt,d.user_name as pic,c.name_region,b.nama as client from kebutuhan a,client b,region c,admin d where 
			a.client=b.id and a.region=c.id_region and a.pic=d.id_admin order by a.id desc"); while($rowe=mysql_fetch_array($rumusan)) { ?>
			<option value="<?php echo $rowe['id']; ?>" <?php if($_POST['label'] == $rowe['id'] ) { echo "selected"; } ?>><?php echo $rowe['nama']." ( ".$rowe['pic']." ( ".$rowe['name_region']." ) ".$rowe['tanggal']. " ) "; ?></option> <?php } ?> </select> <?php }
			else { ?><select name="label"> <option></option> <?php $rumusan=mysql_query("
			select a.id,a.used,a.nama,date_format(a.tanggal,'%d %M %Y') as tanggal,a.attempt,d.user_name as pic,c.name_region,b.nama as client from kebutuhan a,client b,region c,admin d where 
			a.client=b.id and a.region=c.id_region and a.pic=d.id_admin and d.id_admin='$_SESSION[id]' order by a.id desc"); while($rowe=mysql_fetch_array($rumusan)) { ?>
			<option value="<?php echo $rowe['id']; ?>" <?php if($_POST['label'] == $rowe['id'] ) { echo "selected"; } ?>><?php echo $rowe['nama']." ( ".$rowe['pic']." ( ".$rowe['name_region']." ) ".$rowe['tanggal']. " ) "; ?></option> <?php } ?> </select> <?php } ?><input type="submit" value="cari"> </form>

<?php echo "Level : ".$_SESSION['level']; ?>
<form action="menu.php?data=monitoring_user&update=yes" method="POST">
<table border=1 width="100%">
	<tr>
		<td> NO</td>
		<td> Nama </td>
		<td> User Name </td>
		<td> Password </td>
		<td> Email </td>
		<td> No HP </td>
	</tr>
<?php
if ($_GET['update'] == "yes") {
$log=mysql_query("select * from log_query where user_name='$_SESSION[user_name]' order by log_id desc limit 0,1");
$log_a=mysql_fetch_array($log);
$rumus=$log_a['query'];
echo $rumus; }
elseif ($_GET['proses'] == "yes") {
$rumus="select * from Hasil where nama like '$persen$_POST[user]$persen'";}
elseif ($_GET['label'] == "yes") {
$rumus="select * from register  where kebutuhan='$_POST[label]'";}
elseif ($_GET['id'] != "") {
$rumus="select * from register  where kebutuhan='$_GET[id]'";}
elseif ($_GET['tanggal'] == "on") { if($_SESSION['level'] == 2) {
$rumus="select * from Hasil where tanggal='$_POST[tanggal]' and nama like '%@$_SESSION[user_name]'";
} elseif ($_SESSION['level'] == 1) {
$rumus="select * from register a,Hasil b  where a.user_id=b.user_name and b.tanggal='$_POST[tanggal]'";}  }
else { $rumus="select * from register a,Hasil b  where a.user_id=b.user_name and b.tanggal='$today'"; }
 $query=mysql_query($rumus);
$log=mysql_query('insert into log_query values("","'.$_SESSION[user_name].'","'.$rumus.'")');
 $no=0; $ceke=mysql_num_rows($query); if ($ceke == 0) { ?> <tr> <td colspan=6 align="center"> Data yang dicari tidak ditemukan </td> <?php } else { $b=0; while($row=mysql_fetch_array($query)) { $b=$b+1; ?>
	<tr>
	 <td> <?php echo $no=$no+1; ?> </td>
	 <td> <?php echo $row['nama_lengkap']; ?></td>
	 <td> <?php echo $row['user_name']; ?></td>
	 <td> <?php echo $row['password']; ?></td>
	 <td> <?php echo $row['email']; ?></td>
	 <td> <?php echo $row['no_hp']; ?></td>
	 </tr> <?php }} ?>
</table>
<hr>
<table border=1 width="100%">
	<tr>
		<td> NO</td>
		<td> Nama </td>
		<td> Tanggal Selesai</td>
		<td> Tes ke-1 </td>
		<td> Tes ke-2 </td>
		<td> Tes ke-3 </td>
		<td> Tes ke-4 </td>
		<td> Status </td>
		<td> <?php if($_SESSION['level'] == 1) { ?>Action  <?php } ?></td>
	</tr>
<?php
$query=mysql_query($rumus);
 $no=0; $ceke=mysql_num_rows($query); if ($ceke == 0) { ?> <tr> <td colspan=6 align="center"> Data yang dicari tidak ditemukan </td> <?php } else { $b=0; while($row=mysql_fetch_array($query)) { $b=$b+1; ?>
	<?php $rumus2="select * from Hasil where user_name='$row[user_id]'"; $query2=mysql_query($rumus2); $ar=mysql_Fetch_array($query2); ?>
	<tr>
	 <td> <?php echo $no=$no+1; ?> </td>
	 <td> <?php echo $row['nama_lengkap']; ?></td>
	 <?php if($ar['tanggal'] == "") { ?> <td bgcolor="yellow"> - <?php } else { ?><td> <?php echo $ar['tanggal']; }?> </td>
	 <?php if($ar['tes1'] == "") { ?> <td bgcolor="yellow"> - <?php } else { ?><td> <?php echo $ar['tes1'];  }?> </td>
	 <?php if($ar['tes2'] == "") { ?> <td bgcolor="yellow"> - <?php } else { ?><td> <?php echo $ar['tes2'];  }?> </td>
	 <?php if($ar['tes3'] == "") { ?> <td bgcolor="yellow"> - <?php } else { ?><td> <?php echo $ar['tes3']; }?> </td>
	 <?php if($ar['tes4'] == "") { ?> <td bgcolor="yellow"> - <?php } else { ?><td> <?php echo $ar['tes4']; }?> </td>
	 <Td><input type="hidden" name="id<?php echo $b; ?>" value="<?php echo $row[user_name]; ?>"> <select name="status<?php echo $b; ?>"> <?php $rumus=mysql_query("select status from register where nama_lengkap='$row[nama_lengkap]'"); $array=mysql_fetch_array($rumus); ?>
		<option value="waiting" <?php if($array['status'] == '-') { echo "selected"; } ?>>Waiting</option>
		<option value="in progress" <?php if($array['status'] == 'on progress' || $array['status'] == 'on progres 1' || $array['status'] == 'on progres 2' || $array['status'] == 'on progres 3' || $array['status'] == 'on progres 4') { echo "selected"; } ?>>On progress </option>
		<option value="done" <?php if($array['status'] == 'done') { echo "selected"; } ?>>Done</option>
	</select></td>
	 <td> <?php if($_SESSION['level'] == 1) { ?><a href="download.php?user_name=<?php echo $row['user_name']; ?>"> Download jawban psikotest </a> <?php } ?></td>
	</tr> <?php }} ?>
</table>
<input type="submit" value="update">
</form>
<?php if($_GET['label'] == "yes" || $_GET['id'] != "") { $label=$_POST['label']; if($label == "") { $label=$_GET['id']; } ?><a href="download_label.php?label=<?php echo $label; ?>"> Download all </a> <?php } ?>
</body>
</html>