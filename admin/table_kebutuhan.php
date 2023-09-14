<?php
$bln= date('Y-m-d');
$split=explode ('-',$bln);
$id=$_POST['id'];
$pic=$_POST['pic'];
$d=$_POST['bln'];
$e=$_POST['th'];
$reg=$_POST['reg'];
$client=$_POST['client'];
$bu=$_POST['bu'];
if($id == "") { $ids=""; } else { $ids=" and a.id='$id'"; }
if($pic == "") { $pics=""; } else { $pics=" and d.id_admin='$pic'"; }
if($bu == "") { $bus=""; } else { $bus=" and e.id_sbu='$bu'"; }

if($d == "" && $e == "") { $tgls=" and a.tanggal like '$split[0]-$split[1]-%'"; }
elseif($d == "" && $e != "") { $tgls=" and a.tanggal like '$e%'"; }
elseif($d != "" && $e == "") { $tgls=" and a.tanggal like '%-$d-%'"; }
elseif($d != "" && $e != "") { $tgls=" and a.tanggal like '$e-$d-%'"; }

if($reg == "") { $regs=""; } else { $regs=" and c.id_region='$reg'"; }
if($client == "") { $clients=""; } else { $clients=" and b.id='$client'"; }

?>

Search by :<br>

<form action="menu.php?data=table_kebutuhan&set=id" method="post" class="pure-form">
	ID : <input type="text" maxlength="3" size="10" name="id" value="<?php echo $_POST['id']; ?>"> | 
	PIC : <select name="pic">
				<option value="">--Pilih Salah Satu--</option>
<?php
include "sql_connect.php";
$rumus="select * from admin where level=2";
$query=mysql_query($rumus);
while($row=mysql_fetch_array($query)) { ?>
				<option value="<?php echo $row['id_admin']; ?>"><?php echo $row['user_name']; ?></option>
<?php } ?>
			</select> | 
	Bulan : <select name="bln" >
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
	Region : <select name="reg">
				<option value="">--Pilih Salah Satu--</option>
<?php
include "sql_connect.php";
$rumus="select * from region";
$query=mysql_query($rumus);
while($row=mysql_fetch_array($query)) { ?>
				<option value="<?php echo $row['id_region']; ?>"><?php echo $row['name_region']; ?></option>
<?php } ?>
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
			</select> | 
	BU : <select name="bu">
				<option value="">--Pilih Salah Satu--</option>
<?php
include "sql_connect.php";
$rumus="select * from sbu";
$query=mysql_query($rumus);
while($row=mysql_fetch_array($query)) { ?>
				<option value="<?php echo $row['id_sbu']; ?>"><?php echo $row['sbu_name']; ?></option>
<?php } ?>
			</select>
	<button type="submit" class="pure-button pure-button-primary">Search</button>
</form>
<table border=1 width="99%" class="a">
	<tr bgcolor="gray">
		<th> ID </th>
		<th> KEBUTUHAN </th>
		<th> TANGGAL </th>
		<th> PIC </th>
		<th> REGION </th>
		<th> CLIENT </th>
		<th> JUMLAH </th>
		<th> VIEW TMK </th>
	</tr> <?php include "sql_connect.php";
	$query=mysql_query("select a.id,a.used,a.nama,a.tanggal,a.attempt,d.user_name as pic,c.name_region,b.nama as client,e.sbu_name from kebutuhan a,client b,region c,admin d,sbu e where 
	a.client=b.id and d.region=c.id_region and a.pic=d.id_admin and a.bu=e.id_sbu $ids $bus $pics $tgls $regs $clients order by a.id desc");while($row=mysql_fetch_Array($query)) { ?>
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
		<td bgcolor="yellow"><a href="menu.php?data=monitoring_&id=<?php echo $row['id']; ?>">Cek Status</a></td> <?php } ?>
	</tr> <?php } ?>
</table>