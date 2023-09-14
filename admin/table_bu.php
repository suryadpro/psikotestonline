<?php
include "sql_connect.php";
//if($_GET['set'] == "update") {
//$rumus="insert into sbu values('','$_POST[pic]','persada2014','$_POST[lvl]')";
//$query=mysql_query($rumus);
//}
?>



<form action="menu.php?data=table_pi&set=update" method="post">
	Tambah PIC -> Nama PIC : <input type="text" size="20" name="pic" > | 
			<select name="lvl" required>
				<option></option>
				<option>1</option>
				<option>2</option>
			</select>
	<input type="submit" value="Kirim">
</form>
<table border=1 width="99%">
	<tr bgcolor="gray">
		<td> ID </td>
		<td> Nama BU </td>
		<td> Lokasi </td>
	</tr> <?php include "sql_connect.php";
	$query=mysql_query("select * from sbu");while($row=mysql_fetch_Array($query)) { ?>
	<tr>
		<td> <?php echo $row['sbucode']; ?> </td>
		<td> <?php echo $row['sbu_name']; ?> </td>
		<td> <?php echo $row['location']; ?> </td>
	</tr> <?php } ?>
</table>