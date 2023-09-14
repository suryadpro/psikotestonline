<table border=1>
	<tr>
		<Td colspan="2">A S P E K P S I K O L O G I S</td>
		<td>S K A L A</td>
	</tr>
	<tr>
		<Td colspan="2"> K E C E R D A S A N</td>
		<Td>Nilai</td>
	</tr>
<!--koneksi ke database-->
<?php
include "sql_connect.php";
$rumus="select * from default_form order by id_def asc";
$query=mysql_query($rumus); $no=0;
while($row=mysql_fetch_array($query)) { $no++; ?>
	<tr>
		<td valign="top"> <?php echo $no; ?> </td>
		<td> <?php echo $row['soal']; ?> </td>
		<td> <select name="nilai<?php echo $no; ?>">
				<option>0</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
			</select></td>
	</tr>
	<?php } ?>
</table>
		