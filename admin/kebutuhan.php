<?php
include "sql_connect.php";
?>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="js/tcal.css" />
		<script type="text/javascript" src="js/tcal.js"></script>
<style type="text/css">
table.sample {
	border-spacing: 2px;
	border-style: inset;
	border-collapse: separate;
	background-color: white;
}
table.sample th {
	border-width: thin;
	padding: 3px;
	border-style: dashed;
	border-color: gray;
	background-color: white;
	-moz-border-radius: ;
}
table.sample td {
	border-width: thin;
	padding: 3px;
	border-style: dashed;
	border-color: gray;
	background-color: white;
	-moz-border-radius: ;
}
</style>

</head>
<body>
<form action="kebutuhan_proses.php"method="POST" class="pure-form">
<table border="0"align="center"width="100%"class="a">
    <tr align="center">
        <td> Posisi/Fungsi yang diajukan </td>
        <td> : </td>
        <td> <input type="text"name="kebutuhan" required autocomplete="off"> </td>
    </tr>
    <tr align="center">
        <td> Tanggal Request ( yyyy-mm-dd ) </td>
        <td> : </td>
        <td> <input type="text"name="tgl" required class="tcal" autocomplete="off"> </td>
    </tr>
	<tr align="center">
        <td> PIC </td>
        <td> : </td>
        <td> <select name="pic" required>
				<option value="">--Pilih Salah Satu--</option>
<?php
$rumus="select * from admin order by user_name asc";
$query=mysqli_query($koneksi,$rumus);
while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)) { ?>
				<option value="<?php echo $row['id_admin']; ?>"><?php echo $row['user_name']; ?></option>
<?php } ?>
			</select> </td>
    </tr>
	<tr align="center">
        <td> Client </td>
        <td> : </td>
        <td> <select name="client" required>
				<option value="">--Pilih Salah Satu--</option>
<?php
include "sql_connect.php";
$rumus="select * from client order by nama asc";
$query=mysqli_query($koneksi,$rumus);
while($row=mysqli_fetch_array($query)) { ?>
				<option value="<?php echo $row['id']; ?>"><?php echo $row['nama']; ?></option>
<?php } ?>
			</select></td>
    </tr>
    <tr align="center">
        <td> Jumlah </td>
        <td>:</td>
        <td> <input type="text" name="jumlah"></td>
	</tr>
     <tr align="center">
        <td colspan="3" align="center"><button type="submit" class="pure-button pure-button-primary">Submit</button></td>
    </tr>
</table>
</form>
</body>
</html>