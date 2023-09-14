<html>
<head>
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
<p align="center">
<table width="100%" bgcolor="white" align="center">
	<tr>
		<td>

<?php 
$tahun= date('Y');
include "sql_connect.php";
echo $rumus="select a.tanggal,a.attempt,a.used,c.code_region,c.name_region,a.id,a.nama,d.user_name from kebutuhan a,client b,region c,admin d where 
	a.client=b.id and d.region=c.id_region and a.pic=d.id_admin and a.id='$_GET[id]' order by a.id desc";
$query=mysqli_query($koneksi,$rumus);
$ar=mysqli_Fetch_array($query);
$jumlah=$ar['attempt']-$ar['used'];
?>
<h4 align="center"> PIC : <?php echo $ar['user_name']; ?>
 | Jumlah Kebutuhan : <?php echo $ar['attempt']; ?>
 | Fungsi : <?php echo $ar['nama']; ?>
 | Tanggal Req : <?php echo $ar['tanggal']; ?>
 | Region : <?php echo $ar['name_region']; ?>

<?php for($go=1;$go<=$jumlah;$go++) {
?>
<form action="register_proses.php"method="POST" class="pure-form"><input type="hidden" name="ide" value="<?php echo $_GET['id']; ?>">
<table border="0" align="center" width="100%" class="a">
    <tr align="center">
        <td> Data kandidat <?php echo $go; ?></td>
        <td> : </td>
        <td> Nama : <input type="text" name="nm<?php echo $go; ?>" required /> 
			  | user name : <input type="text"name="usr<?php echo $go; ?>" required /> 
			  | Kode Region : <?php echo $ar['code_region']; ?><input type="hidden" name="kd<?php echo $go; ?>" value="<?php echo $ar['code_region']	; ?>">
			  | Password : persada<?php echo $tahun; ?><input type="hidden" name="pw<?php echo $go; ?>" value="persada<?php echo $tahun; ?>">
		</td>
    </tr>
<?php } ?>
     <tr align="center">
        <td colspan="3"><input type="hidden" value="<?php echo $_GET['id']; ?>" name="id"><button type="submit" class="pure-button pure-button-primary">Register</button></td>
    </tr>
</table>
</form>
</body>
</html>