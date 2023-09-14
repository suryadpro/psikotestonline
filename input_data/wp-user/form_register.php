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
<form action="register_proses.php"method="POST">
<table border="0"align="center"width="75%"class="sample">
    <tr align="center">
        <td> Nama Lengkap </td>
        <td> : </td>
        <td> <input type="text"name="nama_lengkap"placeholder="nama lengkap" required> </td>
    </tr>
    <tr align="center">
        <td> Nomor KTP </td>
        <td> : </td>
        <td> <input type="text"name="no_ktp"placeholder="No KTP"required> </td>
    </tr>
    <tr align="center">
        <td> email </td>
        <td> : </td>
        <td> <input type="text"name="email"placeholder="email"required></td>
    </tr>
    <tr align="center">
        <td> Tempat dan tanggal lahir </td>
        <td> : </td>
        <td> <input type="text"name="tempat_tanggal_lahir"placeholder="tempat & tanggal lahir"required> </td>
    </tr>
    <tr align="center">
        <td> Alamat </td>
        <td>:</td>
        <td> <input type="text"name="alamat" placeholder="alamat" required /></td>
    </tr>
    <tr align="center">
        <td> Kota </td>
        <td> : </td>
        <td> <input type="text"name="kota"placeholder="kota"required> </td>
    </tr>
    <tr align="center">
        <td> Nomor Handphone </td>
        <td> : </td>
        <td> <input type="text"name="no_hp"placeholder="No Hp"required> </td>
    </tr>
    <tr align="center">
        <td> Pendidikan </td>
        <td>:</td>
        <td> <select name="pendidikan">
                <option>SMA</option>
                <option>SMK</option>
                <option>D1</option>
                <option>D3</option>
                <option>S1</option>
                <option>S2</option>
             </select></tr>
    <tr align="center">
        <td> Nama Sekolah </td>
        <td> : </td>
        <td> <input type="text"name="nama_sekolah"placeholder="nama sekolah"required> </td>
    </tr>
    <tr align="center">
        <td> Rata rata / IPK </td>
        <td> : </td>
        <td> <input type="text"name="ipk"placeholder="rata rata/ipk"required></td>
    </tr>
    <tr align="center">
        <td> Referensi </td>
        <td> : </td>
        <td> <select name="referensi"required>
                <option> Teman</option>
                <option> Sekolah</option>
                <option> Koran</option>
                <option> Internet</option>
                <option> Inisiatif</option>
                <option> Job Fair</option>
             </select></td>
    </tr>
    <tr align="center">
        <td> Pekerjaan yang dicari </td>
        <td>:</td>
        <td> <input type="text"name="pekerjaan_dicari"placeholder="pekerjaan dicari"required></td>
    </tr>
     <tr align="center">
        <td colspan="3"><input type="submit"value="Register"></td>
    </tr>
</table>
</form>
</body>
</html>