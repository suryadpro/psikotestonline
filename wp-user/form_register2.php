<html>
<head>
</head>
<body>
<form action="register_proses.php"method="POST">
<table align="center">
    <tr align="center">
        <td> Tempat dan tanggal lahir </td>
        <td> : </td>
        <td> <input type="text"name="tempat_tanggal_lahir"> </td>
    </tr>
    <tr align="center">
        <td> Alamat </td>
        <td>:</td>
        <td> <input type="text"name="alamat"></td>
    </tr>
    <tr align="center">
        <td> Kota </td>
        <td> : </td>
        <td> <input type="text"name="kota"> </td>
    </tr>
    <tr align="center">
        <td> kode pos </td>
        <td> : </td>
        <td> <input type="text"name="kode_pos"maxlength="7"></td>
    </tr>
    <tr align="center">
        <td> Nomor Handphone </td>
        <td> : </td>
        <td> <input type="text"name="no_hp"maxlength="12"> </td>
    </tr>
    <tr align="center">
        <td> Lulusan </td>
        <td>:</td>
        <td> <input type="text"name="lulusan"></td>
    </tr>
    <tr align="center">
        <td> Nama Sekolah </td>
        <td> : </td>
        <td> <input type="text"name="nama_sekolah"> </td>
    </tr>
    <tr align="center">
        <td> Rata rata / IPK </td>
        <td> : </td>
        <td> <input type="text"name="ipk"></td>
    </tr>
    <tr align="center">
        <td> Referensi </td>
        <td> : </td>
        <td> <select name="referensi">
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
        <td> <input type="text"name="pekerjaan_dicari"></td>
    </tr>
     <tr align="center">
        <td colspan="3"><input type="submit"value="Next Step"></td>
    </tr>
</table>
</form>
</body>
</html>