<html>
<head>
<script src="js/jquery-1.9.1.js"></script>
		<style>
.form-2 {
    /* Size and position */
    width: 85%;
	 margin: 20px auto 10px;
    padding: 15px;
    position: relative;

    /* Styles */
    background: #fffaf6;
    border-radius: 4px;
    color: #7e7975;
    box-shadow:
        0 2px 2px rgba(0,0,0,0.2),        
        0 1px 5px rgba(0,0,0,0.2),        
        0 0 0 12px rgba(255,255,255,0.4); 
}
</style>
</head>
<body background="images/bg3.jpg"><?php include "sql_connect.php"; $query=mysql_query("select * from kandidat_persada where user_id='$_GET[id]'");
 $row=mysql_fetch_array($query); ?>
 <div class="form-2"><font face="Berlin Sans FB">
	<table width="100%" border=1>
		<tr  bgcolor="#99FFFF">
			<td> ID </td>
			<td> : </td>
			<td><?php echo $row['id']; ?></td>
			<td> Nama Lengkap </td>
			<td> : </td>
			<td><?php echo $row['nama_lengkap']; ?></td>
		</tr>
		<tr>
			<td> Bidang Peminatan </td>
			<td> : </td>
			<td><?php echo $row['posisi_kerja1']; ?></td>
			<td> Tempat & Tanggal Lahir </td>
			<td> : </td>
			<td><?php echo $row['tempat_lahir']." , ".$row['tgl_lahir']; ?></td>
		</tr>
		<tr bgcolor="#99FFFF">
			<td> Gender </td>
			<td> : </td>
			<td><?php echo $row['gender']; ?></td>
			<td> Status Kawin </td>
			<td> : </td>
			<td><?php echo $row['status_kawin']; ?></td>
		</tr>
		<tr>
			<td> Agama </td>
			<td> : </td>
			<td><?php echo $row['agama']; ?></td>
			<td> Alamat Lengkap </td>
			<td> : </td>
			<td><?php echo $row['alamat_lengkap']; ?></td>
		</tr>
		<tr bgcolor="#99FFFF">
			<td> Kota </td>
			<td> : </td>
			<td><?php echo $row['kota']; ?></td>
			<td> Kode Pos </td>
			<td> : </td>
			<td><?php echo $row['kode_pos']; ?></td>
		</tr>
		<tr>
			<td> Level Pendidikan </td>
			<td> : </td>
			<td><?php echo $row['level_pend']; ?></td>
			<td> Bidang Studi </td>
			<td> : </td>
			<td><?php echo $row['jurusan']; ?></td>
		</tr>
		<tr bgcolor="#99FFFF">
			<td> Tahun Lulus </td>
			<td> : </td>
			<td><?php echo $row['tahun_lulus']; ?></td>
			<td> IPK </td>
			<td> : </td>
			<td><?php echo $row['ipk']; ?></td>
		</tr>
		<tr>
			<td> Sekolah </td>
			<td> : </td>
			<td><?php echo $row['sekolah_universitas']; ?></td>
			<td> Nomor KTP </td>
			<td> : </td>
			<td><?php echo $row['nmr_ktp']; ?></td>
		</tr>
		<tr bgcolor="#99FFFF">
			<td> Tanggal Input </td>
			<td> : </td>
			<td><?php echo $row['tanggal_input']." , ".$row['jam_input']; ?></td>
			<td> Nama Ibu Kandung </td>
			<td> : </td>
			<td><?php echo $row['nama_ibu']; ?></td>
		</tr>
		<tr>
			<td> Nomor Handpone </td>
			<td> : </td>
			<td><?php echo $row['mobile_phone']; ?></td>
			<td> Gaji yang diinginkan </td>
			<td> : </td>
			<td><?php echo $row['range_gaji']; ?></td>
        </tr>
		<tr bgcolor="#99FFFF">
			<td> Tanggal Psikotest </td>
			<td> : </td>
			<td><?php echo $row['tgl_psikotest']; ?></td>
			<td> Referensi </td>
			<td> : </td>
			<td><?php echo $row['referensi']; ?></td>
        </tr>
		<tr bgcolor="">
			<td> Pengalaman 1 </td>
			<td> : </td>
			<td><?php echo $row['pengalaman1']; ?></td>
			<td> Pengalaman 2 </td>
			<td> : </td>
			<td><?php echo $row['pengalaman2']; ?></td>
        </tr>
		<tr bgcolor="#99FFFF">
			<td> Pengalaman 3 </td>
			<td> : </td>
			<td><?php echo $row['pengalaman3']; ?></td>
			<td>Tinggi / Berat Badan </td>
			<td> : </td>
			<td><?php echo $row['tinggi']." cm / ".$row['berat']." kg "; ?> </td>
        </tr>
		<tr bgcolor="">
			<td colspan="2">Lokasi Diinginkan </td>
			<td colspan="1"> : </td>
			<td colspan="3"><?php echo $row['lokasi1']." & ".$row['lokasi2']; ?> </td>
        </tr>
	</table>
    <script>
$("td:empty").text("-");
</script>
</div>
</body>
</html>
		