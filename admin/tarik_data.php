<?php
$d=$_POST['bln'];
$e=$_POST['th'];
if($_GET['proses'] == "yes") { 
include "sql_connect.php";
$rumus="select d.nama_lengkap,e.tanggal,e.tes1,e.tes2,e.tes3,e.tes4,e.tes5,c.nama,b.user_name as pic,f.name_region as region from kebutuhan a,region f,admin b,client c,hasil e,register d where e.user_id=d.user_id and a.pic=b.id_admin and a.id=e.label and a.client=c.id and a.tanggal like '$e-$d-%' and b.region=f.id_region";
$query=mysql_query($rumus); echo $rumus;

}
?>
<form action="menu.php?data=tarik_data&proses=yes" method="post">			
			per Bulan :

	<select name="bln" >
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
	    <option <?php if($e == "2014") { echo "selected"; } ?> >2014</option>
	    <option <?php if($e == "2015") { echo "selected"; } ?> >2015</option>
	    <option <?php if($e == "2016") { echo "selected"; } ?> >2016</option>
        </select>
<input type="submit" value="search">
</form>
<hr>
<?php
if($_GET['proses'] == "yes") { 
?>
<h4> <a href="download_rekap_data.php?bln=<?php echo $d; ?>&th=<?php echo $e; ?>"> Clik here to download </a> </h4>
<table width="100%" border='1'>
	<tr align="center">
		<td rowspan='2'> No </td>
		<td rowspan='2'> Nama </td>
		<td rowspan='2'> TGL Tes </td>
		<td colspan='5'> Status Tes </td>
		<td rowspan='2'> Fungsi </td>
		<td rowspan='2'> PIC </td>
		<td rowspan='2'> REGION </td>
	</tr>
	<tr align="center">
		<Td>Tes1</td>
		<Td>Tes2</td>
		<Td>Tes3</td>
		<Td>Tes4</td>
		<Td>Tes5</td>
	</tr>

	<?php $no=0;
	while($row=mysql_fetch_array($query)) { $no++;?>
	<tr>
		<td> <?php echo $no; ?> </td>
		<td> <?php echo $row['nama_lengkap']; ?> </td>
		<td> <?php echo $row['tanggal']; ?> </td>
		<td> <?php echo $row['tes1']; ?> </td>
		<td> <?php echo $row['tes2']; ?> </td>
		<td> <?php echo $row['tes3']; ?> </td>
		<td> <?php echo $row['tes4']; ?> </td>
		<td> <?php echo $row['tes5']; ?> </td>
		<td> <?php echo $row['nama']; ?> </td>
		<td> <?php echo $row['pic']; ?> </td>
		<td> <?php echo $row['region']; ?> </td>
	</tr>
	<?php } ?>
</table>
<?php } ?>