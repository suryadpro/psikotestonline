
<html>
<head>
<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery-1.9.1.js"></script>
<script src="js/jquery-ui.js"></script>
   <link rel="stylesheet" type="text/css" href="style/tcal.css" />
<script type="text/javascript" src="style/tcal.js"></script>
  <script>
  var popupWindow = null;
function centeredPopup(url,winName,w,h,scroll){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
popupWindow = window.open(url,winName,settings)
}
		</script>
</head>
<body><?php
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
a.client=b.id and a.region=c.id_region and a.pic=d.id_admin order by a.id desc"); } elseif($_SESSION['level'] == 1 || $_SESSION['level'] == 3) { $query2=mysql_query("select * from hasil a,register b where a.user_id=b.user_id"); } ?>
<form action="menu.php?data=monitoring_juni&tanggal=on" method="POST" class="pure-form">
Cari Per tanggal : <input type="text" name="tanggal" class="tcal" autocomplete="off" /> <button type="submit" class="pure-button pure-button-primary">Search</button> </form>
<form action="menu.php?data=monitoring_juni&proses=yes" method="POST" class="pure-form">
<br>
<hr>
<br>
 Nama kandidat / user : <input type="text" name="user" value="<?php echo $_POST['user']; ?>" id="autocomplete" autocomplete="off"> 
<script>
$( "#autocomplete" ).autocomplete({
source: [  <?php  while($gogo=mysql_fetch_array($query2)) { echo '"'.$gogo[user_name].'",'; }?>"--"]
});
</script>
<button type="submit" class="pure-button pure-button-primary">Cari</button>
</form>
<br>
<hr>
<br>
<form action="menu.php?data=monitoring_juni&label=yes" method="POST" class="pure-form">
By Label : <?php if($_SESSION['level'] == 1 or $_SESSION['level'] == 3) { ?><select name="label"> <option></option> <?php $rumusan=mysql_query("
			select a.id,a.used,a.nama,date_format(a.tanggal,'%d %M %Y') as tanggal,a.attempt,d.user_name as pic,c.name_region,b.nama as client from kebutuhan a,client b,region c,admin d where 
			a.client=b.id and a.region=c.id_region and a.pic=d.id_admin order by a.id desc"); while($rowe=mysql_fetch_array($rumusan)) { ?>
			<option value="<?php echo $rowe['id']; ?>" <?php if($_POST['label'] == $rowe['id'] ) { echo "selected"; } ?>><?php echo $rowe['nama']." ( ".$rowe['pic']." ( ".$rowe['name_region']." ) ".$rowe['tanggal']. " ) "; ?></option> <?php } ?> </select> <?php }
			else { ?><select name="label"> <option></option> <?php $rumusan=mysql_query("select * from kebutuhan where nama like '%$_SESSION[user_name]%' order by id desc"); while($rowe=mysql_fetch_array($rumusan)) { ?>
			<option value="<?php echo $rowe['id']; ?>" <?php if($_POST['label'] == $rowe['id'] ) { echo "selected"; } ?>><?php echo $rowe['nama']; ?></option> <?php } ?> </select> <?php } ?><button type="submit" class="pure-button pure-button-primary">Cari</button> </form>
<br>
<hr>
<br>
<form action="menu.php?data=monitoring_juni&bulan=yes" method="post" class="pure-form">			
			per Bulan :

	Tanggal : <select name="bln" >
		  <option> </option>
		  <option value="01" <?php if ($d == "01") { echo "selected"; } ?> >January</option>
          <option value="02" <?php if ($d == "02") { echo "selected"; } ?> >February</option>
          <option value="03" <?php if ($d == "03") { echo "selected"; } ?> >March</option>
          <option value="04" <?php if ($d == "04") { echo "selected"; } ?> >April</option>
		  <option value="05" <?php if ($d == "05") { echo "selected"; } ?> >May</option>
		  <option value="06" <?php if ($d == "06") { echo "selected"; } ?> >June</option>
		  <option value="07" <?php if ($d == "07") { echo "selected"; } ?> >July</option>
		  <option value="08" <?php if ($d == "08") { echo "selected"; } ?> >August</option>
		  <option value="09" <?php if ($d == "09") { echo "selected"; } ?> >September</option>
		  <option value="10" <?php if ($d == "10") { echo "selected"; } ?> >October</option>
		  <option value="11" <?php if ($d == "11") { echo "selected"; } ?> >November</option>
		  <option value="12" <?php if ($d == "12") { echo "selected"; } ?> >December</option>
      </select>
	  <select name="th" >
	    <option></option>
        <option <?php if($e == "2010") { echo "selected"; }?> >2010</option>
	    <option <?php if($e == "2011") { echo "selected"; } ?> >2011</option>
	    <option <?php if($e == "2012") { echo "selected"; } ?> >2012</option>
	    <option <?php if($e == "2013") { echo "selected"; } ?> >2013</option>
	    <option <?php if($e == "2014") { echo "selected"; } ?> >2014</option>
	    <option <?php if($e == "2015") { echo "selected"; } ?> >2015</option>
	    <option <?php if($e == "2016") { echo "selected"; } ?> >2016</option>
        </select>
<button type="submit" class="pure-button pure-button-primary">Search</button>
</form>
<form action="update.php" method="POST">
<table border=1 width="100%" class="a">
	<tr>
		<th> NO</th>
		<th> Nama </th>
		<th> User Name </th>
		<th> Password </th>
	</tr>
<?php
if ($_GET['update'] == "yes") {
$log=mysql_query("select * from log_query where user_name='$_SESSION[user_id]' order by log_id desc limit 0,1");
$log_a=mysql_fetch_array($log);
$rumus=$log_a['query'];
 }
elseif ($_GET['proses'] == "yes") {
$rumus="select *,a.user_id as user_id from register a,hasil b  where a.user_id=b.user_id and a.user_name like '$persen$_POST[user]$persen'";}
elseif ($_GET['bulan'] == "yes") {
$rumus="select *,b.user_id as user from register a,hasil b  where a.user_id=b.user_id and b.tanggal like '$_POST[th]-$_POST[bln]-%'";}
elseif ($_GET['label'] == "yes") {
$rumus="select * from register  where kebutuhan='$_POST[label]'";}
elseif ($_GET['id'] != "") {
$rumus="select * from register  where kebutuhan='$_GET[id]'";} 
elseif ($_GET['tanggal'] == "on") { if($_SESSION['level'] == 2) {
$rumus="select * from hasil where tanggal='$_POST[tanggal]' and nama like '%@$_SESSION[user_id]'";
} elseif ($_SESSION['level'] == 1 || $_SESSION['level'] == 3) {
$rumus="select * from register a,hasil b  where a.user_id=b.user_id and b.tanggal='$_POST[tanggal]'";}  }
else { $rumus="select *,a.user_id as user from register a,hasil b  where a.user_id=b.user_id and b.tanggal between '2015-06-01' and '2015-06-30'"; }
 $query=mysql_query($rumus);
$log=mysql_query('insert into log_query values("","'.$_SESSION[user_id].'","'.$rumus.'")');
 $no=0; $ceke=mysql_num_rows($query); if ($ceke == 0) { ?> <tr> <td colspan=6 align="center"> Data yang dicari tidak ditemukan </td> <?php } else { $b=0; while($row=mysql_fetch_array($query)) { $b=$b+1; ?>
	<tr>
	 <td> <?php echo $no=$no+1; ?> </td>
	 <td> <?php echo $row['nama_lengkap']; ?></td>
	 <td> <?php echo $row['user_name']; ?></td>
	 <td> <?php echo $row['password']; ?></td>
	 </tr> <?php }} ?>
</table>
<br>
<hr>
<br>
<table border=1 width="100%" class="a">
	<tr>
		<th> NO</th>
		<th> Nama </th>
		<th> Tanggal Selesai</th>
		<th> Tes ke-1 </th>
		<th> Tes ke-2 </th>
		<th> Tes ke-3 </th>
		<th> Tes ke-4 </th>
		<th> Tes ke-5 </th>
		<th> Status </th>
		<th> Hasil psikotest </th>
		<th> <?php if($_SESSION['level'] == 1) { ?>Action  <?php } ?></th>
	</tr>
<?php
$query=mysql_query($rumus);
 $no=0; $ceke=mysql_num_rows($query); if ($ceke == 0) { ?> <tr> <td colspan=12 align="center"> Data yang dicari tidak ditemukan </td> <?php } else { $b=0; while($row=mysql_fetch_array($query)) { $b=$b+1; ?>
	<?php $rumus2="select * from hasil where user_id='$row[user_id]'"; $query2=mysql_query($rumus2); $ar=mysql_Fetch_array($query2); $no=$no+1; ?>
	<tr>
	 <td> <?php echo $no; ?> </td>
	 <td> <a  onclick="centeredPopup(this.href,'myWindow','1500','620','yes');return false" href="lengkap.php?id=<?php echo $row['user_id']; ?>"><?php echo $row['nama_lengkap']; ?></a></td>
	 <?php if($ar['tanggal'] == "") { ?> <td bgcolor="yellow"> - <?php } else { ?><td> <?php echo $ar['tanggal']; }?> </td>
	 <?php if($ar['tes1'] == "") { ?> <td bgcolor="yellow"> - <?php } else { ?><td> <?php echo $ar['tes1'];  }?> </td>
	 <?php if($ar['tes2'] == "") { ?> <td bgcolor="yellow"> - <?php } else { ?><td> <?php echo $ar['tes2'];  }?> </td>
	 <?php if($ar['tes3'] == "") { ?> <td bgcolor="yellow"> - <?php } else { ?><td> <?php echo $ar['tes3']; }?> </td>
	 <?php if($ar['tes4'] == "") { ?> <td bgcolor="yellow"> - <?php } else { ?><td> <?php echo $ar['tes4']; }?> </td>
	 <?php if($ar['tes5'] == "") { ?> <td bgcolor="yellow"> - <?php } else { ?><td> <?php echo $ar['tes5']; }?> </td>
	 <Td><input type="hidden" name="id<?php echo $b; ?>" value="<?php echo $row['user_id']; ?>"><?php $rumus=mysql_query("select status from register where user_id='$row[user_id]'"); $array=mysql_fetch_array($rumus); ?>
		<?php if($array['status'] == 'on progress' || $array['status'] == 'on progres 1' || $array['status'] == 'on progres 2' || $array['status'] == 'on progres 3' || $array['status'] == 'on progres 4' || $array['status'] == '-') { echo "Waiting"; } ?>
		<?php if($array['status'] == 'done test' || $array['status'] == 'downloaded') { echo "On Progress"; } ?>
		<?php if($array['status'] == 'done') { echo "Done"; } ?>
	</select></td>
	<td><font size='-1'><?php $rumuse2=mysql_query("select * from psikotest where id='$row[user_id]' and pic <>'' order by id_psi desc"); $row2=mysql_fetch_array($rumuse2);
	switch($row2['status']) { case 0 : echo "-"; break; case 1 : echo "Lulus"; break; case 2 : echo "Tidak Lulus"; break; case 3 : echo "Tidak Hadir"; break;} ?></td>
	 <td> <?php if($_SESSION['level'] == 1) { ?>
			<?php $ru=mysql_query("select * from papi_final where id_user='$row[user_id]'"); $con=mysql_num_rows($ru); if($array['status'] == "downloaded" || $array['status'] == "done") { if($con == 0) { ?><?php } else { ?><a href="downloaded2.php?user_name=<?php echo $row['user_id']; ?>"> Download hasil psikogram </a><?php }}else{echo "download psikogram";}} ?></td>
	</tr> <?php }} ?>
</table>
<br>
<input type="radio" name="pilih" value="1" id="aa" required> <label for="aa"> Update Hasil Tes-> </label><select name="hasil"> <option value=""></option><option value="0">-</option><option value="1">Lulus</option> <option value="3">Tidak Hadir</option> <option value="2">Tidak Lulus</option> </select> | <button type="submit" class="pure-button pure-button-primary">Update</button><br><br>
<input type="radio" name="pilih" value="2" id="bb" required> <label for="bb">Download Infokar<button type="submit" class="pure-button pure-button-primary">Download</button></b>
</form>
<?php if($_GET['label'] == "yes" || $_GET['id'] != "") { $label=$_POST['label']; if($label == "") { $label=$_GET['id']; } ?> <?php }
if($_GET['download'] == "yes") { ?><script language="javascript">document.location.href="download.php?user_name=<?php echo $_GET['id']; ?>";</script><?php }
//if($_GET['download2'] == "yes") { ?><script language="javascript"><!--document.location.href="download_psikogram.php?user_name=<?php //echo $_GET['id']; ?>";</script><?php //}
if($_GET['download2'] == "yes") { ?><script language="javascript">document.location.href="psikogram_iso_online_rev.php?user_name=<?php echo $_GET['id']; ?>&nama=<?php echo $row['nama_lengkap']; ?>";</script><?php }
if($_GET['download3'] == "yes") { ?><script language="javascript">document.location.href="download_psikogram2.php?user_name=<?php echo $_GET['id']; ?>";</script><?php }
echo $row['user_name']; ?>
</body>
</html>