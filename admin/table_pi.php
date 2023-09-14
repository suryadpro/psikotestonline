<?php
include "sql_connect.php";
if($_GET['set'] == "update") {
$rumus="insert into admin values('','$_POST[pic]','persada2014','$_POST[lvl]','$_POST[reg]')";
$query=mysql_query($rumus);
}
?>



<form action="menu.php?data=table_pi&set=update" method="post" class="pure-form">
	Tambah PIC -> Nama PIC : <input type="text" size="20" name="pic" > | 
			<select name="lvl" required>
				<option></option>
				<option>1</option>
				<option>2</option>
			</select>
			Region : <select name="reg">
				<option value="">--Pilih Salah Satu--</option>
<?php
include "sql_connect.php";
$rumus="select * from region";
$query=mysql_query($rumus);
while($row=mysql_fetch_array($query)) { ?>
				<option value="<?php echo $row['id_region']; ?>"><?php echo $row['name_region']; ?></option>
<?php } ?>
			</select>
	<button type="submit" class="pure-button pure-button-primary">Kirim</button>
</form>
<table border=1 width="99%" class="a">
	<tr bgcolor="gray">
		<th> ID </th>
		<th> PIC </th>
		<th> Password </th>
		<th> Level </th>
	</tr> <?php include "sql_connect.php";
	$query=mysql_query("select * from admin");while($row=mysql_fetch_Array($query)) { ?>
	<tr>
		<td> <?php echo $row['id_admin']; ?> </td>
		<td> <?php echo $row['user_name']; ?> </td>
		<td> <?php echo $row['password']; ?> </td>
		<td> <?php echo $row['level']; ?> </td>
	</tr> <?php } ?>
</table>