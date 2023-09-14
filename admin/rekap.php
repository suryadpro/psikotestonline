<table border=1 width='100%'>
	<tr>
		<Td colspan="2" align="center">A S P E K P S I K O L O G I S</td>
		<td colspan='8' align="center">S K A L A</td>
	</tr>
	<tr>
		<Td colspan="2" bgcolor="gray"> K E C E R D A S A N</td>
		<Td align="center">1</td>
		<Td align="center">2</td>
		<Td align="center">3</td>
		<Td align="center">4</td>
		<Td align="center">5</td>
		<Td align="center">6</td>
		<Td align="center">7</td>
		<Td align="center">8</td>
	</tr>
<!--koneksi ke database-->
<?php
include "sql_connect.php";
$rumus="select * from default_form order by id_def asc";
$query=mysql_query($rumus); $no=0;
while($row=mysql_fetch_array($query)) { $no++; 
	if($no == 3) {?>
	<tr>
		<Td colspan="2" bgcolor="gray"> S I K A P   K E R J A </td>
		<Td align="center">1</td>
		<Td align="center">2</td>
		<Td align="center">3</td>
		<Td align="center">4</td>
		<Td align="center">5</td>
		<Td align="center">6</td>
		<Td align="center">7</td>
		<Td align="center">8</td>
	</tr>
	<?php } elseif ($no == 9) { ?>
	<tr>
		<Td colspan="2" bgcolor="gray"> K E P R I B A D I A N</td>
		<Td align="center">1</td>
		<Td align="center">2</td>
		<Td align="center">3</td>
		<Td align="center">4</td>
		<Td align="center">5</td>
		<Td align="center">6</td>
		<Td align="center">7</td>
		<Td align="center">8</td>
	</tr>
	<?php } ?>
	<tr>
		<td valign="top" > <?php echo $no; ?> </td>
		<td> <?php echo $row['soal']; ?> </td>
		<td> <input type="radio" name="radio<?php echo $no; ?>" value="1"> </td>
		<td> <input type="radio" name="radio<?php echo $no; ?>" value="2"> </td>
		<td bgcolor="gray"> <input type="radio" name="radio<?php echo $no; ?>" value="3"> </td>
		<td bgcolor="gray"> <input type="radio" name="radio<?php echo $no; ?>" value="4"> </td>
		<td bgcolor="gray"> <input type="radio" name="radio<?php echo $no; ?>" value="5"> </td>
		<td> <input type="radio" name="radio<?php echo $no; ?>" value="6"> </td>
		<td> <input type="radio" name="radio<?php echo $no; ?>" value="7"> </td>
		<td> <input type="radio" name="radio<?php echo $no; ?>" value="8"> </td>
	</tr>
	<?php } ?>
</table>
		