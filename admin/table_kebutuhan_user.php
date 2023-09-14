<?php
$id=$_POST['id'];
$d=$_POST['bln'];
$e=$_POST['th'];
$reg=$_POST['reg'];
$client=$_POST['client'];
if($id == "") { $ids=""; } else { $ids=" and a.id='$id'"; }
 $pics=" and d.id_admin='$_SESSION[id]'";

if($d == "" && $e == "") { $tgls=""; }
elseif($d == "" && $e != "") { $tgls=" and a.tanggal like '$e%'"; }
elseif($d != "" && $e == "") { $tgls=" and a.tanggal like '%-$d-%'"; }
elseif($d != "" && $e != "") { $tgls=" and a.tanggal like '$e-$d-%'"; }

if($reg == "") { $regs=""; } else { $regs=" and c.id_region='$reg'"; }
if($client == "") { $clients=""; } else { $clients=" and b.id='$client'"; }

?>

Search by :<br>

<form action="menu.php?data=table_kebutuhan_user&set=id" method="post">
	ID : <input type="text" maxlength="3" size="10" name="id" value="<?php echo $_POST['id']; ?>"> | 
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
        </select> |
	Client : <select name="client">
				<option value="">--Pilih Salah Satu--</option>
<?php
include "sql_connect.php";
$rumus="select * from client";
$query=mysql_query($rumus);
while($row=mysql_fetch_array($query)) { ?>
				<option value="<?php echo $row['id']; ?>"><?php echo $row['nama']; ?></option>
<?php } ?>
			</select>
	<input type="submit" value="search">
</form>
<table border=1 width="99%">
	<tr bgcolor="gray">
		<td> ID </td>
		<td> KEBUTUHAN </td>
		<td> TANGGAL </td>
		<td> PIC </td>
		<td> REGION </td>
		<td> CLIENT </td>
		<td> JUMLAH </td>
		<td> VIEW TMK </td>
	</tr> <?php include "sql_connect.php";
	$query=mysql_query("select a.id,a.used,a.nama,a.tanggal,a.attempt,d.user_name as pic,c.name_region,b.nama as client from kebutuhan a,client b,region c,admin d where 
	a.client=b.id and a.region=c.id_region and a.pic=d.id_admin $ids $pics $tgls $regs $clients order by a.id desc");while($row=mysql_fetch_Array($query)) { ?>
	<tr>
		<td> <?php echo $row['id']; ?> </td>
		<td> <?php echo $row['nama']; ?> </td>
		<td> <?php echo $row['tanggal']; ?> </td>
		<td> <?php echo $row['pic']; ?> </td>
		<td> <?php echo $row['name_region']; ?> </td>
		<td> <?php echo $row['client']; ?> </td>
		<td> <?php echo $row['attempt']; ?> </td>
		 <?php 
		$query2=mysql_query("select kebutuhan from register where kebutuhan='$row[id]'"); $a2r=mysql_num_rows($query2);
		if($a2r == 0) { ?><td bgcolor="red"><a href="menu.php?data=form_register&id=<?php echo $row['id']; ?>">Create user</a></td> <?php } else { ?>
		<td bgcolor="yellow"><a href="menu.php?data=monitoring_user&id=<?php echo $row['id']; ?>">Cek Status</a></td> <?php } ?>
	</tr> <?php } ?>
</table>